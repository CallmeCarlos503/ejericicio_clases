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
    $Alumno=[
        1=>[4],
        2=>[10],
        3=>[8],
        4=>[9],
        5=>[5],
        6=>[7],
        7=>[5],
        8=>[4],
        9=>[3],
        10=>[2],
    ];
    foreach ($Alumno as $key => $value) {
         echo $value;
         echo"<br>";
    }

    ?>
    
</body>
</html>