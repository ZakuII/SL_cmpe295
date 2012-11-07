<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-28 15:08:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '`', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
2012-09-28 15:08:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '`', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-28 15:09:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '`', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
2012-09-28 15:09:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '`', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-28 15:10:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
2012-09-28 15:10:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-28 15:11:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
2012-09-28 15:11:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-28 15:11:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
2012-09-28 15:11:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\profile\patient.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-28 15:18:33 --- ERROR: Database_Exception [ 1146 ]: Table 'med_data.personalanswer' doesn't exist [ SHOW FULL COLUMNS FROM `personalanswer` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 15:18:33 --- STRACE: Database_Exception [ 1146 ]: Table 'med_data.personalanswer' doesn't exist [ SHOW FULL COLUMNS FROM `personalanswer` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampplite\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampplite\htdocs\kohana\application\classes\controller\profile\patient.php(38): Kohana_Database_MySQL->list_columns('personalanswer')
#2 [internal function]: Controller_profile_patient->action_getPatientInfo()
#3 C:\xampplite\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_patient))
#4 C:\xampplite\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampplite\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-28 15:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/11/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/11/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 15:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/prescription/7/prescriptionjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 15:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/7/Visitjson.txt ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampplite\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}