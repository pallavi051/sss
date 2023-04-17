<?php
include("links.html");
$eid=$_POST['email'];
$pd=$_POST['pwd'];
$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce"; 
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql = "SELECT sname FROM student_info WHERE emailid='$eid' AND password='$pd'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
 { ?>
<script>
alert("Thank You for Login");
</script>
 <?php 
} 
else
 {  echo "0 results";
}mysqli_close($conn);
?>	