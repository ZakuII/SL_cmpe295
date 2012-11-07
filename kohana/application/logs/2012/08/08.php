<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-08 15:09:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/controller/question/personquest.php [ 228 ]
2012-08-08 15:09:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/controller/question/personquest.php [ 228 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL question/personQuest/getQuestion2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-08 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL question/personQuest/getQuestion2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-08 16:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL question/personQuest2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-08 16:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL question/personQuest2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-08 16:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL question/personQues2t was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-08 16:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL question/personQues2t was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-08 16:27:55 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/controller/question/personquest2.php [ 95 ]
2012-08-08 16:27:55 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/controller/question/personquest2.php [ 95 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest2.php(95): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 95, Array)
#1 [internal function]: Controller_question_personQuest2->action_getEdit()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest2))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 19:55:27 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/controller/question/personquest2.php [ 24 ]
2012-08-08 19:55:27 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/controller/question/personquest2.php [ 24 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest2.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 24, Array)
#1 [internal function]: Controller_question_personQuest2->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest2))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 19:56:09 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/controller/question/personquest2.php [ 24 ]
2012-08-08 19:56:09 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/controller/question/personquest2.php [ 24 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest2.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 24, Array)
#1 [internal function]: Controller_question_personQuest2->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest2))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 19:56:40 --- ERROR: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest2.php [ 24 ]
2012-08-08 19:56:40 --- STRACE: ErrorException [ 8 ]: Undefined index: pqID ~ APPPATH/classes/controller/question/personquest2.php [ 24 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest2.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 24, Array)
#1 [internal function]: Controller_question_personQuest2->action_post()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest2))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 21:44:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_SocialQuest' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-08 21:44:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_SocialQuest' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}