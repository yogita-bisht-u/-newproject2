<?php
$username_cookie = "username";
$username_cookie_value = $_POST['username'];
setcookie($username_cookie, $username_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day  

if(isset($_COOKIE[$username_cookie])) {

    echo "Cookie'" . $username_cookie. " 'is set!";
    echo "Value is: " . $_COOKIE[$username_cookie];
    }
  
else {
    echo "Cookie named '" . $username_cookie. "' is not set!";
  }
?>
<br>


<?php

$address_cookie = "address";
$address_cookie_value= $_POST['address'];
setcookie($address_cookie,$address_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day

if(isset($_COOKIE[$address_cookie])) {

    echo "cookie '".$address_cookie. "'is set!<br>";
   echo "vaule is:" .  $_COOKIE[$address_cookie];
} else{
echo "cookie named'" . $address_cookie. " ' is not set!";
}
?>
<br>  


<?php
$userid_cookie = "userid";
$userid_cookie_value=$_POST['userid'];
setcookie($userid_cookie,$userid_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day

if(isset($_COOKIE[$userid_cookie])){
  echo "cookie'" .$userid_cookie. " ' is set!<br>";
  echo "value is:" . $_COOKIE[$userid_cookie];
}else{
  echo "cookie named'" . $userid_cookie. "' is not set!";
}
?>

<?php
$Email_cookie ="Email";
$Email_cookie_value=$_POST['Email'];
setcookie($Email_cookie,$Email_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$Email_cookie])){
  echo "cookie'" .$Email_cookie." ' is set!<br>";
  echo "value is:" . $_COOKIE[$Email_cookie];
}else{
  echo "cookie named '" . $Email_cookie."'is not set!";
}
?>
<br>

<?php
$book10_cookie ="book10";
$book10_cookie_value=$_POST['book10'];
setcookie($book10_cookie,$book10_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$book10_cookie])){
  echo "cookie'" .$book10_cookie."'is set!<br>";
  echo "value is:" . $_COOKIE[$book10_cookie];
}else{
  echo "cookie named '" . $book10_cookie."'is not set!";
}
?>
<br>


<?php
$book20_cookie ="book20";
$book20_cookie_value=$_POST['book20'];
setcookie($book20_cookie,$book20_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$book20_cookie])){
  echo "cookie'" . $book20_cookie."'is set!<br>";
  echo "value is:" . $_COOKIE[$book20_cookie];
}else{
  echo "cookie named '" . $book20_cookie."'is not set!";
}
?>
<br>

<?php
$book30_cookie ="book30";
$book30_cookie_value=$_POST['book30'];
setcookie($book30_cookie,$book30_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$book30_cookie])){
  echo "cookie'" . $book30_cookie."'is set!<br>";
  echo "value is:" . $_COOKIE[$book30_cookie];
}else{
  echo "cookie named '" . $book30_cookie."'is not set!";
}
?>
<br>


<?php
$book40_cookie ="book40";
$book40_cookie_value=$_POST['book40'];
setcookie($book40_cookie,$book40_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$book40_cookie])){
  echo "cookie'" . $book40_cookie."'is set!<br>";
  echo "value is:" . $_COOKIE[$book40_cookie];
}else{
  echo "cookie named '" . $book40_cookie."'is not set!";
}
?>
<br>

<?php
$book50_cookie ="book50";
$book50_cookie_value=$_POST['book50'];
setcookie($book50_cookie,$book50_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$book50_cookie])){
  echo"cookie'" . $book50_cookie."'is set!<br>";
  echo"value is:" . $_COOKIE[$book50_cookie];
}else{
  echo "cookie named '" . $book50_cookie."'is not set!";
}
?>
<br>

<?php
$book60_cookie ="book60";
$book60_cookie_value=$_POST['book60'];
setcookie($book60_cookie,$book60_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$book60_cookie])){
  echo "cookie'" . $book60_cookie."'is set!<br>";
  echo "value is:" . $_COOKIE[$book60_cookie];
}else{
  echo "cookie named '" . $book60_cookie."'is not set!";
}
?>
<br>


<?php
$selectlocation_cookie ="city";
$selectlocation_cookie_value=$_POST['city'];
setcookie($selectlocation_cookie,$selectlocation_cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
  
if(isset($_COOKIE[$selectlocation_cookie])){
  echo "cookie'" . $selectlocation_cookie."'is set!<br>";
  echo "value is:" .  $_COOKIE[$selectlocation_cookie];
}else{
  echo "cookie named '" .  $selectlocation_cookie."'is not set!";
}
?>




