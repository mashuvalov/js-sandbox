<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$conn = ssh2_connect('ftp-srv35573.ht-systems.ru', 22);
ssh2_auth_password($conn, 'srv35573', 'z&KGP5a$h#6x');
?>