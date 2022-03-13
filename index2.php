<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <?php

    $matriz = array(
        "Juan" => 5,
        "Carlos" => 10,
        "Bodoque" => 8,
        "Mendoza" => 9,
        "Gutierrez" => 5,
        "Johny" => 7,
        "Alejandrita" => 5,
        "Juan" => 4,
        "Maluma" => 3,
        "badbunny" => 2
    );
    print "<pre>\n"; print_r($matriz); print "</pre>\n";

    $acumulo = 0;
    $Mayor = 0;
    $menor = 1000;
    $alumno;
    $alumnoM;
    foreach ($matriz as $llave => $eva) {
        echo "Alumno: " . $llave . " Posee de nota: " . $eva;
        echo "<br>";
        $acumulo += $eva;
            if ($Mayor < $eva) {
                $Mayor = $eva;
                $alumno = $llave;
            }
            if ($menor > $eva) {
                $menor = $eva;
                $alumnoM = $llave;
            }
    }
    echo "<br>la mayor note fue: " . $Mayor . " del alumno: " . $alumno;
    echo "<br>";
    echo "La menor nota fue: " . $menor . " del alumno: " . $alumnoM;
    echo "<br>";
    echo "Promedio fue: " . $acumulo / 10;
    ?>

</body>

</html>