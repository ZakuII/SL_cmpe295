<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-02 16:13:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/config/procedure.php [ 22 ]
2012-09-02 16:13:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/config/procedure.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 16:19:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/config/procedure.php [ 44 ]
2012-09-02 16:19:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/config/procedure.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 18:31:59 --- ERROR: ErrorException [ 8 ]: Undefined index: by ~ APPPATH/classes/controller/config/procedure.php [ 107 ]
2012-09-02 18:31:59 --- STRACE: ErrorException [ 8 ]: Undefined index: by ~ APPPATH/classes/controller/config/procedure.php [ 107 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/config/procedure.php(107): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 107, Array)
#1 [internal function]: Controller_config_procedure->action_populateResult()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_config_procedure))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-02 18:37:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_config_procedure::messageGet() ~ APPPATH/classes/controller/config/procedure.php [ 113 ]
2012-09-02 18:37:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_config_procedure::messageGet() ~ APPPATH/classes/controller/config/procedure.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 18:38:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_config_procedure::messageGet() ~ APPPATH/classes/controller/config/procedure.php [ 113 ]
2012-09-02 18:38:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_config_procedure::messageGet() ~ APPPATH/classes/controller/config/procedure.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}