<?php
namespace Controller;
include API_DIR.'Header.php';
include API_DIR.'crop.php';
include API_DIR.'Cv.php';

class Profile extends Controller {
	public function index(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$id = \Util\get('id');
			if(!is_numeric($id)) \Util\redirect('/') ;
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top();
			$r->merge(\Api\VisitCard::get_full($id, 'user_profile'));
			$data = $r->data;	
			if(!($data['user_profile'])) return \Util\redirect('/');	
			$data['suggestions'] = \Api\Suggestion::getSuggestion();	
			$data['is_self'] = $id === $id_user;
			$data['is_friend'] = \Api\User::is_friend($id,$id_user)->is_success();
			$data['is_invited'] = \Api\User::is_invited($id,$id_user)->is_success();
			$data['has_invited'] = \Api\User::is_invited($id_user,$id)->is_success();	
			$data['cvs'] = \Api\Cv::getCvs($id);
			$data['id'] = $id;			
			$messagesPerPage = 5 ;
			$data['count'] = \Api\Activity::getCountNews($id)['total'] ;				
			$numberOfPages = ceil($data['count'] / $messagesPerPage);				
			if(\Util\get('page')) {
				$currentPage = intval(\Util\get('page'));
				if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
			} else {
				$currentPage = 1; 
			} 
			$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
			$data['numberOfPages'] = $numberOfPages ;
			$data['news'] = \Api\Activity::getNews($firstEntry, $messagesPerPage, $id)->data['news'];
			return $this->out($data,'profile/index',true);
		}
	}
	
	public function edit(){				
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top($id_user);
			$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
			$data = $r->data;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();	
			return $this->out($data,'profile/edit',true);
		}
	}
	
	public function saveProfile(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top($id_user);
			$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
			$data = $r->data;		
			$arr = \Util\post_multi('perPhone','perMobile','perEmail', 'perSociaux', 'cmpnPhone','cmpnFax','cmpnSite','cmpnAddress','company_city','company_country','perLastname','perFirstname','perJob','cmpnName','cmpnActivity');
			extract($arr);
			$result = \Api\User::signup_extended($perSociaux, $perEmail,$perMobile,$perPhone,$cmpnAddress,$cmpnPhone,$cmpnFax,$cmpnSite,$perLastname,$perFirstname,$perJob,$cmpnName,$cmpnActivity,$company_city,$company_country);
			if($result->is_success()) return \Util\redirect('/user?id='.$id_user.'&success=1');		
			return $this->out($data,'profile/edit',true);
		}
	}
	
	public function editImage(){		
		$id_user = \Api\User::get_current_user()->get('id_user');
		$r = \Api\Header::get_top($id_user);
		$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
		$data = $r->data;
		return $this->out($data,'profile/editImage',true);
	}

	/*public function deleteImage(){	
		$id_user = \Api\User::get_current_user()->get('id_user');
		$r = \Api\Header::get_top($id_user);
		$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
		$data = $r->data;
		$data['id_user'] = $id_user ;
		if (isset($_POST['delete'])) {
			if (isset($data['user_profile']['user_picture'])) {
				$unlink = unlink((__DIR__."/../../www/uploads/users/".((in_array($data['user_profile']['gendre'], array(2,3))? 'women/' : 'men/')).$data['user_profile']['user_picture']));
				if ($unlink) {
					$response['success'] = true; 	
					$response['message'] = \Lang\success_msg_delete_image;
				} else {
					$response['success'] = false; 	
					$response['message'] = \Lang\error_msg_delete_image;					
				}
				echo json_encode($response); exit ;			
			}
		}
		return $this->out($data,'profile/deleteImage',true);
	}*/
	
	public function uploadImage(){	
		if (isset($_FILES)) {
			$file = $_FILES['image'];
			if (in_array($file['type'], array('image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/gif'))) {
				$relativePath = 'uploads/users/';
				$uploaddir = 'uploads/users/temp/';
				$originalFileName = basename($_FILES['image']['name']);
				$fileName = \Api\GlobalUtil::generateFileName($originalFileName);
				$uploadfile = $uploaddir.$fileName;
				if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
					$path = $fileName;
					if (! empty($path)) {
						$dimension = getimagesize($uploadfile);
						if ($dimension[0] > 500 || $dimension[1] > 500)  \Api\GlobalUtil::imageResize($path, 'uploads/users/temp/', 500, 500);
					}
					echo ($dimension[0] < 200 || $dimension[1] < 200)? "fileTooShort" : $fileName;
				} else {
					echo "none";
				}
			} else {
				echo "InvalideFileType";
			}
		}
		exit;
	}	
	
	public function saveImage(){
		$id_user = \Api\User::get_current_user()->get('id_user');				
		$image_path = \Util\post('image_path');
		$extension = array_reverse(explode('.', $image_path)) ;
		$new_image_path = 'picture_'.time().'.'.$extension[0] ;
		$x = \Util\post('x');
		$y = \Util\post('y');
		$w = \Util\post('w');
		$h = \Util\post('h');
		$gendre = \Util\post('gendre');
		if(file_exists('uploads/users/temp/'.$image_path) && $image_path!='') : 
			copy($_SERVER['DOCUMENT_ROOT']."/uploads/users/temp/".$image_path, "uploads/users/original/".$image_path);
			unlink('uploads/users/temp/'.$image_path);
		endif ;
		if(file_exists('uploads/users/original/'.$image_path) && $image_path!='') : 
			$crop = new \Api\Crop($_SERVER['DOCUMENT_ROOT']."/uploads/users/original/".$image_path, $x, $y, $w, $h);
			$crop->crop($_SERVER['DOCUMENT_ROOT']."/uploads/users/".((in_array($gendre, array(2,3)))? 'women/' : 'men/').$image_path);		
			rename($_SERVER['DOCUMENT_ROOT']."/uploads/users/".((in_array($gendre, array(2,3)))? 'women/' : 'men/').$image_path, $_SERVER['DOCUMENT_ROOT']."/uploads/users/".((in_array($gendre, array(2,3)))? 'women/' : 'men/').$new_image_path);
			rename($_SERVER['DOCUMENT_ROOT']."/uploads/users/original/".$image_path, $_SERVER['DOCUMENT_ROOT']."/uploads/users/original/".$new_image_path);
			$result = \Api\User::saveImage($new_image_path);
		endif ;
		\Util\redirect('/success') ;
	}
	
	public function editLogo(){		
		$id_user = \Api\User::get_current_user()->get('id_user');
		$r = \Api\Header::get_top($id_user);
		$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
		$data = $r->data;	
		return $this->out($data,'profile/editLogo',true);
	}
	
	public function uploadLogo(){			
		if (isset($_FILES)) {
			$file = $_FILES['image'];
			if (in_array($file['type'], array('image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/gif'))) {
				$relativePath = 'uploads/logo/';
				$uploaddir = 'uploads/logo/temp/';
				$originalFileName = basename($_FILES['image']['name']);
				$fileName = \Api\GlobalUtil::generateFileName($originalFileName);
				$uploadfile = $uploaddir.$fileName;
				if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
					$path = $fileName;
					if (! empty($path)) {
						$dimension = getimagesize($uploadfile);
						if ($dimension[0] > 500 || $dimension[1] > 500)  \Api\GlobalUtil::imageResize($path, 'uploads/logo/temp/', 500, 500);
					}
					echo ($dimension[0] < 200 || $dimension[1] < 200)? "fileTooShort" : $fileName;
				} else {
					echo "none";
				}
			} else {
				echo "InvalideFileType";
			}
		}
		exit;
	}	
	
	public function saveLogo(){	
		$id_user = \Api\User::get_current_user()->get('id_user');				
		$image_path = \Util\post('image_path');
		$new_image_path = 'picture_'.time().'.'.$extension[0] ;
		$x = \Util\post('x');
		$y = \Util\post('y');
		$w = \Util\post('w');
		$h = \Util\post('h');		
		if(file_exists('uploads/logo/temp/'.$image_path) && $image_path!='') : 
			copy($_SERVER['DOCUMENT_ROOT']."/uploads/logo/temp/".$image_path, "uploads/logo/original/".$image_path); 
			unlink('uploads/logo/temp/'.$image_path);
		endif ;
		if(file_exists('uploads/logo/original/'.$image_path) && $image_path!='') : 
			$crop = new \Api\Crop($_SERVER['DOCUMENT_ROOT']."/uploads/logo/original/".$image_path, $x, $y, $w, $h);
			$crop->crop($_SERVER['DOCUMENT_ROOT']."/uploads/logo/".$image_path);
			rename($_SERVER['DOCUMENT_ROOT']."/uploads/logo/".$image_path, $_SERVER['DOCUMENT_ROOT']."//uploads/logo/".$new_image_path);
			rename($_SERVER['DOCUMENT_ROOT']."/uploads/logo/original/".$image_path, $_SERVER['DOCUMENT_ROOT']."/uploads/logo/original/".$new_image_path);
			$result = \Api\User::saveLogo($new_image_path);
		endif ;
		\Util\redirect('/success') ;
	}
	
	/*public function deleteLogo(){	
		$id_user = \Api\User::get_current_user()->get('id_user');
		$r = \Api\Header::get_top($id_user);
		$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
		$data = $r->data;
		$data['id_user'] = $id_user ;
		if (isset($_POST['delete'])) {
			if (isset($data['user_profile']['company_logo'])) {
				$unlink = unlink((__DIR__."/../../www/uploads/logo/".$data['user_profile']['company_logo']));
				if ($unlink) {
					$response['success'] = true; 	
					$response['message'] = \Lang\success_msg_delete_logo;
				} else {
					$response['success'] = false; 	
					$response['message'] = \Lang\error_msg_delete_logo;					
				}
				echo json_encode($response); exit ;			
			}
		}
		return $this->out($data,'profile/deleteLogo',true);
	}*/
	
	public function addCv(){	
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{
			$id = \Util\get('id');		
			$id_user = \Api\User::get_current_user()->get('id_user');	
			$user_lang=null;
			$user_lang = \Util\get_cookie_language();
			if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
			$data['user_lang']	= 	$user_lang ;
			return $this->out($data,'profile/addCv',true);	
		}
	}
	
	public function editCv(){	
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{
			$id = \Util\get('id');		
			$id_user = \Api\User::get_current_user()->get('id_user');			
			$data['cv'] = \Api\Cv::getCv($id, $id_user);
			$user_lang=null;
			$user_lang = \Util\get_cookie_language();
			if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
			$data['user_lang']	= 	$user_lang ;
			return $this->out($data,'profile/editCv',true);	
		}
	}
	
	public function saveCv(){
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{	
			$id = \Util\post('id');	
			$id_user = \Api\User::get_current_user()->get('id_user');		
			$data['cv'] = array(
				'from_date' => date('Y-m-d', strtotime(\Util\post('from_date'))),
				'to_date' => date('Y-m-d', strtotime(\Util\post('to_date'))),
				'company' => \Util\post('company'),
				'work_status' => \Util\post('work_status'),
				'place' => \Util\post('place')
			);
			$result = \Api\Cv::saveCv($id, $id_user, $data['cv']);
			if($result->is_success()) return \Util\redirect('/success') ;	
			return $this->out($data,'profile/editCv',true);	
		}
	}
	
	public function uploadCv(){		
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top($id_user);
			$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
			$data = $r->data;
			$data['id_user'] = $id_user ;
			if (isset($_FILES['document_cv'])) {				
				$file = $_FILES['document_cv'];
				$response['success'] = true; 
				if (in_array($file['type'], array('image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'))) {
					$relativePath = 'uploads/users/';
					$uploaddir = 'uploads/cv/';
					$originalFileName = basename($file['name']);
					$fileName = \Api\GlobalUtil::generateFileName($originalFileName);
					$uploadfile = $uploaddir.$fileName;
					if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
						$result = \Api\Cv::uploadCv($fileName, $id_user);
						$response['message'] = \Lang\message_upload_cv;
					} else {
						$response['success'] = false; 	
						$response['message'] = \Lang\error_upload_cv;
					}
				} else {
					$response['success'] = false; 		
					$response['message'] = \Lang\error_upload_cv1;
				}
				echo json_encode($response); exit ;
			}
			return $this->out($data,'profile/uploadCv',true);
		}
	}

	public function deleteCvFile(){
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top($id_user);
			$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
			$data = $r->data;
			$data['id_user'] = $id_user ;
	
			if (isset($_POST['delete'])) {
				if (isset($data['user_profile']['cv_name'])) {
					$unlink = unlink((__DIR__."/../../www/uploads/cv/".$data['user_profile']['cv_name']));
	
					if ($unlink) {
						$response['success'] = true; 	
						$response['message'] = \Lang\success_delete_cv_file;
					} else {
						$response['success'] = false; 	
						$response['message'] = \Lang\error_delete_cv_file;					
					}
					echo json_encode($response); exit ;			
				}
			}
			return $this->out($data,'profile/deleteCvFile',true);
		}
	}
	
	public function deleteCv(){	
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$id = \Util\get('id') ;
			if(!is_numeric($id)) \Util\redirect('/') ;
			$data = array() ;
			$data = \Api\Cv::delete($id, $id_user);
			\Util\redirect('/user?id='.$id_user."&success=1") ;
		}
	}
	
	public function delete() {
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{	
			$data = array() ;
			if(\Util\post('uid')) : $data = \Api\User::delete_relation(\Util\post('uid')); endif;
			return $this->out($data);
		}
	}
	
	public function setting(){	
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{	
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top($id_user);
			$r->merge(\Api\VisitCard::get_full($id_user, 'user_profile'));
			$data = $r->data;
			if(\Util\post('submit')) :
				$result = \Api\User::verify_password($id_user,\Util\post('current_password'))->data;
				if($result['success']) :
					$result = \Api\User::setting(\Util\post('password'));
					return \Util\redirect('/success') ;	
				else :
					$data['message'] = "<div>".\Lang\error_current_password."</div>" ;
					$data['success'] = false ;
				endif ;
			endif ;
			return $this->out($data,'profile/setting',true);
		}
	}
	
	public function success() {	
		$data['id_user'] = \Api\User::get_current_user()->get('id_user');				
		return $this->out($data,'profile/success',true);
	}
	
	public function mutualFriend() {	
		if(\Api\User::step_two_completed()->has_error()){				
			echo '<SCRIPT LANGUAGE="JavaScript">parent.document.location =  "/signup_step2"; </SCRIPT>' ;
			exit;
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$uid = \Util\get('uid') ;
			$data['mutualFriends'] = \Api\User::mutualFriend($uid, $id_user);			
			return $this->out($data,'profile/mutualFriend',true);
		}
	}
}