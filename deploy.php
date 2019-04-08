<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'Net/SSH2.php';
 
     $ssh = new Net_SSH2('ftp-srv35573.ht-systems.ru');
     if (!$ssh->login('srv35573', 'z&KGP5a$h#6x')) {
         exit('Login Failed');
     }
 
     echo $ssh->exec('pwd');
     echo $ssh->exec('ls -la');
?>