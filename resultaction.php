
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
    
    if($_POST['hindi']==""){
        echo "please fill marks of hindi";
        exit;
     }
    if($_POST['english']==""){
       echo "please fill marks of english";
       exit;
    }
    if($_POST['physics']==""){
        echo "please fill marks of physics";
        exit;
    }

    if($_POST['chemistry']==""){
        echo "please fill marks of chemistry";
        exit;
    }
    
if($_POST['maths']==""){
    echo "please fill marks of maths";
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
    <td><b><?php echo $_POST["hindi"];?></b></td>
</tr>

<tr>
    <td>English</td>
    
    <td><b>100</b></td>
    <td><b><?php echo $_POST["english"];?></b></td>
</tr>


<tr>
    <td>Physics</td>
    <td><b>100</b></td>
    <td><b><?php echo $_POST["physics"];?></b></td>

</tr> 

<tr>
    <td> Chemistry</td>
    <td><b>100</b></td>
    <td> <b><?php echo $_POST["chemistry"];?></b></td>
</tr>
 <tr>
    <td> Maths</td>
    <td> <b>100</b></td>
    <td> <b><?php echo $_POST["maths"];?></b></td>
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


</table>
</div>
</body>
</html>

 <?php
//  $total=$_POST["hindi"]+$_POST["english"]+$_POST["physics"]+$_POST["chemistry"]+$_POST["maths"];

//  echo $total;
?><br>
<?php
// totalmarks($_POST);

?>
<?php

//$arrayofsub = $_POST;
 function totalmarks($arrayofsub){

 return $arrayofsub["hindi"]+$arrayofsub["english"]+$arrayofsub["physics"]+$arrayofsub["chemistry"]+$arrayofsub["maths"];


}

