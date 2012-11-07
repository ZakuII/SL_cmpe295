<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-26 16:08:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/profile/message.php [ 164 ]
2012-08-26 16:08:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/profile/message.php [ 164 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 16:14:04 --- ERROR: ErrorException [ 8 ]: Undefined index: DocProId ~ APPPATH/classes/controller/profile/message.php [ 11 ]
2012-08-26 16:14:04 --- STRACE: ErrorException [ 8 ]: Undefined index: DocProId ~ APPPATH/classes/controller/profile/message.php [ 11 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 11, Array)
#1 [internal function]: Controller_profile_message->action_getMsgUpdateDoc()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_message))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 16:14:33 --- ERROR: ErrorException [ 8 ]: Undefined index: ppatId ~ APPPATH/classes/controller/profile/message.php [ 12 ]
2012-08-26 16:14:33 --- STRACE: ErrorException [ 8 ]: Undefined index: ppatId ~ APPPATH/classes/controller/profile/message.php [ 12 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 12, Array)
#1 [internal function]: Controller_profile_message->action_getMsgUpdateDoc()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_message))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 16:15:28 --- ERROR: ErrorException [ 8 ]: Undefined index: DocProId ~ APPPATH/classes/controller/profile/message.php [ 11 ]
2012-08-26 16:15:28 --- STRACE: ErrorException [ 8 ]: Undefined index: DocProId ~ APPPATH/classes/controller/profile/message.php [ 11 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 11, Array)
#1 [internal function]: Controller_profile_message->action_getMsgUpdateDoc()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_message))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 16:20:58 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/controller/profile/message.php [ 169 ]
2012-08-26 16:20:58 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/controller/profile/message.php [ 169 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/mnt/hgfs/share...', 169, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(169): array_key_exists('13', NULL)
#2 /mnt/hgfs/share/kohana/application/classes/controller/profile/message.php(13): Controller_profile_message->getDoctorAssoc('14', '13')
#3 [internal function]: Controller_profile_message->action_getMsgUpdateDoc()
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_message))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#8 {main}