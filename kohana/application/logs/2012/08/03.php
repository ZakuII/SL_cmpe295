<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-03 16:03:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/question/personquest.php [ 155 ]
2012-08-03 16:03:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/question/personquest.php [ 155 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(155): Kohana_Core::error_handler(8, 'Array to string...', '/mnt/hgfs/share...', 155, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-03 16:04:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 155 ]
2012-08-03 16:04:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 155 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(155): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 155, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-03 16:07:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '%', expecting ';' ~ APPPATH/classes/controller/question/personquest.php [ 151 ]
2012-08-03 16:07:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '%', expecting ';' ~ APPPATH/classes/controller/question/personquest.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:08:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '%', expecting ';' ~ APPPATH/classes/controller/question/personquest.php [ 151 ]
2012-08-03 16:08:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '%', expecting ';' ~ APPPATH/classes/controller/question/personquest.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:16:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/question/personquest.php [ 145 ]
2012-08-03 16:16:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/question/personquest.php [ 145 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(145): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/share...', 145, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-03 16:17:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: pq ~ APPPATH/classes/controller/question/personquest.php [ 141 ]
2012-08-03 16:17:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: pq ~ APPPATH/classes/controller/question/personquest.php [ 141 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 141, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-03 16:19:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'question' (T_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 137 ]
2012-08-03 16:19:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'question' (T_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/question/personquest.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:23:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 153 ]
2012-08-03 16:23:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:24:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 153 ]
2012-08-03 16:24:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/question/personquest.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}