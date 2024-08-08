<?php
$subjects=[ "hindi","english","maths"];
echo $subjects[0];?><br>
<?php
echo $subjects[1];
?>


<?php
$subjects=['firstsubject'=>"hindi",'secondsubject'=>"english","thirdsubject"=>"maths"];

echo $subjects['firstsubject'];
echo $subjects['secondsubject'];
echo $subjects['thirdsubject'];
if(isset($subjects['forth_sub'])){
    //body of if
    echo $subjects['forth_sub'];

}


?>
