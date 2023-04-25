<?php
$A[0]=2;
$A[1]=3;
$A[2]=3;
$A[3]=4;
$A[4]=5;
$A[5]=6;
$A[6]=7;
$A[7]=8;
$A[8]=9;
$A[9]=10;
foreach($A as $value){
    echo $value .",";
  
}
echo "<br>"; 
echo(array_sum($A));
echo "<br>"; 
echo(var_dump($A));
echo "<br>";
$FUN=array("john",'kabanda','kigali','kicukiro','gakenke');
echo(var_dump($FUN));
echo "<br>";
$name="Daniella";
echo(var_dump($name));
echo "<br>";
echo(print_r($A));
echo"<br>";
$sum=0;
$i=0;
//  do{
//     $sum=$A[$i]+$sum;
//     $i++;
//  }while($i<=9);
// echo($sum);
//  echo"<br>";
//  echo"i will be just fine.";
// foreach($A as $value){
//     $sum=$sum+$A[$i];
//     $i++;
// }
// echo $sum;
for($i=0;$i<=9;$i++){
    $sum=$sum+$A[$i];
}
echo $sum;
?>