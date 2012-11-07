<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-06 15:11:06 --- ERROR: Database_Exception [ 1091 ]: Can't DROP '5'; check that column/key exists [ alter table SocialAnswer drop column `5` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-06 15:11:06 --- STRACE: Database_Exception [ 1091 ]: Can't DROP '5'; check that column/key exists [ alter table SocialAnswer drop column `5` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table Soc...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/socialquest.php(80): Kohana_Database_Query->execute()
#2 [internal function]: Controller_config_socialQuest->action_edit()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_socialQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}