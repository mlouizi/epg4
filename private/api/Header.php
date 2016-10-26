<?php
namespace Api;
include API_DIR.'GlobalUtil.php';
include API_DIR.'Message.php';
include API_DIR.'VisitCard.php';
include API_DIR.'Invitation.php';
include API_DIR.'Directory.php';
include API_DIR.'Suggestion.php';

class Header extends EPluggApi {
	public static function get_top($id_user=NULL){		
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$repertoires = \Api\Directory::getRepertoire($id_user);		
		$rep= array() ;
		foreach($repertoires as $repertoire) : $rep[] = $repertoire['id_user2'] ; endforeach ;
		$ret['repertoire'] = $rep ;
		$ret['headerMessages'] = \Api\Message::headerMessages($id_user)->get('messages') ;
		$ret['count_unread'] = \Api\Message::count_unread($ret['headerMessages']);		
		$ret['headerInvitations'] = \Api\Invitation::headerInvitations($id_user)->get('invitations') ;
		$ret['total_invitations'] = \Api\Invitation::count_unread($ret['headerInvitations']);		
		$ret['id_user'] = $id_user; 		
		$ret['user_info'] = \Api\VisitCard::get_mini($id_user)->get('user_info');				
		return \Util\success($ret);
	}
}