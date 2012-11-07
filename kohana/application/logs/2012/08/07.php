<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-07 03:01:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'delete column `4`' at line 1 [ alter table simple delete column `4` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 03:01:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'delete column `4`' at line 1 [ alter table simple delete column `4` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table sim...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/personquest.php(51): Kohana_Database_Query->execute()
#2 [internal function]: Controller_config_personQuest->action_edit()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-07 03:14:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/config/personquest.php [ 42 ]
2012-08-07 03:14:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/config/personquest.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 03:26:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$POST' (T_VARIABLE), expecting ',' or ')' ~ APPPATH/classes/controller/config/personquest.php [ 59 ]
2012-08-07 03:26:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$POST' (T_VARIABLE), expecting ',' or ')' ~ APPPATH/classes/controller/config/personquest.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 03:27:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/config/personquest.php [ 59 ]
2012-08-07 03:27:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/config/personquest.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 03:29:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$OST' (T_VARIABLE) ~ APPPATH/classes/controller/config/personquest.php [ 61 ]
2012-08-07 03:29:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$OST' (T_VARIABLE) ~ APPPATH/classes/controller/config/personquest.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 03:36:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'text' at line 1 [ alter table PersonAnswer drop column `12` text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 03:36:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'text' at line 1 [ alter table PersonAnswer drop column `12` text ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(NULL, 'alter table Per...', false, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/personquest.php(83): Kohana_Database_Query->execute()
#2 [internal function]: Controller_config_personQuest->action_edit()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_personQuest))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-07 16:47:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:47:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:47:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:47:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:47:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:47:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:48:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:48:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:48:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:48:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:51:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:51:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:52:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
2012-08-07 16:52:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 203 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(203): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 203, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 16:59:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 202 ]
2012-08-07 16:59:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 202 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(202): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 202, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 17:02:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 202 ]
2012-08-07 17:02:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 202 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(202): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 202, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 17:02:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 202 ]
2012-08-07 17:02:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 202 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(202): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 202, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 17:13:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_MedicalQuest' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 17:13:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_MedicalQuest' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 17:14:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_MedicalQuest' not found ~ APPPATH/classes/controller/config/medicalquest.php [ 21 ]
2012-08-07 17:14:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_MedicalQuest' not found ~ APPPATH/classes/controller/config/medicalquest.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 17:14:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_MedicalQuest' not found ~ APPPATH/classes/controller/config/medicalquest.php [ 21 ]
2012-08-07 17:14:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_MedicalQuest' not found ~ APPPATH/classes/controller/config/medicalquest.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:44:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:44:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:45:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:45:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:45:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
2012-08-07 20:45:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:45:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
2012-08-07 20:45:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:47:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:47:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:48:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:48:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:50:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
2012-08-07 20:50:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:52:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:52:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:52:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:52:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:53:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
2012-08-07 20:53:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ APPPATH/classes/controller/config/socialquest.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:54:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:54:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:55:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:55:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:56:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:56:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 20:58:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 20:58:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 21:01:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 21:01:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 21:02:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 21:02:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 21:03:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-07 21:03:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}