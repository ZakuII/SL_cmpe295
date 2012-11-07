<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-13 18:20:48 --- ERROR: Kohana_Exception [ 0 ]: The more property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-13 18:20:48 --- STRACE: Kohana_Exception [ 0 ]: The more property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(9): Kohana_ORM->__get('more')
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:21:34 --- ERROR: Kohana_Exception [ 0 ]: The more property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-13 18:21:34 --- STRACE: Kohana_Exception [ 0 ]: The more property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(9): Kohana_ORM->__get('more')
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:22:27 --- ERROR: Kohana_Exception [ 0 ]: The more property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-13 18:22:27 --- STRACE: Kohana_Exception [ 0 ]: The more property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(9): Kohana_ORM->__get('more')
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:23:03 --- ERROR: Kohana_Exception [ 0 ]: The moreContent property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-13 18:23:03 --- STRACE: Kohana_Exception [ 0 ]: The moreContent property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(9): Kohana_ORM->__get('moreContent')
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:25:35 --- ERROR: Kohana_Exception [ 0 ]: The content property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-13 18:25:35 --- STRACE: Kohana_Exception [ 0 ]: The content property does not exist in the Model_simple3 class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(9): Kohana_ORM->__get('content')
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:29:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/simple.php [ 11 ]
2012-08-13 18:29:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/simple.php [ 11 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/share...', 11, Array)
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:29:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH/classes/controller/simple.php [ 11 ]
2012-08-13 18:29:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH/classes/controller/simple.php [ 11 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/share...', 11, Array)
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-13 18:30:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$simple' (T_VARIABLE) ~ APPPATH/classes/controller/simple.php [ 11 ]
2012-08-13 18:30:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$simple' (T_VARIABLE) ~ APPPATH/classes/controller/simple.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-13 18:58:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/controller/simple.php [ 24 ]
2012-08-13 18:58:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/controller/simple.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-13 18:58:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: student ~ APPPATH/classes/controller/simple.php [ 14 ]
2012-08-13 18:58:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: student ~ APPPATH/classes/controller/simple.php [ 14 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/simple.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 14, Array)
#1 [internal function]: Controller_simple->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_simple))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}