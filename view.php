<?php
include("links.html");
$rno=$_POST['reg'];
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
$sql = "SELECT * FROM student_info WHERE regno='$rno'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
{ ?>
<table align="center" border="5">
<tr>
<th>Reg.No</th>
<td><?php echo $row["regno"]?> </td>
</tr>

<tr>
<th>Student Name</th>
<td><?php echo $row["sname"]?> </td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $row["gender"]?> </td>
</tr>

<tr>
<th>DOB</th>
<td><?php echo $row["dob"]?> </td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $row["emailid"]?> </td>
</tr>

<tr>
<th>course</th>
<td><?php echo $row["course"]?> </td>
</tr>

<tr>
<th>mobile</th>
<td><?php echo $row["mobile"]?> </td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $row["address"]?> </td>
</tr>

 </table>

<?php  
  }
} 
else
 { ?>
<script>
alert("Invalid Register Number");
</script>
<?php
include("view.html");
}
mysqli_close($conn);
?>