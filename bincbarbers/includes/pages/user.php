<?php
//TEMP script just to create a user.
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$user = new \System\Users\User();
$user->email = 'sem407@outlook.com';
$user->password = password_hash('admin', PASSWORD_DEFAULT);
$user->name = 'admin';
\System\Users\User::create($user, $db->getConnection());
exit;
