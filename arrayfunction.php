<?php
// passing array to function
$marks = array(10,20,30,40); //defining  array
function total ($subjects )   //array parameter
{    
    
    echo $subjects[0];
}
echo total ($marks);  // passing array marks
?>


<?php
 $marks =array(10,20,30);
 function toatl ($number = array(10,20,30))
 {
    $sum = 0;
    foreach( $number as $num)
    {
        $sum = $sum + $num;
        }
    return $sum;
 }

 