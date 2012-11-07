<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-03 01:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana_test/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-03 01:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana_test/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 01:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana_test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:20:06 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-04-03 01:20:06 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\article.php(12): Kohana_ORM->__construct()
#7 [internal function]: Controller_Article->action_new()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-04-03 01:23:24 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-04-03 01:23:24 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\article.php(12): Kohana_ORM->__construct()
#7 [internal function]: Controller_Article->action_new()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-04-03 01:23:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-04-03 01:23:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\article.php(12): Kohana_ORM->__construct()
#7 [internal function]: Controller_Article->action_new()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-04-03 01:24:07 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'kohana-blog' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-04-03 01:24:07 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'kohana-blog' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana-blog')
#1 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampplite\htdocs\kohana_test\application\classes\controller\article.php(12): Kohana_ORM->__construct()
#8 [internal function]: Controller_Article->action_new()
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#13 {main}
2012-04-03 01:24:32 --- ERROR: Database_Exception [ 1146 ]: Table 'mytest.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-03 01:24:32 --- STRACE: Database_Exception [ 1146 ]: Table 'mytest.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampplite\htdocs\kohana_test\application\classes\controller\article.php(12): Kohana_ORM->__construct()
#6 [internal function]: Controller_Article->action_new()
#7 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-03 01:42:41 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-04-03 01:42:41 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\article.php(12): Kohana_ORM->__construct()
#7 [internal function]: Controller_Article->action_new()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-04-03 01:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-03 01:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jqm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jqm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jqm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-03 01:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jqm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 01:59:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\article\index.php [ 7 ]
2012-04-03 01:59:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\article\index.php [ 7 ]
--
#0 C:\xampplite\htdocs\kohana_test\application\views\article\index.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampplite\ht...', 7, Array)
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\view.php(61): include('C:\xampplite\ht...')
#2 C:\xampplite\htdocs\kohana_test\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampplite\ht...', Array)
#3 C:\xampplite\htdocs\kohana_test\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampplite\htdocs\kohana_test\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampplite\htdocs\kohana_test\application\classes\controller\jqm.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_jqm->action_index()
#7 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jqm))
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-03 15:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-03 15:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-03 15:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-03 15:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}