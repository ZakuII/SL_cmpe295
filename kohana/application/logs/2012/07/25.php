<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-25 01:57:10 --- ERROR: Database_Exception [ 1146 ]: Table 'med_data.article2' doesn't exist [ SHOW FULL COLUMNS FROM `article2` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-25 01:57:10 --- STRACE: Database_Exception [ 1146 ]: Table 'med_data.article2' doesn't exist [ SHOW FULL COLUMNS FROM `article2` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /mnt/hgfs/share/kohana/application/classes/controller/test.php(28): Kohana_Database_MySQL->list_columns('article2')
#2 [internal function]: Controller_test->action_index()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-25 01:57:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/classes/controller/test.php [ 29 ]
2012-07-25 01:57:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/test.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 29, Array)
#1 [internal function]: Controller_test->action_index()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}