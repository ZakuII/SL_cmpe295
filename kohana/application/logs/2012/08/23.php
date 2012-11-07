<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-23 17:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 17:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-23 17:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-23 18:04:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: visit ~ APPPATH/classes/controller/form/prescription.php [ 38 ]
2012-08-23 18:04:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: visit ~ APPPATH/classes/controller/form/prescription.php [ 38 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/prescription.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 38, Array)
#1 [internal function]: Controller_form_Prescription->action_process()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Prescription))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-23 18:30:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'gmdate' (T_STRING) ~ APPPATH/classes/controller/form/prescription.php [ 41 ]
2012-08-23 18:30:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'gmdate' (T_STRING) ~ APPPATH/classes/controller/form/prescription.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 18:30:55 --- ERROR: ErrorException [ 8 ]: Use of undefined constant logTime - assumed 'logTime' ~ APPPATH/classes/controller/form/prescription.php [ 49 ]
2012-08-23 18:30:55 --- STRACE: ErrorException [ 8 ]: Use of undefined constant logTime - assumed 'logTime' ~ APPPATH/classes/controller/form/prescription.php [ 49 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/prescription.php(49): Kohana_Core::error_handler(8, 'Use of undefine...', '/mnt/hgfs/share...', 49, Array)
#1 [internal function]: Controller_form_Prescription->action_process()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_Prescription))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-23 20:25:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'ls' (T_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/form/prescription.php [ 12 ]
2012-08-23 20:25:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'ls' (T_STRING), expecting ',' or ';' ~ APPPATH/classes/controller/form/prescription.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 20:32:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/form/prescription.php [ 86 ]
2012-08-23 20:32:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/form/prescription.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana/profile/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-23 23:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana/profile/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-23 23:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana/profile/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-23 23:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana/profile/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#3 {main}