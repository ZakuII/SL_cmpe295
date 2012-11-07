<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-20 00:15:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/profile/profile.php [ 99 ]
2012-08-20 00:15:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/profile/profile.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 00:17:50 --- ERROR: ErrorException [ 1 ]: Call to undefined function removeAssocWithPatient() ~ APPPATH/classes/controller/profile/profile.php [ 99 ]
2012-08-20 00:17:50 --- STRACE: ErrorException [ 1 ]: Call to undefined function removeAssocWithPatient() ~ APPPATH/classes/controller/profile/profile.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-20 14:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-20 14:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-20 14:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-20 14:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-20 14:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-20 14:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-20 14:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata/visit/test/testfile.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-20 14:24:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/profile/profile.php [ 229 ]
2012-08-20 14:24:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/controller/profile/profile.php [ 229 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:24:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' Dr. '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
2012-08-20 14:24:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' Dr. '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:25:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' Dr '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
2012-08-20 14:25:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' Dr '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:25:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' Dr '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
2012-08-20 14:25:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' Dr '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:26:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' Dr '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
2012-08-20 14:26:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' Dr '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile/profile.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:26:46 --- ERROR: ErrorException [ 1 ]: Call to undefined function patientLogVisit() ~ APPPATH/classes/controller/profile/profile.php [ 256 ]
2012-08-20 14:26:46 --- STRACE: ErrorException [ 1 ]: Call to undefined function patientLogVisit() ~ APPPATH/classes/controller/profile/profile.php [ 256 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 14:54:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'patient->checked_In' in 'where clause' [ SELECT `profile`.* FROM `Profile` AS `profile` WHERE `type` = 'patient' AND `lastname` = 'lam' AND `patient->checked_In` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-20 14:54:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'patient->checked_In' in 'where clause' [ SELECT `profile`.* FROM `Profile` AS `profile` WHERE `type` = 'patient' AND `lastname` = 'lam' AND `patient->checked_In` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `profile...', 'Model_Profile', Array)
#1 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /mnt/hgfs/share/kohana/application/classes/controller/profile/profile.php(234): Kohana_ORM->find_all()
#4 [internal function]: Controller_profile_profile->action_searchPatientCheckedIn()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_profile))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-20 15:25:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: logString ~ APPPATH/classes/controller/profile/profile.php [ 271 ]
2012-08-20 15:25:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: logString ~ APPPATH/classes/controller/profile/profile.php [ 271 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/profile.php(271): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 271, Array)
#1 /mnt/hgfs/share/kohana/application/classes/controller/profile/profile.php(89): Controller_profile_profile->removeAssocWithPatient('3', '11')
#2 [internal function]: Controller_profile_profile->action_removeAssociation()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_profile))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-20 15:55:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/profile/doctor.php [ 55 ]
2012-08-20 15:55:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/profile/doctor.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}