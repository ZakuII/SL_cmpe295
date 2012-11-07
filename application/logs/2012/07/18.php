<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-18 18:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CMPE295 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-18 18:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CMPE295 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-18 19:02:37 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-18 19:02:37 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /mnt/hgfs/CMPE295/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /mnt/hgfs/CMPE295/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#7 /mnt/hgfs/CMPE295/application/classes/controller/test.php(7): Kohana_ORM::factory('user', 1)
#8 [internal function]: Controller_Test->action_index()
#9 /mnt/hgfs/CMPE295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#10 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-18 19:13:54 --- ERROR: Database_Exception [ 1146 ]: Table 'med_data.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-18 19:13:54 --- STRACE: Database_Exception [ 1146 ]: Table 'med_data.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/CMPE295/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#6 /mnt/hgfs/CMPE295/application/classes/controller/test.php(7): Kohana_ORM::factory('user', 1)
#7 [internal function]: Controller_Test->action_index()
#8 /mnt/hgfs/CMPE295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#9 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-18 19:16:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$rendered_view' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/controller/test.php [ 9 ]
2012-07-18 19:16:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$rendered_view' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/controller/test.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 19:17:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/test.php [ 9 ]
2012-07-18 19:17:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/test.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 19:18:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/test.php [ 9 ]
2012-07-18 19:18:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/test.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 19:28:12 --- ERROR: Database_Exception [ 1146 ]: Table 'med_data.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-18 19:28:12 --- STRACE: Database_Exception [ 1146 ]: Table 'med_data.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/CMPE295/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#6 /mnt/hgfs/CMPE295/application/classes/controller/test.php(7): Kohana_ORM::factory('user', 1)
#7 [internal function]: Controller_Test->action_index()
#8 /mnt/hgfs/CMPE295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#9 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-18 19:43:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ll' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 19:43:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ll' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 19:46:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ll' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 19:46:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ll' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 19:46:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: rendered_view ~ APPPATH/classes/controller/test.php [ 14 ]
2012-07-18 19:46:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: rendered_view ~ APPPATH/classes/controller/test.php [ 14 ]
--
#0 /mnt/hgfs/CMPE295/application/classes/controller/test.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/CMPE2...', 14, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /mnt/hgfs/CMPE295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-18 19:46:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/controller/test.php [ 8 ]
2012-07-18 19:46:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CMPE295 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-18 20:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CMPE295 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-18 20:13:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ll' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 20:13:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ll' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:16:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
2012-07-18 20:16:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:17:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
2012-07-18 20:17:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:17:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
2012-07-18 20:17:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:19:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
2012-07-18 20:19:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_ll' not found ~ APPPATH/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CMPE295 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-18 20:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CMPE295 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-18 20:52:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 20:52:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:54:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 20:54:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 20:56:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 20:56:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 21:14:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 21:14:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 21:24:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 21:24:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 21:31:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article2' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 21:31:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article2' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 22:16:53 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-18 22:16:53 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /mnt/hgfs/CMPE295/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /mnt/hgfs/CMPE295/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /mnt/hgfs/CMPE295/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#7 /mnt/hgfs/CMPE295/application/classes/controller/test.php(7): Kohana_ORM::factory('user', 1)
#8 [internal function]: Controller_Test->action_index()
#9 /mnt/hgfs/CMPE295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#10 /mnt/hgfs/CMPE295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /mnt/hgfs/CMPE295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /mnt/hgfs/CMPE295/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-18 22:53:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_name() ~ APPPATH/classes/controller/test.php [ 11 ]
2012-07-18 22:53:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_name() ~ APPPATH/classes/controller/test.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 23:09:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 23:09:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 23:10:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 23:10:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 23:10:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-18 23:10:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}