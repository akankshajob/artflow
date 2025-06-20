<?php

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'testing'; 
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);

if(mysqli_connect_error()){
    echo"Cannot connect to database";
    exit();
}

?>