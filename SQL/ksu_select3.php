<?php
 $db_host = "localhost";
 $db_name = "test";
 $db_table = "ksu_std_table";
 $db_user = "root";
 $db_password = "";
 // check connection
 $conn = mysqli_connect($db_host, $db_user, $db_password);
 if(empty($conn)){
	print  mysqli_error ($conn);
    die ("Unable to connect to DB！" );
	exit;
 }  
 if(!mysqli_select_db( $conn, $db_name)){
	die("DB is not existed");
	exit;
 }  
 //main scope  
mysqli_set_charset($conn,'utf8');

echo "ksu_std_table : the number of students as follows"."<br/><br/>";
$result = mysqli_query($conn,
	"SELECT ksu_std_name,ksu_std_department,ksu_std_age FROM ksu_std_table");
     
 echo "<table border='1'>
 <tr>
   <th> ksu_std_department </th>  <th>  ksu_std_name </th>  <th> ksu_std_age </th>  
 </tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>". $row['ksu_std_department'] . "</td>";
	echo "<td>". $row['ksu_std_name'] . "</td>";
	echo "<td>". $row['ksu_std_age'] . "</td>";
}
echo"</table>";
echo " records found ! " . "<br/><br/>";
?> 
<form enctype="multipart/form-data"  method = "post" action="ksu_select3.html">
<input type="submit" name="sub" value="Back"/>
</form>