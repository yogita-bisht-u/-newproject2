<?php



echo hello(3 ,"yogita" ,"almora" );




//$lineno = 12;
function hello($lineno,$name,$city ){
    $hello = "hello from amit " .$lineno ." " .$name ."  " .$city ."  "; //local variable
   
     return $hello;

 }
?>

<br>
 
 <?php


echo result(230,500);
echo "<br>";
echo result (700,1000);
echo "<br>";
echo result(1200,1500);
function result($obtainedmarks,$total){
    $test =  ($obtainedmarks/$total)*100;
    return $test;

          }
    ?>
<br>
<?php


$subjectarray=["hindi"=>40,"english"=>65,"physics"=>56,"chemistry"=>78,"maths"=>87];


echo subject($subjectarray);
function subject ($subjectarray){
 
    return $subjectarray["hindi"];
   }
?>
<br>


<?php

$subject=["java"=>45,"python"=>67,"os"=>45,"opps"=>78,"css"=>45];
function add ($subject){

   return $subject["java"]+ $subject["python"]+ $subject["os"]+$subject["opps"]+$subject["css"];
   
    
}
$obtainedmarks= add($subject);
echo "<br>";
echo result($obtainedmarks,500);



echo "<br>";
$x=10;
$y=20;
echo $x+$y;
?>
<br>

<?php
$sem1=["compilerdesign"=>77,"cloud"=>86,"microprocessor"=>86,"dataanalyics"=>85,"graphtheory"=>87];
$sem2=["os"=>56,"cn"=>67,"daa"=>76,"iwt"=>56,"cyber"=>78];
function addition($sem1){
    return $sem1["compilerdesign"]+ $sem1["cloud"]+$sem1["microprocessor"]+$sem1["dataanalyics"]+$sem1["graphtheory"];


}
$marks =addition($sem1);
echo $marks;
echo "<br>";
 echo result($marks,500);
 ?>
 <br>
 <?php
 function additions($sem2){
    return $sem2["os"]+ $sem2["cn"] +$sem2["daa"] +$sem2["iwt"]+$sem2["cyber"];
 }
$total=additions($sem2);
echo $total;
echo "<br>";
echo result($total,500);



function total_marks($subject_array){



}
