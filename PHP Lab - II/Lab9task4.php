<?php

/* 21.12.2017*/
/* Meghna Anand */

include "Header.php";
include "Lab9body.php";
$con=mysql_connect('localhost','odb','odb_0db');
if(!$con){
 echo "Connection not established!";
 die("Cannot establish connection");
}else{
 echo "Connection established!!";
}
mysql_select_db("odb_anand");
if($_GET['submit']){
$query= "DROP TABLE Employee";
$result=mysql_query($query);
if(!$result ) {
            die('Could not delete table: ' . mysql_error());
         }else{
         echo "Table deleted successfully\n";
}
}
include "Footer.php";  
mysql_close($con);
exit();


?>