<!-- To allow the page to connect to the database -->

<?php
session_start();

$dbhost = "eu-cdbr-west-01.cleardb.com";
$dbname = "heroku_847c903dd247bae";
$dbuser = "bff144a2e95ed7";
$dbpass = "278f25c9";

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

?>


<!--   http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523    -->

<!-- Place in each PHP file             ?php include "base.php"; ?              -->

 mysql://bff144a2e95ed7:278f25c9@eu-cdbr-west-01.cleardb.com/heroku_847c903dd247bae?reconnect=true