<?php
namespace SqlLib;

//users
const get_members_list = 'SELECT U.id_user, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.job, U.company_name, U.company_activity, U.company_logo, U.company_country, U.company_city FROM users U order by rand() limit 0, 10';
const email_exists = 'SELECT exists (select 1 from users where login_email=:login_email limit 1) as exist';
const user_login = 'SELECT id_user,user_type FROM users where BINARY login_email = :login_email and login_password = :login_password';

const register_user = 'INSERT INTO users (firstname,lastname,gendre, birthdate,job,company_name,company_activity,company_city ,company_country,login_email,login_password) VALUES(:firstname, :lastname, :gendre, :birthdate, :job, :company_name, :company_activity, :company_city, :company_country, :login_email, :login_password);';
const register_extended	= 'UPDATE users SET sociaux = :sociaux, emails = :emails, mobiles = :mobiles, direct_phones = :direct_phones, company_address = :company_address, company_tel = :company_tel, company_fax = :company_fax, company_websites = :company_websites, user_type=1';
const save_image	= 'UPDATE users SET user_picture = :image_path ';
const save_logo	= 'UPDATE users SET company_logo = :image_path ';



const user_info_min = 'SELECT id_user,user_type,user_picture, login_email, gendre,firstname,lastname,job,NULL as emails,NULL as mobiles,NULL as direct_phones , NULL as sociaux,company_logo,company_name,company_activity,company_city,company_country,NULL as company_address ,NULL as company_tel,NULL as company_fax,NULL as company_websites,NULL as cv_name from users WHERE id_user = :id_user' ;

const user_activities = 'SELECT activity FROM user_activity WHERE id_user = :id_user';

const user_info_full = 'SELECT 
	(Select count(*) as total from invitations I where I.id_user_to = :uid AND I.id_user_from = U.id_user AND I.invitation_status IN (0,1)) AS is_invited,
	(Select count(*) as total from invitations I where I.id_user_to = U.id_user AND I.id_user_from = :uid AND I.invitation_status IN (0,1)) AS has_invited,
    U.id_user, U.user_type, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.job, U.emails, U.mobiles, U.direct_phones, U.sociaux, U.company_logo, U.company_name, U.company_activity, U.company_city, U.company_country, U.company_address , U.company_tel, U.company_fax, U.company_websites, U.cv_name from users U WHERE id_user = :id_user' ;

const is_friend = 'SELECT EXISTS(SELECT 1 FROM relations where id_user1=:id_user and id_user2=:id_user2 limit 1) as exist';
const is_invited = 'SELECT exists(SELECT 1 FROM invitations WHERE id_user_to=:id_user and id_user_from=:id_user2 limit 1) as exist';
const send_invite = 'INSERT INTO invitations (id_user_to,id_user_from) SELECT i1,i2 from (SELECT :id_user2 as i1,:id_user as i2) as temp WHERE NOT EXISTS(SELECT id_invitations from invitations where id_user_to=:id_user2 and id_user_from=:id_user)';


//messages
const get_messages_list = 'SELECT id_user,is_sender,firstname,lastname,user_picture,msg_time,message_status,message from ((select distinct(id_user),0 as is_sender,firstname,lastname,user_picture,msg_time,message_status,message from users U,messages M where ((U.id_user=M.id_user_from AND M.id_user_to=:id_user)) order by msg_time desc) UNION (select distinct(id_user),1 as is_sender,firstname,lastname,user_picture,msg_time,1 as message_status,message from users U,messages M where (U.id_user=M.id_user_to AND M.id_user_from=:id_user))order by msg_time desc) T group by id_user order by msg_time desc';










const last_uid = 'select id_user_from,id_user_to from messages where ((id_user_from=:id_user) OR (id_user_to=:id_user)) order by msg_time DESC limit 0,1';
const some_user_info = 'SELECT firstname,lastname,user_picture from users where id_user=:id_user';

