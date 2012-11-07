<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-19 16:28:59 --- ERROR: ErrorException [ 8 ]: Undefined index: uid ~ APPPATH/classes/controller/form/user.php [ 395 ]
2012-08-19 16:28:59 --- STRACE: ErrorException [ 8 ]: Undefined index: uid ~ APPPATH/classes/controller/form/user.php [ 395 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/user.php(395): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 395, Array)
#1 [internal function]: Controller_form_user->action_store()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_user))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:30:58 --- ERROR: ErrorException [ 8 ]: Undefined index: uid ~ APPPATH/classes/controller/form/user.php [ 395 ]
2012-08-19 16:30:58 --- STRACE: ErrorException [ 8 ]: Undefined index: uid ~ APPPATH/classes/controller/form/user.php [ 395 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/form/user.php(395): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/share...', 395, Array)
#1 [internal function]: Controller_form_user->action_store()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_form_user))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 19:41:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: tblCnt ~ APPPATH/classes/controller/profile/doctor.php [ 42 ]
2012-08-19 19:41:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: tblCnt ~ APPPATH/classes/controller/profile/doctor.php [ 42 ]
--
#0 /mnt/hgfs/share/kohana/application/classes/controller/profile/doctor.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/share...', 42, Array)
#1 [internal function]: Controller_profile_doctor->action_showDoctor()
#2 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_doctor))
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 22:44:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/controller/profile/profile.php [ 62 ]
2012-08-19 22:44:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/controller/profile/profile.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 23:05:31 --- ERROR: Kohana_Exception [ 0 ]: The visitation property does not exist in the Model_Patient class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-19 23:05:31 --- STRACE: Kohana_Exception [ 0 ]: The visitation property does not exist in the Model_Patient class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('visitation', 2)
#1 /mnt/hgfs/share/kohana/application/classes/controller/profile/profile.php(82): Kohana_ORM->__set('visitation', 2)
#2 [internal function]: Controller_profile_profile->action_assignAssociation()
#3 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_profile))
#4 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-19 23:59:34 --- ERROR: ErrorException [ 1 ]: Call to undefined function listPatientAssoc() ~ APPPATH/classes/controller/profile/profile.php [ 98 ]
2012-08-19 23:59:34 --- STRACE: ErrorException [ 1 ]: Call to undefined function listPatientAssoc() ~ APPPATH/classes/controller/profile/profile.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}