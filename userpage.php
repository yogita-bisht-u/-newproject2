<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="stylespage.css">
</head>
<body>
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
        <th>user id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>contact</th>
    </tr>
    <?php
     if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
      
    ?>
    <tr>
        <?php
     echo "<td>". $row["user_id"] . "</td>";
    echo "<td>" .$row["firstname"] ."</td>";
    echo "<td>". $row["lastname"] . "</td>";
    echo "<td>". $row["email"] . "</td>";
    echo "<td>". $row["contact"] . "</td>";
?>
</tr>
<?php
 }
} 

else {
  echo "0 results";
}
  
$conn->close();

  ?>
 
</table>
</body>
</html>
