<?php
$i=1;
for($i=1;$i<=10;$i++){
    if(($i==6)||($i==8)){
        continue;
    }
    echo $i;
    echo "<br>";
}
echo "<h1>INDEXED OR NUMERICAL ARRAY</h1>";
 $A[0]=2;
 $A[1]=10;
$A[2]=8;
$A[3]=7;
$A[4]=5;
echo $A[0].",".$A[2];//output 2,8
 echo"<h1>CREATING AN ARRAY USING THE ARRAY FUNCTION</h1>";
 //syntax $var_name=array(value1,value2,value3,value4,value5)
 $FUN=array("john",'kabanda','kigali','kicukiro','gakenke');
 echo ($FUN[0].$FUN[1].$FUN[2].$FUN[3].$FUN[4]);
//foreach syntax
//foreach($array_name as $variable represent every element)
echo "<br>";
echo"<h3>HOW TO OUTPUT AN ARRAY USING FOR EACH LOOP</h3>";
$number=array(10,2,6,3,5);
foreach($number as $value ){
    echo"the element stored in the array= ",$value;
echo"<br>";
};
echo "<h3>how to count the value in an array using</h3> ";
 echo count($number);
 /*echo "<h3>date and time</h3> ";
 echo date and time;*/
 ?>
