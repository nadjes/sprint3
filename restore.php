<?php

$restore_file = 'hugo.sql';
$server_name = 'localhost';
$username = 'root';
$password = 'root';
$database_name = 'mysql';

$cmd = "mysql -h {$server_name -u {$username} -p {$password} {$database_name} < $restore_file";
exec($cmd);


?>
