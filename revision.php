<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border=2 >
    <?php
    $x=0;
    for($y=1;$y<=10;$y++){
        $x=$y;
        echo("<tr>");
        for($z=1;$z<=10;$z++){
            $product=$x*$z;
            echo "<td>$product</td>";
        }
        echo "</tr>";
    }
     for($i=1;$i<=6;$i++){
        for($j=1;$j<=3;$j++){
            if(($i==1 and($j>=2 and $j<=3)) or($i==2 and $j==1) or ($i==3 and ($j>=1 and $j<=2)) or($i==4 and $j==3 ) or($i==5 and $j==3 )or($i==6 and($j>=1 and$j<=2))){
                echo "*";
            } 
                else{
                    echo "&nbsp;&nbsp";
            }
           
            }
          echo "<br>"; 
          echo "&nbsp;&nbsp";
        }
    
    ?>
    <?php
    for($i=1;$i<8;$i++){
        for($j=$i;$j<8;$j++)
        echo"&nbsp;&nbsp";
       for($j=2*$i-1;$j>0;$j--)
       echo("&nbsp;*");
       echo'<br>';

    }
    $n=8;
    for($i=8;$i>0;$i--){
        for($j=$n-$i;$j>0;$j--)
        echo "&nbsp;&nbsp;";
        for($j=2*$i-1;$j>0;$j++)
        echo("&nbsp;*");
        echo'<br>';
    }
  ?>
     
    </table>
</body>
</html>