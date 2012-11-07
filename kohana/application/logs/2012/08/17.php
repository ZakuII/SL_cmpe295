<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-17 16:59:32 --- ERROR: Kohana_Exception [ 0 ]: The environmentalQ_id property does not exist in the Model_Permission class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-17 16:59:32 --- STRACE: Kohana_Exception [ 0 ]: The environmentalQ_id property does not exist in the Model_Permission class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('environmentalQ_...', '1')
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/permission.php(20): Kohana_ORM->__set('environmentalQ_...', '1')
#2 [internal function]: Controller_config_permission->action_save()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_permission))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-17 17:00:01 --- ERROR: Kohana_Exception [ 0 ]: The familyQ_id property does not exist in the Model_Permission class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-17 17:00:01 --- STRACE: Kohana_Exception [ 0 ]: The familyQ_id property does not exist in the Model_Permission class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('familyQ_id', '1')
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/permission.php(22): Kohana_ORM->__set('familyQ_id', '1')
#2 [internal function]: Controller_config_permission->action_save()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_permission))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-17 17:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/permission/getPermissions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-17 17:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/permission/getPermissions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-17 17:13:01 --- ERROR: Database_Exception [ 1146 ]: Table 'med_data.permission' doesn't exist [ SHOW FULL COLUMNS FROM `permission` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-17 17:13:01 --- STRACE: Database_Exception [ 1146 ]: Table 'med_data.permission' doesn't exist [ SHOW FULL COLUMNS FROM `permission` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/permission.php(34): Kohana_Database_MySQL->list_columns('permission')
#2 [internal function]: Controller_config_permission->action_getPermission()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_permission))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-17 21:05:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
2012-08-17 21:05:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-17 21:06:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
2012-08-17 21:06:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-17 21:06:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
2012-08-17 21:06:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-17 21:07:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
2012-08-17 21:07:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/config/permission.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}