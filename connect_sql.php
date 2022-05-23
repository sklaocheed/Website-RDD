
<?php
$serverName = "52.221.234.237"; 
$connectionInfo = [
     "Database" => "IDS",
     "Uid" =>"sa",
     "PWD" => "123456!Ab",
     "CharacterSet"  => 'UTF-8'
];
$con = sqlsrv_connect( $serverName, $connectionInfo);
sqlsrv_query($con, "SET NAMES 'utf8' ");

if( $con == false ) 
     die( print_r( sqlsrv_errors(), true));

?>