<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-21 00:30:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/profile/doctor.php [ 115 ]
2012-08-21 00:30:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/profile/doctor.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-21 00:32:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: patID ~ APPPATH/classes/controller/profile/doctor.php [ 59 ]
2012-08-21 00:32:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: patID ~ APPPATH/classes/controller/profile/doctor.php [ 59 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/doctor.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 59, Array)
#1 [internal function]: Controller_profile_doctor->action_showPatientDoctor()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_doctor))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-21 00:59:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '%' ~ APPPATH/classes/controller/profile/doctor.php [ 65 ]
2012-08-21 00:59:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '%' ~ APPPATH/classes/controller/profile/doctor.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-21 18:54:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/controller/profile/doctor.php [ 159 ]
2012-08-21 18:54:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/controller/profile/doctor.php [ 159 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-21 18:55:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/controller/profile/doctor.php [ 159 ]
2012-08-21 18:55:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/controller/profile/doctor.php [ 159 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-21 18:56:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/controller/profile/doctor.php [ 160 ]
2012-08-21 18:56:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/controller/profile/doctor.php [ 160 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-21 18:58:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/profile/doctor.php [ 162 ]
2012-08-21 18:58:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/profile/doctor.php [ 162 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-21 20:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/8/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/8/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/8/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/8/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/8/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/8/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 20:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 20:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 22:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 22:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/13/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-21 23:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-21 23:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/visitLog-v2.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}