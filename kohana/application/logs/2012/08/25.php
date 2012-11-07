<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-25 19:16:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/controller/profile/message.php [ 15 ]
2012-08-25 19:16:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/controller/profile/message.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 19:16:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/profile/message.php [ 38 ]
2012-08-25 19:16:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/profile/message.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 19:21:03 --- ERROR: ErrorException [ 2 ]: file_get_contents(userdata/message/13/message.txt): failed to open stream: No such file or directory ~ APPPATH/classes/controller/profile/message.php [ 42 ]
2012-08-25 19:21:03 --- STRACE: ErrorException [ 2 ]: file_get_contents(userdata/message/13/message.txt): failed to open stream: No such file or directory ~ APPPATH/classes/controller/profile/message.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/mnt/hgfs/share...', 42, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(42): file_get_contents('userdata/messag...')
#2 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(17): Controller_profile_message->messageGet(13)
#3 [internal function]: Controller_profile_message->action_message()
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_message))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-25 19:30:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '".txt"' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/message.php [ 51 ]
2012-08-25 19:30:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '".txt"' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/message.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 19:34:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/profile/message.php [ 34 ]
2012-08-25 19:34:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/profile/message.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 19:42:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: mystr ~ APPPATH/classes/controller/profile/message.php [ 36 ]
2012-08-25 19:42:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: mystr ~ APPPATH/classes/controller/profile/message.php [ 36 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 36, Array)
#1 [internal function]: Controller_profile_message->action_message()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_message))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-25 19:47:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/controller/profile/message.php [ 46 ]
2012-08-25 19:47:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/controller/profile/message.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 20:03:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH/classes/controller/profile/message.php [ 61 ]
2012-08-25 20:03:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH/classes/controller/profile/message.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 20:03:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH/classes/controller/profile/message.php [ 61 ]
2012-08-25 20:03:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH/classes/controller/profile/message.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}