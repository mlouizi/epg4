<?php
namespace Api;
use \Database\DB as DB;
class Agenda extends EPluggApi {
	public static function get_notifications($id_user=null){
		if(is_null($id_user)) $id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array( 'id_user' => $id_user );
		$sql=<<<EOL
SELECT id_creator,is_creator,agenda_status,id_agenda,title,description,event_start_time,firstname,lastname,agenda_time
FROM (
(SELECT id_creator,1 is_creator,1 as agenda_status,id_agenda,title,description,event_start_time,
NULL as firstname,NULL as lastname,agenda_time
from agenda
where id_creator=:id_user)
UNION
(SELECT id_creator,0 is_creator,agenda_status,A.id_agenda,title,description,event_start_time,
firstname,lastname,agenda_time
from agenda A,agenda_users AU,users U
where A.id_creator <> :id_user AND A.id_creator=U.id_user AND AU.id_user=:id_user AND AU.id_agenda=A.id_agenda)
) as T
ORDER BY agenda_time DESC;
EOL;
		$events = DB::query($sql,$sql_args);
		return $events;
	}
}