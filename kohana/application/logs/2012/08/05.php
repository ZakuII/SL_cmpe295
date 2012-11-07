<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-05 00:28:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '":"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
2012-08-05 00:28:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '":"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 00:29:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '":"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
2012-08-05 00:29:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '":"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 00:31:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '":"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
2012-08-05 00:31:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '":"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 00:32:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$1 ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
2012-08-05 00:32:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$1 ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(99): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/share...', 99, Array)
#1 [internal function]: Controller_question_personQuest->action_postShow()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 00:33:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
2012-08-05 00:33:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/question/personquest.php [ 99 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(99): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/share...', 99, Array)
#1 [internal function]: Controller_question_personQuest->action_postShow()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 00:36:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/question/personquest.php [ 95 ]
2012-08-05 00:36:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/question/personquest.php [ 95 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(95): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/share...', 95, Array)
#1 [internal function]: Controller_question_personQuest->action_postShow()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 00:40:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find() ~ APPPATH/classes/controller/question/personquest.php [ 95 ]
2012-08-05 00:40:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find() ~ APPPATH/classes/controller/question/personquest.php [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 00:43:23 --- ERROR: Kohana_Exception [ 0 ]: The question property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-05 00:43:23 --- STRACE: Kohana_Exception [ 0 ]: The question property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(102): Kohana_ORM->__get('question')
#1 [internal function]: Controller_question_personQuest->action_postShow()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 00:45:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_personalQuestion' not found ~ APPPATH/classes/controller/question/personquest.php [ 101 ]
2012-08-05 00:45:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_personalQuestion' not found ~ APPPATH/classes/controller/question/personquest.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:46:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
2012-08-05 16:46:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:46:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
2012-08-05 16:46:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:46:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
2012-08-05 16:46:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:47:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
2012-08-05 16:47:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:47:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
2012-08-05 16:47:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL personQ/testing was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-05 16:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL personQ/testing was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-05 16:55:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table PersonAnswer add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 16:55:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table PersonAnswer add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table Per...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(105): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 16:57:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 113 ]
2012-08-05 16:57:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-05 16:58:35 --- ERROR: Database_Exception [ 1060 ]: Duplicate column name 'flavor' [ alter table simple add column flavor text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 16:58:35 --- STRACE: Database_Exception [ 1060 ]: Duplicate column name 'flavor' [ alter table simple add column flavor text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(110): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:05:29 --- ERROR: Database_Exception [ 1060 ]: Duplicate column name 'flavor' [ alter table simple add column flavor int ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:05:29 --- STRACE: Database_Exception [ 1060 ]: Duplicate column name 'flavor' [ alter table simple add column flavor int ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(110): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:05:43 --- ERROR: Database_Exception [ 1060 ]: Duplicate column name 'flavor' [ alter table simple add column flavor varchar(3) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:05:43 --- STRACE: Database_Exception [ 1060 ]: Duplicate column name 'flavor' [ alter table simple add column flavor varchar(3) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(110): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:06:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table simple add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:06:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table simple add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(105): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:06:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table simple add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:06:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table simple add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(105): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:07:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table simple add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:07:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12 text' at line 1 [ alter table simple add column 12 text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(106): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:08:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '"12" text' at line 1 [ alter table simple add column "12" text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:08:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '"12" text' at line 1 [ alter table simple add column "12" text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(106): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:09:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-05 17:09:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 0, false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(106): Kohana_Database_Query->execute()
#2 [internal function]: Controller_question_personQuest->action_testing()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 17:22:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/personQuest/getAnswer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-05 17:22:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/personQuest/getAnswer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-05 17:25:05 --- ERROR: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 25 ]
2012-08-05 17:25:05 --- STRACE: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 25 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 25, Array)
#1 [internal function]: Controller_question_personQuest->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 17:26:13 --- ERROR: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 25 ]
2012-08-05 17:26:13 --- STRACE: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 25 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 25, Array)
#1 [internal function]: Controller_question_personQuest->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 20:56:00 --- ERROR: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 25 ]
2012-08-05 20:56:00 --- STRACE: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 25 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 25, Array)
#1 [internal function]: Controller_question_personQuest->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 20:59:35 --- ERROR: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 26 ]
2012-08-05 20:59:35 --- STRACE: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest.php [ 26 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 26, Array)
#1 [internal function]: Controller_question_personQuest->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-05 21:04:07 --- ERROR: Kohana_Exception [ 0 ]: The  property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-05 21:04:07 --- STRACE: Kohana_Exception [ 0 ]: The  property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('', '')
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(83): Kohana_ORM->__set('', '')
#2 [internal function]: Controller_question_personQuest->action_post()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 21:09:15 --- ERROR: Kohana_Exception [ 0 ]: The  property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-05 21:09:15 --- STRACE: Kohana_Exception [ 0 ]: The  property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('', '')
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(83): Kohana_ORM->__set('', '')
#2 [internal function]: Controller_question_personQuest->action_post()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 21:13:50 --- ERROR: Kohana_Exception [ 0 ]: The  property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-05 21:13:50 --- STRACE: Kohana_Exception [ 0 ]: The  property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('', '')
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(83): Kohana_ORM->__set('', '')
#2 [internal function]: Controller_question_personQuest->action_post()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-05 21:21:39 --- ERROR: Kohana_Exception [ 0 ]: The 1aa2aa3aa4aa5aa6aa10 property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-05 21:21:39 --- STRACE: Kohana_Exception [ 0 ]: The 1aa2aa3aa4aa5aa6aa10 property does not exist in the Model_personAnswer class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('1aa2aa3aa4aa5aa...', '')
#1 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(83): Kohana_ORM->__set('1aa2aa3aa4aa5aa...', '')
#2 [internal function]: Controller_question_personQuest->action_post()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}