<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-15 18:03:13 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`med_data`.`Profile`, CONSTRAINT `Profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Patient` (`user_id`) ON UPDATE CASCADE) [ INSERT INTO `Profile` (`username`, `password`, `type`, `dateCreated`, `email`, `firstname`, `lastname`) VALUES ('long', 'fc66f021c67d064c1490a12b5a4d4d2f5167ca692a16ca12f1f3a4cda29a6fa9', 'doctor', 'Wed, 15 Aug 2012 23:03:13 +0000', 'longlam@email.com', 'long', 'lam') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-15 18:03:13 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`med_data`.`Profile`, CONSTRAINT `Profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Patient` (`user_id`) ON UPDATE CASCADE) [ INSERT INTO `Profile` (`username`, `password`, `type`, `dateCreated`, `email`, `firstname`, `lastname`) VALUES ('long', 'fc66f021c67d064c1490a12b5a4d4d2f5167ca692a16ca12f1f3a4cda29a6fa9', 'doctor', 'Wed, 15 Aug 2012 23:03:13 +0000', 'longlam@email.com', 'long', 'lam') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `Pr...', false, Array)
#1 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /mnt/hgfs/share/kohana/application/classes/controller/profile/profile.php(28): Kohana_ORM->save()
#4 [internal function]: Controller_profile_profile->action_newProfile()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_profile))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-15 18:06:12 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`med_data`.`Profile`, CONSTRAINT `Profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Patient` (`user_id`) ON UPDATE CASCADE) [ INSERT INTO `Profile` (`username`, `password`, `type`, `dateCreated`, `email`, `firstname`, `lastname`) VALUES ('long', 'fc66f021c67d064c1490a12b5a4d4d2f5167ca692a16ca12f1f3a4cda29a6fa9', 'doctor', 'Wed, 15 Aug 2012 23:06:12 +0000', 'longlam@email.com', 'long', 'lam') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-15 18:06:12 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`med_data`.`Profile`, CONSTRAINT `Profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Patient` (`user_id`) ON UPDATE CASCADE) [ INSERT INTO `Profile` (`username`, `password`, `type`, `dateCreated`, `email`, `firstname`, `lastname`) VALUES ('long', 'fc66f021c67d064c1490a12b5a4d4d2f5167ca692a16ca12f1f3a4cda29a6fa9', 'doctor', 'Wed, 15 Aug 2012 23:06:12 +0000', 'longlam@email.com', 'long', 'lam') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /mnt/hgfs/share/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `Pr...', false, Array)
#1 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /mnt/hgfs/share/kohana/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /mnt/hgfs/share/kohana/application/classes/controller/profile/profile.php(28): Kohana_ORM->save()
#4 [internal function]: Controller_profile_profile->action_newProfile()
#5 /mnt/hgfs/share/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_profile_profile))
#6 /mnt/hgfs/share/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/share/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/share/kohana/index.php(109): Kohana_Request->execute()
#9 {main}