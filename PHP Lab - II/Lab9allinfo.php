<?php

/* 21.12.2017*/
/* Meghna Anand */
include "Header.php";
include "Lab9body.php";
$con=mysql_connect('localhost','odb','odb_0db');
if(!$con){
echo "Connection not established!!";
die("Cannot establish connection!!");
}else{
echo "Connection established!!"."<br/>";
}
mysql_select_db('odb_anand');
$query="SELECT * FROM Employee";
$result=mysql_query($query);
echo "<table border='2'>  
           <tr> 
            <th>EmpName</th>
			<th>id</th>		
			<th>name</th>
			<th>age</th>		
 		</tr>";
while($row = mysql_fetch_array($result)) {
 echo '
        <tr>
            <td>'.$row['EmpName'].'</td>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['age'].'</td>
        </tr>';

}

echo '</table>';
include "Footer.php";
mysql_close($con);
exit();

?>