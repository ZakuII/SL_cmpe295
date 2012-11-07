<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-04 00:39:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 158 ]
2012-08-04 00:39:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 158 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(158): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 158, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-04 00:42:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 158 ]
2012-08-04 00:42:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 158 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(158): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 158, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-04 17:43:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 158 ]
2012-08-04 17:43:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/question/personquest.php [ 158 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/question/personquest.php(158): Kohana_Core::error_handler(8, 'Undefined offse...', '/mnt/hgfs/share...', 158, Array)
#1 [internal function]: Controller_question_personQuest->action_getAnswer()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_question_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}