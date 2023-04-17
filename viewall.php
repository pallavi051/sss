<?php
include("links.html");
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
$sql = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql);
 ?>
<h1 align="center">Students Infromation</h1>
<table align="center" border="5">  
<tr>
<th>Reg.No</th>
<th>Student Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Email</th>
<th>course</th>
<th>mobile</th>
<th>Address</th>
</tr>
<?php
  while($row = mysqli_fetch_assoc($result)) 
{
?>

<tr>
<td><?php echo $row["regno"]?> </td>

<td><?php echo $row["sname"]?> </td>

<td><?php echo $row["gender"]?> </td>

<td><?php echo $row["dob"]?> </td>

<td><?php echo $row["emailid"]?> </td>

<td><?php echo $row["course"]?> </td>

<td><?php echo $row["mobile"]?> </td>

<td><?php echo $row["address"]?> </td>
</tr>

 

<?php  
  }
?>
</table>
<?php  
mysqli_close($conn);
?>