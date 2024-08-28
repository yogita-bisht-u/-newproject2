
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="styles.css">

 </head>

<body>
    <?php
    $conn = new mysqli('localhost', 'root', '','users');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
      
    
    if($_POST['hindi']<0||$_POST['hindi']>100){
        echo "wrong input hindi";
        exit;
     }
    if($_POST['english']<0|| $_POST['english']>100){
       echo "wrong input english";
       exit;
    }
    if($_POST['physics']<0||$_POST ['physics']>100){
        echo "wrong input physics";
        exit;
    }

    if($_POST['chemistry']<0||$_POST ['chemistry']>100){
        echo "wrong input chemistry";
        exit;
    }
    
if($_POST['maths']<0 ||$_POST ['maths']>100){
    echo "wrong input maths";
    exit;
}


    ?>
    <div  id="mytable">
    <table>

        <tr>
            <th>Subject</th>
                <th> Total Marks</th> 
                <th> Marks Obtained </th>    

</tr>

<tr>
    <td>Hindi</td>
    <td><b>100</b></td>
    <td><b><?php 
    $hindi =$_POST["hindi"];
    echo $hindi;?></b></td>
</tr>

<tr>
    <td>English</td>
    
    <td><b>100</b></td>
    <td><b><?php
    $english =$_POST["english"];
    echo $english;?></b></td>
</tr>


<tr>
    <td>Physics</td>
    <td><b>100</b></td>
    <td><b><?php
    $physics =$_POST["physics"];
     echo $physics;?></b></td>

</tr> 

<tr>
    <td> Chemistry</td>
    <td><b>100</b></td>
    <td> <b><?php 
    $chemistry =$_POST["chemistry"];
    echo $chemistry;?></b></td>
</tr>
 <tr>
    <td> Maths</td>
    <td> <b>100</b></td>
    <td> <b><?php
    $maths =$_POST["maths"];
    echo $maths;?></b></td>
</tr>
<tr>
    <td> userid</td>
    <td> <b><?php 
    $userid=$_POST["userid"];
    echo $userid;?></b></td>
</tr>
<tr>
    <td> Totalmarks </td>
    <td>  <b>500</b> </td>
    <td> <b><?php echo Totalmarks($_POST);?></b></td>
    

<tr>

<td colspan="2" id="pre" > Percentage  </td>

<td><b> 
    
<?php

$total=Totalmarks($_POST);

 echo Percentage($total );?></b></tr>

<?php

   function Percentage($total)
   {
return ($total/500)*100;
   }
   ?>

</div>

<?php
//  $total=$_POST["hindi"]+$_POST["english"]+$_POST["physics"]+$_POST["chemistry"]+$_POST["maths"];

//  echo $total;
//?><br>
<?php
// totalmarks($_POST);

?>
<?php

//$arrayofsub = $_POST;
 function totalmarks($arrayofsub){

 return $arrayofsub["hindi"]+$arrayofsub["english"]+$arrayofsub["physics"]+$arrayofsub["chemistry"]+$arrayofsub["maths"];


}
?>
<?php

$fail=true;
$fail_sub_marks=0;
$total_fail_sub=0;
if (['hindi']<33)
{
    $fail = true;
    $total_fail_sub = $_total_fail_sub+1;
    $fail_sub_marks =['hindi'];
}

if (['english']<33)
{
    $fail = true;
    $total_fail_sub = $_total_fail_sub+1;
    $fail_sub_marks =['english'];
}

if (['physics']<33)
{
    $fail = true;
    $total_fail_sub = $_total_fail_sub+1;
    $fail_sub_marks =['physics'];
}

if (['chemistry']<33)
{
    $fail = true;
    $total_fail_sub = $_total_fail_sub+1;
    $fail_sub_marks =['chemistry'];
}


if (['maths']<33)
{
    $fail = true; 
    $total_fail_sub = $_total_fail_sub+1;
    $fail_sub_marks =['maths'];
}



if ($fail){

    if ($total_fail_sub==1  && $fail_sub_marks>=27) {
   echo "pass with grace";
    }
    else{
            echo"you are fail";
    
    }
}
    else
    {
        echo"you are pass ";
    
    }
    ?>




<?php
   $sql = "insert into user_result(`user_id`,`hindi`,`english`,`physics`,`chemistry`,`maths`) values( '{$userid}','{$hindi}','{$english}','{$physics}','{$chemistry}','{$maths}')";
  $conn->query($sql);
?>
</table>
</body>
</html>



