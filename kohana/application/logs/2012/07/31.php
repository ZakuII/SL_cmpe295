<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-31 18:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/personQuest/action_another was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-31 18:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/personQuest/action_another was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-31 18:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/personQuest/action_another.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-31 18:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/personQuest/action_another.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-31 18:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/personQuest/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-31 18:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/personQuest/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-31 18:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/personQuest/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-31 18:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/personQuest/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-31 18:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-31 18:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-31 18:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_anotherphp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-31 18:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_anotherphp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-31 18:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/configWelcome/action_another was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-31 18:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/configWelcome/action_another was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-31 18:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/action_another was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-31 18:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/action_another was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-31 18:42:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '%' ~ APPPATH/classes/controller/config/personquest.php [ 36 ]
2012-07-31 18:42:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '%' ~ APPPATH/classes/controller/config/personquest.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 18:43:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 37 ]
2012-07-31 18:43:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 18:50:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"personalQuestion"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 34 ]
2012-07-31 18:50:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"personalQuestion"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 18:51:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 35 ]
2012-07-31 18:51:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 18:57:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 36 ]
2012-07-31 18:57:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 19:02:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 39 ]
2012-07-31 19:02:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH/classes/controller/config/personquest.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 19:05:19 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/config/personquest.php [ 41 ]
2012-07-31 19:05:19 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/config/personquest.php [ 41 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/personquest.php(41): Kohana_Core::error_handler(8, 'Array to string...', '/mnt/hgfs/share...', 41, Array)
#1 [internal function]: Controller_config_personQuest->action_getQuestion()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-31 19:12:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: tt ~ APPPATH/classes/controller/config/personquest.php [ 36 ]
2012-07-31 19:12:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: tt ~ APPPATH/classes/controller/config/personquest.php [ 36 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/personquest.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 36, Array)
#1 [internal function]: Controller_config_personQuest->action_getQuestion()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_personQuest))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}