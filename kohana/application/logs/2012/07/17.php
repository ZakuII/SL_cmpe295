<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-17 13:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-17 13:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 13:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 13:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 13:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL another was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 13:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL another was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 14:06:41 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-17 14:06:41 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('article2s')
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\test.php(8): Kohana_ORM::factory('article2')
#7 [internal function]: Controller_test->action_index()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-17 14:07:01 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-17 14:07:01 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('article2s')
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\test.php(8): Kohana_ORM::factory('article2')
#7 [internal function]: Controller_test->action_index()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-17 14:14:52 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-17 14:14:52 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('article2s')
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\test.php(8): Kohana_ORM::factory('article2')
#7 [internal function]: Controller_test->action_index()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-17 14:19:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\article2\index.php [ 7 ]
2012-07-17 14:19:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\article2\index.php [ 7 ]
--
#0 C:\xampplite\htdocs\kohana_test\application\views\article2\index.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampplite\ht...', 7, Array)
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\view.php(61): include('C:\xampplite\ht...')
#2 C:\xampplite\htdocs\kohana_test\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampplite\ht...', Array)
#3 C:\xampplite\htdocs\kohana_test\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampplite\htdocs\kohana_test\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampplite\htdocs\kohana_test\application\classes\controller\test.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_test->action_index()
#7 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-17 14:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article2/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 14:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article2/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 14:21:49 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-17 14:21:49 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana_blog.article2s' doesn't exist [ SHOW FULL COLUMNS FROM `article2s` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampplite\htdocs\kohana_test\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('article2s')
#2 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampplite\htdocs\kohana_test\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampplite\htdocs\kohana_test\application\classes\controller\test.php(8): Kohana_ORM::factory('article2')
#7 [internal function]: Controller_test->action_index()
#8 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_test))
#9 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-17 14:27:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\test.php [ 10 ]
2012-07-17 14:27:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\test.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 14:28:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\test.php [ 10 ]
2012-07-17 14:28:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\test.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 14:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 14:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampplite\htdocs\kohana_test\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampplite\htdocs\kohana_test\index.php(109): Kohana_Request->execute()
#3 {main}