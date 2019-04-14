<?php
include 'Net/SSH2.php';
 
$ssh = new Net_SSH2('ssh-srv35573.ht-systems.ru');
if (!$ssh->login('srv35573', 'z&KGP5a$h#6x')) {
    exit('Login Failed');
}

$comand = 'cd '.$_SERVER['SERVER_NAME'].'; git pull; git add -A; git commit -m "Commited from hts.ru - '.$_SERVER['SERVER_NAME'].' - '.date("m.d.y H:i:s").'"; git push';

echo $ssh->exec($comand);
?>