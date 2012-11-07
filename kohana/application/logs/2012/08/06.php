<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-06 17:50:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'delete column `4`' at line 1 [ alter table simple delete column `4` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-06 17:50:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'delete column `4`' at line 1 [ alter table simple delete column `4` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/personquest.php(51): Kohana_Database_Query->execute()
#2 [internal function]: Controller_config_personQuest->action_edit()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}