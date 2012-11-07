<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-18 15:42:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/config/permission.php [ 116 ]
2012-08-18 15:42:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/config/permission.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-18 15:43:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/config/permission.php [ 116 ]
2012-08-18 15:43:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/config/permission.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-18 16:22:42 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'specialization_id' [ INSERT INTO `Doctor` (`user_id`, `specialization_id`, `specialization`) VALUES ('6', '2', 'General Doctor') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-18 16:22:42 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'specialization_id' [ INSERT INTO `Doctor` (`user_id`, `specialization_id`, `specialization`) VALUES ('6', '2', 'General Doctor') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `Do...', false, Array)
#1 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /mnt/hgfs/share/kohana/application/classes/controller/profile/doctor.php(26): Kohana_ORM->save()
#4 [internal function]: Controller_profile_doctor->action_newDoctor()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_doctor))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}