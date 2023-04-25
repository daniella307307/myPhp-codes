<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function addfive($num){
        $num+=5;
      }
      function addsix($num){
        $num+=6;
      }
      $originalNum=10;
      addfive($originalNum);
      echo "the original value". $originalNum ." <br>";
      addsix($originalNum);
      echo "the original value". $originalNum ." <br>";
    ?>
</body>
</html>