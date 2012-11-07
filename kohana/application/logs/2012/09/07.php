<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-07 15:54:02 --- ERROR: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 243 ]
2012-09-07 15:54:02 --- STRACE: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/mnt/hgfs/share...', 243, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(243): mkdir('userdata/tempRe...')
#2 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(317): Controller_config_procedure->directoryMake('userdata/tempRe...')
#3 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(17): Controller_config_procedure->createReturnResult()
#4 [internal function]: Controller_config_procedure->action_parse()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-07 15:54:27 --- ERROR: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 244 ]
2012-09-07 15:54:27 --- STRACE: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 244 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/mnt/hgfs/share...', 244, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(244): mkdir('userdata/tempRe...')
#2 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(318): Controller_config_procedure->directoryMake('userdata/tempRe...')
#3 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(17): Controller_config_procedure->createReturnResult()
#4 [internal function]: Controller_config_procedure->action_parse()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-07 15:55:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 318 ]
2012-09-07 15:55:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 318 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 15:55:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 318 ]
2012-09-07 15:55:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 318 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:17:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$resultfiles' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 29 ]
2012-09-07 16:17:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$resultfiles' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:18:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$resultfiles' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 29 ]
2012-09-07 16:18:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$resultfiles' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:18:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$resultfiles' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 30 ]
2012-09-07 16:18:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$resultfiles' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:18:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$re' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 30 ]
2012-09-07 16:18:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$re' (T_VARIABLE) ~ APPPATH/classes/controller/config/procedure.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:18:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_files() ~ APPPATH/classes/controller/config/procedure.php [ 29 ]
2012-09-07 16:18:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_files() ~ APPPATH/classes/controller/config/procedure.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:19:15 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/config/procedure.php [ 352 ]
2012-09-07 16:19:15 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/config/procedure.php [ 352 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(352): Kohana_Core::error_handler(2048, 'Only variables ...', '/mnt/hgfs/share...', 352, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(29): Controller_config_procedure->get_files('userdata/incomi...', Array)
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 16:22:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/config/procedure.php [ 380 ]
2012-09-07 16:22:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/config/procedure.php [ 380 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 16:25:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/controller/config/procedure.php [ 372 ]
2012-09-07 16:25:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/controller/config/procedure.php [ 372 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(372): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 372, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(33): Controller_config_procedure->get_files2('userdata/incomi...')
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 16:25:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/controller/config/procedure.php [ 372 ]
2012-09-07 16:25:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/controller/config/procedure.php [ 372 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(372): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 372, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(33): Controller_config_procedure->get_files2('userdata/incomi...')
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 16:27:09 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/config/procedure.php [ 378 ]
2012-09-07 16:27:09 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/config/procedure.php [ 378 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(378): Kohana_Core::error_handler(2048, 'Only variables ...', '/mnt/hgfs/share...', 378, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(33): Controller_config_procedure->get_files2('userdata/incomi...')
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 16:28:10 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/config/procedure.php [ 380 ]
2012-09-07 16:28:10 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/config/procedure.php [ 380 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(380): Kohana_Core::error_handler(8, 'Array to string...', '/mnt/hgfs/share...', 380, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(33): Controller_config_procedure->get_files2('userdata/incomi...')
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 16:28:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/controller/config/procedure.php [ 381 ]
2012-09-07 16:28:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/controller/config/procedure.php [ 381 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 17:07:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/controller/config/procedure.php [ 69 ]
2012-09-07 17:07:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/controller/config/procedure.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 17:07:31 --- ERROR: ErrorException [ 2 ]: unlink(hl7result20120907205558.txt): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 68 ]
2012-09-07 17:07:31 --- STRACE: ErrorException [ 2 ]: unlink(hl7result20120907205558.txt): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 68 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(hl7resul...', '/mnt/hgfs/share...', 68, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(68): unlink('hl7result201209...')
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 17:09:39 --- ERROR: ErrorException [ 2 ]: unlink(userdata/incominghl7result20120907205558.txt): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 69 ]
2012-09-07 17:09:39 --- STRACE: ErrorException [ 2 ]: unlink(userdata/incominghl7result20120907205558.txt): No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 69 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(userdata...', '/mnt/hgfs/share...', 69, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(69): unlink('userdata/incomi...')
#2 [internal function]: Controller_config_procedure->action_parse()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-07 17:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 17:26:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: patient ~ APPPATH/classes/controller/config/procedure.php [ 57 ]
2012-09-07 17:26:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: patient ~ APPPATH/classes/controller/config/procedure.php [ 57 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 57, Array)
#1 [internal function]: Controller_config_procedure->action_parse()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-07 17:29:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/config/procedure.php [ 57 ]
2012-09-07 17:29:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/config/procedure.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-07 17:36:53 --- ERROR: ErrorException [ 2 ]: file_get_contents(userdata/incoming/hl7result20120907222436.txt): failed to open stream: No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 360 ]
2012-09-07 17:36:53 --- STRACE: ErrorException [ 2 ]: file_get_contents(userdata/incoming/hl7result20120907222436.txt): failed to open stream: No such file or directory ~ APPPATH/classes/controller/config/procedure.php [ 360 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/mnt/hgfs/share...', 360, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(360): file_get_contents('userdata/incomi...')
#2 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(33): Controller_config_procedure->hl7resultGetv2('hl7result201209...')
#3 [internal function]: Controller_config_procedure->action_parse()
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-07 18:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 18:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 18:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 20:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 20:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-07 20:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-07 20:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}