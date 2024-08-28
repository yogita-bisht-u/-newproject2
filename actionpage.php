<?php

$conn = new mysqli('localhost', 'root', '','users');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  
$firstname_value = $_POST ["firstname"];
echo $firstname_value;
if($_POST["firstname"]==""){
    echo "please enter firstname";
}
else{
    echo"valid first name";
}
?>
<br>

<?php
$lastname_value = $_POST["lastname"];
echo $lastname_value;
if($_POST["lastname"]==""){
    echo "please enter lastname";
}
else{
   echo "valid last name";
}
?>
<br>

<?php
$password_value = $_POST["password"];
echo $password_value;
if($_POST["password"]==""){
    echo "please enter password";
}
else{
    echo"valid password";
}
?>
<br>

<?php
$conformpassword_value = $_POST["conformpassword"];
echo $conformpassword_value;
if($_POST["conformpassword"]==""){
    echo "please enter conformpassword";
}
else{
   echo "valid conformpassword";
}

?>
<br>

<?php
$email_value = $_POST["email"];
echo $email_value;
if($_POST["email"]==""){
    echo "please enter email";
}
else{
    echo"valid eamil";
}
?>
<br>

<?php
$contact_value = $_POST["contact"];
echo $contact_value;
if($_POST["contact"]==""){
    echo "please enter contact";
}
else{
    echo"valid contact";
}
?>
<br>

<?php
if($password_value!=$conformpassword_value){
    echo "please enetr same password";
}
else{
    echo"valid password";
}


$sql = "insert into user_detail(`firstname`,`password`,`email`,`contact`,`lastname`) values ('{$firstname_value}','{$password_value}','{$email_value}','{$contact_value}','{$lastname_value}')";
  $conn->query($sql);

  ?>

