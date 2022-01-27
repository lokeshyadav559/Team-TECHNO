<?php
define('DBSERVER','localhost');//server
define('DBUSERNAME','root');//Username
define('DBPASSWORD',''); //Password
define('DBNAME','demo'); //Name

$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

if($db === false){
  die("Error. connection error".mysqli_connect_error());
}
 ?>