/*
const get_common_contacts_count = '(SELECT count(id_user2) as count_common_friends from relations R WHERE id_user1=:id_user1 AND id_user2 in (SELECT id_user2 from relations WHERE id_user1=:id_user2 AND id_user2!=:id_user1 ) )';



const register_extended_ignore	= 'UPDATE users SET user_type=1 WHERE id_user = :id_user';
const update_language	= 'UPDATE users SET language=:language WHERE id_user = :id_user';
const update_profile_picture = 'UPDATE users SET user_picture=:user_picture where id_user = :id_user';
const update_logo_picture = 'UPDATE users SET company_logo=:company_logo where id_user = :id_user';


const add_friend = 'INSERT INTO relations (id_user1,id_user2) VALUES(:id_user,:id_user2),(:id_user2,:id_user);';

//const is_invited = 'SELECT id_invitations FROM invitations WHERE id_user_to=:id_user_from and id_user_from=:id_user_to';


const get_vc = 'SELECT user_picture,firstname,lastname,
						if(exists(select 1 from relations where id_user1=:id_user and id_user2=:id_user2),job,NULL) job,
						if(exists(select 1 from relations where id_user1=:id_user and id_user2=:id_user2),emails,NULL) emails,
						if(exists(select 1 from relations where id_user1=:id_user and id_user2=:id_user2),mobiles,NULL) mobiles,
						if(exists(select 1 from relations where id_user1=:id_user and id_user2=:id_user2),direct_phones,NULL) direct_phones
					    ,company_logo,company_name,company_activity,company_city,company_country,company_address
					    ,company_tel,company_fax,company_websites from users WHERE id_user = :id_user2' ;

const user_feed= 'SELECT id_activity,id_user,activity,id_user2,activity_time FROM activity WHERE id_user=:id_user ORDER BY id_activity DESC';
//const user_contacts_feed= 'SELECT A.*,U.firstname,U.lastname,U.job FROM `activity` A, `users` U,`relations` R where ((A.id_user = U.id_user and A.id_user2!=:id_user) or (A.id_user2 = U.id_user and A.id_user!=:id_user)) and ((R.id_user2=U.id_user and R.id_user1=:id_user)) ORDER BY id_activity DESC';
const user_contacts_feed= 'SELECT A.*,U.firstname,U.lastname,U.job,U.user_picture,U.user_type from users U,activity A where A.id_user in (select id_user2 as id_user from relations where id_user1=:id_user) and A.id_user=U.id_user ORDER BY id_activity DESC';
//const get_suggestions= '(SELECT U.id_user,U.firstname,U.lastname,U.job,U.user_picture,U.company_name,U.company_country,U.company_activity,U.company_city,U.company_logo,count(R.id_user2) as common_contacts_count from users U,relations R where R.id_user1=U.id_user and U.id_user!=:id_user and U.id_user not in (select id_user2 from relations where id_user1=:id_user) AND U.id_user IN (SELECT id_user2 FROM relations where id_user1 in (select id_user2 from relations where id_user1=:id_user) ) order by common_contacts_count desc) union (select U.id_user,U.firstname,U.lastname,U.job,U.user_picture,U.company_name,U.company_country,U.company_activity,U.company_city,U.company_logo,0 from users U where U.id_user not in (select id_user2 from relations where id_user1=:id_user) and id_user!=:id_user)  LIMIT 8;';
const get_suggestions= '(SELECT U.id_user,U.user_type,U.firstname,U.lastname,U.job,U.user_picture,U.company_name,U.company_country,U.company_activity,U.company_city,U.company_logo,(SELECT count(id_user2) from relations R WHERE id_user1=U.id_user AND id_user2 in (SELECT id_user2 from relations WHERE id_user1=:id_user ) ) AS common_contacts_count from users U,relations R where R.id_user1=U.id_user and U.id_user!=:id_user and U.id_user not in (select id_user_to from invitations where id_user_from=:id_user) and U.id_user not in (select id_user_from from invitations where id_user_to=:id_user) AND U.id_user IN (SELECT id_user2 FROM relations where id_user1 in (select id_user2 from relations where id_user1=:id_user) ) order by common_contacts_count desc) union (select U.id_user,U.user_type,U.firstname,U.lastname,U.job,U.user_picture,U.company_name,U.company_country,U.company_activity,U.company_city,U.company_logo,0 as common_contacts_count from users U where U.id_user not in (SELECT U.id_user from users U,relations R where R.id_user1=U.id_user and U.id_user!=:id_user and U.id_user not in (select id_user_to from invitations where id_user_from=:id_user) and U.id_user not in (select id_user_from from invitations where id_user_to=:id_user) AND U.id_user IN (SELECT id_user2 FROM relations where id_user1 in (select id_user2 from relations where id_user1=:id_user) ) )  and U.id_user not in (select id_user2 from relations where id_user1=:id_user) and id_user!=:id_user) LIMIT 8;';
const get_common_contacts = 'SELECT U.id_user as uid,U.firstname as fn,U.lastname as ln,U.job as j,U.user_picture,U.company_name as e,U.company_city as c,count(R.id_user1) as common_contacts_count from users U,relations R where R.id_user1=U.id_user and U.id_user in (SELECT id_user2 from relations where id_user1=:id_user) and U.id_user in (SELECT id_user2 from relations where id_user1=:id_user2) order by common_contacts_count DESC;';
const get_common_contacts_l = 'SELECT distinct(U.id_user) as uid,U.firstname as fn,U.lastname as ln,U.job as j,U.user_picture,U.company_name as e,U.company_city as c from users U,relations R where R.id_user1=U.id_user and U.id_user in (SELECT id_user2 from relations where id_user1=:id_user) and U.id_user in (SELECT id_user2 from relations where id_user1=:id_user2);';

const get_friends_list = 'SELECT id_user2 as id,concat(firstname," ",lastname) as name,user_picture,COALESCE((select user_status from userstatus where id_user_status=U.id_user),0) as user_status from users U inner join relations R on R.id_user2 = U.id_user where R.id_user1=:id_user';
//U.id_user,U.user_picture,U.firstname,U.lastname,U.job,U.company_logo,U.company_name,U.company_activity,U.company_city,U.company_country

const add_suggestion = 'INSERT INTO suggestions (id_user_from,id_user_to,id_user_suggested,comment) SELECT i1,i2,i3,i4 FROM (SELECT :id_user_from as i1,:id_user_to as i2,:id_user_suggested as i3,:comment as i4) as temp WHERE NOT EXISTS(SELECT id_suggestion FROM suggestions WHERE id_user_from=:id_user_from AND id_user_to=:id_user_to AND id_user_suggested=:id_user_suggested);';

const send_message = 'INSERT INTO messages (id_user_from,id_user_to,message) VALUES (:id_user_from,:id_user_to,:message)';


const get_messages = 'select distinct(id_user),firstname,lastname,user_picture,msg_time,message_status,message from users U,messages M where ((U.id_user=M.id_user_to AND M.id_user_from=:id_user) OR (U.id_user=M.id_user_from AND M.id_user_to=:id_user)) order by M.msg_time DESC';
// const get_messages_list = '(select distinct(id_user),0 as is_sender,firstname,lastname,user_picture,msg_time,message_status,message from users U,messages M where ((U.id_user=M.id_user_from AND M.id_user_to=:id_user))) UNION (select distinct(id_user),1 as is_sender,firstname,lastname,user_picture,msg_time,1 as message_status,message from users U,messages M where (U.id_user=M.id_user_to AND M.id_user_from=:id_user))order by msg_time DESC';


//const get_dir = '(SELECT 1 as dir_type,S.id_suggestion  as id,S.suggestion_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,U2.id_user as id_user_from,U2.firstname as u2_firstname,U2.lastname as u2_lastname,suggestion_status as dir_status FROM `suggestions` S,`users` U,`users` U2 WHERE (U.id_user = S.id_user_suggested) AND (U.id_user NOT IN (select id_user2 as id_user from relations WHERE id_user1=:id_user) ) AND (U2.id_user = S.id_user_from)) UNION (SELECT 2 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,invitation_status as dir_status FROM `invitations` I,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user not in (select id_user2 as id_user from relations WHERE id_user1=:id_user))) order by dir_time DESC;';
//const get_dir ='(SELECT 1 as dir_type,S.id_suggestion  as id,S.suggestion_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,U2.id_user as id_user_from,U2.firstname as u2_firstname,U2.lastname as u2_lastname,suggestion_status as dir_status FROM `suggestions` S,`users` U,`users` U2 WHERE (U.id_user = S.id_user_suggested) AND (U.id_user NOT IN (select id_user2 as id_user from relations WHERE id_user1=:id_user) ) AND (U2.id_user = S.id_user_from)) UNION (SELECT 2 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,invitation_status as dir_status FROM `invitations` I,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user not in (select id_user2 as id_user from relations WHERE id_user1=:id_user))) UNION (SELECT 3 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,invitation_status as dir_status FROM `invitations` I,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user in (select id_user2 as id_user from relations WHERE id_user1=:id_user))) order by dir_time DESC;';
const get_dir ='(SELECT 1 as dir_type,S.id_suggestion  as id,S.suggestion_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,U2.id_user as id_user_from,U2.firstname as u2_firstname,U2.lastname as u2_lastname,suggestion_status as dir_status,NULL as whosfirst FROM `suggestions` S,`users` U,`users` U2 WHERE (U.id_user = S.id_user_suggested) AND (U.id_user NOT IN (select id_user2 as id_user from relations WHERE id_user1=:id_user) ) AND (U2.id_user = S.id_user_from) AND S.id_user_to=:id_user) UNION (SELECT 2 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,invitation_status as dir_status,NULL as whosfirst FROM `invitations` I,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user not in (select id_user2 as id_user from relations WHERE id_user1=:id_user))) UNION (SELECT 3 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,I.invitation_status as dir_status,I2.invitation_time as whosfirst FROM `invitations` I,`invitations` I2,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user in (select id_user2 as id_user from relations WHERE id_user1=:id_user) AND I2.id_user_from=:id_user AND I2.id_user_to=U.id_user)) order by dir_time DESC;';
const get_dir2 ='(SELECT 1 as dir_type,S.id_suggestion  as id,S.suggestion_time as dir_time,U.id_user,U.user_type,U.firstname,U.lastname,U.user_picture,U2.id_user as id_user_from,U2.firstname as u2_firstname,U2.lastname as u2_lastname,suggestion_status as dir_status,NULL as whosfirst FROM `suggestions` S,`users` U,`users` U2 WHERE (U.id_user = S.id_user_suggested) AND (U.id_user NOT IN (select id_user2 as id_user from relations WHERE id_user1=:id_user) ) AND (U2.id_user = S.id_user_from) AND S.id_user_to=:id_user) UNION (SELECT 2 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.user_type,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,invitation_status as dir_status,NULL as whosfirst FROM `invitations` I,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user not in (select id_user2 as id_user from relations WHERE id_user1=:id_user))) UNION (SELECT 3 as dir_type,I.id_invitations as id,I.invitation_time as dir_time,U.id_user,U.user_type,U.firstname,U.lastname,U.user_picture,NULL as id_user_from,NULL as u2_firstname,NULL as u2_lastname,I.invitation_status as dir_status,I2.invitation_time as whosfirst FROM `invitations` I,`invitations` I2,`users` U WHERE (U.id_user = I.id_user_from and I.id_user_to=:id_user and U.id_user in (select id_user2 as id_user from relations WHERE id_user1=:id_user) AND I2.id_user_from=:id_user AND I2.id_user_to=U.id_user)) order by firstname ASC;';

const get_last_msgid = 'SELECT id_message from messages WHERE id_user_from=:id_user_contact AND id_user_to=:id_user order by msg_time DESC limit 0,1';*/