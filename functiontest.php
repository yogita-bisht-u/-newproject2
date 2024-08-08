<?php


function isthisvalueset($value){

    if($value == ''){
        return false;

    }else{
        return true;
    }

}


if(isthisvalueset('cdsffg')){
echo "value set";
}else{
echo "value not set";

}


?> 
<br>
<?php

function arrayfunction($name){
        return $name['sec'];
}

$names = ["fir"=>"nadf0","sec"=>"adsf"];

echo " this is array 1 ". arrayfunction($names);
?>
<br>
<?php

function arrayfunction2($names2){
      return $names2['num'];

}
$names = ["last"=>"kfhkj","num"=>"gsvs"];

echo "this is array2 = ". arrayfunction2($names);


function myfunction($name,$city){

    //local variable
    $gender = "female";

    return "my  name is ".$name." l live in ".$city." i am ".$gender;

}



echo myfunction("yogita","almora");
echo myfunction("amit","delhi");

?>
<?php
function addition($x,$y){
    return $x+$y;

}
echo addition(9,5);
?><br>
<?php
function multiplay($x,$y){
    return $x*$y;

}
echo multiplay(9,5);
?><br>
<?php
function divide ($x,$y){
    return $x/$y;
}
echo divide(6,8);



