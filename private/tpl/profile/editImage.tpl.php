<?php $profile = $data['user_profile'] ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $data['sys_title'] ?></title>
    	<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/js/image/ajaxupload.js"></script>
		<script src="/js/jcrop/jquery.Jcrop.js"></script>
        <link rel="stylesheet" href="/css/jcrop/main.css" type="text/css" />
        <link rel="stylesheet" href="/css/jcrop/demos.css" type="text/css" />
        <link rel="stylesheet" href="/css/jcrop/jquery.Jcrop.css" type="text/css" />
		<script type="text/javascript">
		$(document).ready(function(){
			initCropbox() ;
			new AjaxUpload( "#content_image", {
				action: "/upload_image",
				name: 'image',
				data: { },
				autoSubmit: true,
				responseType: false,
				onChange: function(file, extension){
				},
				onSubmit: function(file, extension) {
					$("#response").css("display", "");
					$("#response").html("<img src='images/preload.gif' />");
				},
				onComplete: function(file, response){					
					$("#response").html('');
					switch (response) {
						case "fileTooShort":
							$('#dialog div').html("<?= \Lang\upload_error ?>");
							$('#dialog').css('display','block');
							break;
						case "InvalideFileType":
							$('#dialog div').html("<?= \Lang\upload_error1 ?>");
							$('#dialog').css('display','block');
							break;
						default:
							$("#image_path").val(response);
							path = "/uploads/users/temp/" + response;
							$("#response").html("<img src='" + path + "'  border='0' alt='' id='cropbox' />");
							$('#preview').attr("src", path);
							initCropbox();
							$('#divSubmit, #divSubmit1').show() ;
					}
				}
			});	
			
			$('#save_image, #save_image1').click(function(){
				parent.document.getElementById('pp_close').style.display = 'none' ;
				$.ajax({
					type: "POST",
					url: "/save_image",
					data: "gendre=<?= $profile['gendre'] ?>&image_path=" + $('#image_path').val() + "&x=" + $('#x').val() + "&y=" + $('#y').val() + "&w=" + $('#w').val() + "&h=" + $('#h').val()  ,
					success: function(data){						
						selector = parent.document.getElementById('profile_image');						
						setTimeout(function(){ selector.setAttribute('src', '/uploads/users/' + $('#image_path').val()) ;parent.document.location = "/edit_profile"; } ,500) ;						
					}
				});			
			}) ;
		});
		function initCropbox(){
			$('#cropbox').Jcrop({
				bgColor: 'black',
				bgOpacity: .4,
				onChange: updateCoords,
				onSelect: showPreview,	
				setSelect: [0, 0, 200, 200],
				minSize: [200, 200],
				aspectRatio: 1,	
				allowSelect: false			
			});
		}	
		function showPreview(coords){
			var rx = 200 / coords.w;
			var ry = 200 / coords.h;
			image_width = $("#cropbox").width();
			image_height = $('#cropbox').height();
			$('#preview').css({
				width: Math.round(rx * image_width) + 'px',
				height: Math.round(ry * image_height) + 'px',
				marginLeft: '-' + Math.round(rx * coords.x) + 'px',
				marginTop: '-' + Math.round(ry * coords.y) + 'px'
			});
		}
  		function updateCoords(c) {
		    $('#x').val(c.x);
		    $('#y').val(c.y);
		    $('#w').val(c.w);
		    $('#h').val(c.h);
		};

  		function checkCoords() {
		    if (parseInt($('#w').val())) return true;
    		alert('Please select a crop region then press submit.');
			return false;
  		};
		</script>
		<style type="text/css">
		#target { background-color: #ccc; width: 500px; height: 330px; font-size: 24px; display: block; }
		div.upload {width: 64px;height: 28px;background: url(images/upload.png);overflow: hidden;}
		div.upload input {display: block !important;width: 64px !important;height: 28px !important;opacity: 0 !important;overflow: hidden !important;}
		</style>
	</head>
    <body>                  
 		<div class="jc-demo-box">
        	<div class="titre_plugg"><?= \Lang\edit_image ?></div>
        	<div class="clear20"></div>
			<div id="dialog" style="display: none;">
	  			<div class="message error"></div>
			</div>        	
            <div style="padding:10px">
                <form action="save_image" method="post" >
                    <table width="100%">
                        <tr><td colspan="2"><div class="upload"><input type="file" name="image" id="content_image" /></div></td></tr>
                        <tr>
                            <td>
                                <table>    	
                                    <tr>
                                    	<td>
                                            <div id="div_preview" style="float: left ;overflow: hidden; width: 200px; height: 200px; ">
                                                <?php if(file_exists('uploads/users/original/'.$profile['user_picture']) && $profile['user_picture']!='') : ?>
                                                <img id="preview" src="/uploads/users/original/<?php echo $profile['user_picture'] ?>" class="content_image"/>
                                                <?php else : ?>
                                                <img id="preview" src="/uploads/users/<?= (in_array($profile['gendre'], array(2,3)))? 'women/' : 'men/' ?>avatar.png" class="content_image"/>
                                                <?php endif ?>
                                            </div>
                                        </td>
                                 	</tr>
                                    <tr>
                                    	<td>       	
                                            <div align="right" id="divSubmit" <?= (file_exists('uploads/users/original/'.$profile['user_picture']) && $profile['user_picture']!='')? '' : 'style="display:none"' ?> >
                                                <input type="button" value="<?= \Lang\save ?>" id="save_image" class="btn btn-large btn-inverse" />
                                            </div>
                                       	</td>
                                   	</tr>
                                </table>	         
                            </td>
                            <td>
                                <div id="response">
									<?php if(file_exists('uploads/users/original/'.$profile['user_picture']) && $profile['user_picture']!='') : ?><img src="/uploads/users/original/<?php echo $profile['user_picture'] ?>" id='cropbox' /><?php endif ?>
                               	</div>
                            </td>
                        </tr>
                    </table>   
                    <input type="hidden" id="image_path" name="image_path" value="<?php echo $profile['user_picture'] ?>" />
                    <input type="hidden" id="x" name="x" />
                    <input type="hidden" id="y" name="y" />
                    <input type="hidden" id="w" name="w" />
                    <input type="hidden" id="h" name="h" />
                </form>
          	</div>
        </div>        
    </body>
</html