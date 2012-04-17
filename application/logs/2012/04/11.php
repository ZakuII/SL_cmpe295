<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-11 20:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-11 20:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-11 20:09:34 --- ERROR: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
2012-04-11 20:09:34 --- STRACE: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-11 20:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-11 20:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-11 20:11:36 --- ERROR: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
2012-04-11 20:11:36 --- STRACE: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-11 20:24:16 --- ERROR: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:24:16 --- STRACE: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/index.php')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('home/index.php', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/home.php(6): Kohana_View::factory('home/index.php')
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:24:16 --- ERROR: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
2012-04-11 20:24:16 --- STRACE: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-11 20:25:15 --- ERROR: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:25:15 --- STRACE: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/index.php')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('home/index.php', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/home.php(6): Kohana_View::factory('home/index.php')
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:25:15 --- ERROR: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
2012-04-11 20:25:15 --- STRACE: ErrorException [ 1 ]: Class 'html' not found ~ SYSPATH/views/kohana/error.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-11 20:30:12 --- ERROR: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:30:12 --- STRACE: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/index.php')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('home/index.php', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/home.php(6): Kohana_View::factory('home/index.php')
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:30:13 --- ERROR: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:30:13 --- STRACE: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/index.php')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('home/index.php', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/home.php(6): Kohana_View::factory('home/index.php')
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-11 20:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-11 20:31:22 --- ERROR: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:31:22 --- STRACE: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('home')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('home', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/home.php(6): Kohana_View::factory('home')
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:32:33 --- ERROR: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:32:33 --- STRACE: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('test')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('test', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/test.php(6): Kohana_View::factory('test')
#3 [internal function]: Controller_Test->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:35:36 --- ERROR: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:35:36 --- STRACE: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('test')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('test', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/test.php(6): Kohana_View::factory('test')
#3 [internal function]: Controller_Test->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:35:39 --- ERROR: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:35:39 --- STRACE: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('home')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('home', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/home.php(6): Kohana_View::factory('home')
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:36:14 --- ERROR: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-11 20:36:14 --- STRACE: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(137): Kohana_View->set_filename('test')
#1 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/view.php(30): Kohana_View->__construct('test', NULL)
#2 /mnt/hgfs/GAO/Documents/SL_cmpe295/application/classes/controller/test.php(6): Kohana_View::factory('test')
#3 [internal function]: Controller_Test->action_index()
#4 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/GAO/Documents/SL_cmpe295/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-11 20:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-11 20:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/GAO/Documents/SL_cmpe295/index.php(109): Kohana_Request->execute()
#1 {main}