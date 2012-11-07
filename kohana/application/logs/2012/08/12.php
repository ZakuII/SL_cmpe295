<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-12 14:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-12 14:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-12 15:23:22 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php on line 8 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1685 ]
2012-08-12 15:23:22 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php on line 8 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1685 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1685): Kohana_Core::error_handler(2, 'Missing argumen...', '/mnt/hgfs/share...', 1685, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php(8): Kohana_ORM->where('question', 'Toggle')
#2 [internal function]: Controller_form_Welcome->action_index()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Welcome))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-12 15:24:13 --- ERROR: Database_Exception [ 1146 ]: Table 'med_data.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-12 15:24:13 --- STRACE: Database_Exception [ 1146 ]: Table 'med_data.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#2 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php(9): Kohana_ORM::factory('article')
#7 [internal function]: Controller_form_Welcome->action_index()
#8 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Welcome))
#9 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-12 15:24:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/controller/form/welcome.php [ 9 ]
2012-08-12 15:24:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/controller/form/welcome.php [ 9 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 9, Array)
#1 [internal function]: Controller_form_Welcome->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Welcome))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-12 15:25:11 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php on line 9 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1685 ]
2012-08-12 15:25:11 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php on line 9 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1685 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1685): Kohana_Core::error_handler(2, 'Missing argumen...', '/mnt/hgfs/share...', 1685, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php(9): Kohana_ORM->where('title', 'Toggle')
#2 [internal function]: Controller_form_Welcome->action_index()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Welcome))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-12 15:36:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ SELECT `medicalquestion`.* FROM `MedicalQuestion` AS `medicalquestion` WHERE `title` = 'Toggle' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-12 15:36:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ SELECT `medicalquestion`.* FROM `MedicalQuestion` AS `medicalquestion` WHERE `title` = 'Toggle' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `medical...', false, Array)
#1 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /mnt/hgfs/share/kohana/application/classes/controller/form/welcome.php(9): Kohana_ORM->find()
#4 [internal function]: Controller_form_Welcome->action_index()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Welcome))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-12 16:28:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/form/user.php [ 23 ]
2012-08-12 16:28:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/form/user.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-12 16:30:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 22 ]
2012-08-12 16:30:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-12 16:30:31 --- ERROR: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 22 ]
2012-08-12 16:30:31 --- STRACE: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-12 16:31:37 --- ERROR: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 26 ]
2012-08-12 16:31:37 --- STRACE: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-12 16:32:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/controller/form/user.php [ 28 ]
2012-08-12 16:32:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/controller/form/user.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-12 16:33:12 --- ERROR: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 22 ]
2012-08-12 16:33:12 --- STRACE: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH/classes/controller/form/user.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-12 19:23:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant pqID - assumed 'pqID' ~ APPPATH/classes/controller/form/user.php [ 28 ]
2012-08-12 19:23:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant pqID - assumed 'pqID' ~ APPPATH/classes/controller/form/user.php [ 28 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/user.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', '/mnt/hgfs/share...', 28, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/form/user.php(22): Controller_form_user->test()
#2 [internal function]: Controller_form_user->action_store()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_user))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-12 19:44:13 --- ERROR: Kohana_Exception [ 0 ]: The familyQ_id property does not exist in the Model_Patient class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-12 19:44:13 --- STRACE: Kohana_Exception [ 0 ]: The familyQ_id property does not exist in the Model_Patient class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('familyQ_id', 4)
#1 /mnt/hgfs/share/kohana/application/classes/controller/form/user.php(319): Kohana_ORM->__set('familyQ_id', 4)
#2 [internal function]: Controller_form_user->action_store()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_user))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-12 20:55:02 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/controller/form/user.php [ 390 ]
2012-08-12 20:55:02 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/controller/form/user.php [ 390 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/user.php(390): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 390, Array)
#1 [internal function]: Controller_form_user->action_getPatient()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_user))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}