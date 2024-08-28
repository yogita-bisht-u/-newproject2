 <?php
 $conn = new mysqli('localhost', 'root', '','users');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  $sql = "SELECT user_id,firstname,lastname,email,contact FROM user_detail";
  
  $result = $conn->query($sql);     

  ?>
<table>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
</tr>

  <?php

  if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {

?>
<tr>
<?php
   // echo "$row["user_id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 
   echo "<td>". $row["user_id"] . "</td>";
   echo "<td>". $row["firstname"] . "</td>";
   echo "<td>". $row["lastname"] . "</td>";
  ?>
</tr>
<?php

 
  }



} else {
  echo "0 results";
}
  
$conn->close();

  ?>

<tr>
<td>1</td>
<td>fname test</td>
<td>last name test</td>
</tr>
</table>




