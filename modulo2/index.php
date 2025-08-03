<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 2</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body class="container bg-dark text-white">

    <h1>Ejercicios con Arrays</h1>
    <h4>1. Almacene el un array los 10 primeros números pares. Imprímelos cada uno en una línea.</h4>
    <p>Solución</p>
    <?php
    $cont = 0;
    $conPares = 0;
    $pares = array();
    while ($conPares < 10) {
        if ($cont % 2 == 0) {
            array_push($pares, $cont);
            $conPares++;
        }
        $cont++;
    }
    foreach ($pares as $i => $num) {
        echo ($i + 1) . ". $num<br>";
    }
    ?>
    <h4>2.Imprime el siguiente array usando la estructura cíclica foreach:</h4>
    $arrayName[4] = 80; <br>
    $arrayName[9] = “Hola”; <br>
    $arrayName[22] = 99; <br>
    $arrayName[156] = “Mundo;
    <p>Solución</p>
    <?php
    $arrayName[4] = 80;
    $arrayName[9] = "Hola";
    $arrayName[22] = 99;
    $arrayName[156] = "Mundo";
    foreach ($arrayName as $key => $value) {
        echo "\$arrayName [$key] = $value<br>";
    }

    ?>
    <h4>3. Crear un array asociativo para los siguientes datos:</h4>
    Nombre: Juan Orozco<br>
    Dirección: Crra 48 A # 22<br>
    Teléfono: 3215489621<br>
    <p>Solución</p>
    <?php
    $datos = [];
    array_push($datos, ["Nombre" => "Juan Orozco", "Dirección" => "Crra 48 A # 22", "Teléfono" => "3215489621"]);
    array_push($datos, ["Nombre" => "Fabian Vargas", "Dirección" => "Cll 16 D 20 70", "Teléfono" => "3003709431"]);

    foreach ($datos as $value) {
        foreach ($value as $k => $v) {
            echo "<b>$k:</b> $v<br>";
        }
        echo "<br>";
        // echo "$key: $value<br>";
    }
    ?>
    <h4>4.Desarrollar un programa que dado un array de números enteros entre 0 – 50, hallar el número mayor almacenado: Puedes utilizar variables auxiliares.</h4>
    <p>Solución</p>
    <?php
    $numeros = array();
    $mayor = 0;
    for ($i = 0; $i < 10; $i++) {
        $random = rand(0, 50);
        if ($random > $mayor) $mayor = $random;
        array_push($numeros, $random);
    }
    echo "Hay 10 numeros<br>";
    foreach ($numeros as $key => $value) {
        $str = " <- este es el numero mayor</b>";
        echo ($key + 1) . ". " . ($value == $mayor ? "<b>[ $value ] $str</br>" : "$value<br>");
    }
    ?>
    <h4>5.Desarrollar un programa que por medio de un array de tipo float permita almacenar el peso de 5 personas para posteriormente:</h4>
    <ul>
        <li>Determinar el promedio del peso de las 5 personas.</li>
        <li>Determinar cuántas personas superar el promedio del peso.</li>
        <li>Determinar cuántas personas son inferiores al promedio del peso</li>
    </ul>
    <p>Solución</p>
    <?php
    $pesos = array();
    array_push($pesos, 55.4, 57.3, 77.16, 54.5, 67.1);
    $c = 1;
    $suma = $prom = $menor = $mayor = 0;
    foreach ($pesos as $p) {
        echo ($c++) . ". $p<br>";
        $suma += $p;
    }
    $prom = $suma / count($pesos);
    echo "El promedio de pesos es: $prom<br>";
    foreach ($pesos as $p) {
        if ($p < $prom) {
            $menor++;
        }
        if ($p > $prom) {
            $mayor++;
        }
    }
    echo "Hay $menor personas por debajo del promedio.<br>";
    echo "Hay $mayor personas que superan el promedio.";
    ?>
    <h4>6.Desarrollar un programa que dados dos grupos (Grupo A – Grupo B) cada uno con 10 estudiantes y una nota final de la materia por estudiante, determinar:</h4>
    <ul>
        <li>El promedio general de cada grupo.</li>
        <li>El promedio general de ambos grupos.</li>
        <li>El grupo con mejor promedio.</li>
    </ul>
    <p>Solución</p>
    <?php
    $grupoA = array();
    $grupoB = array();
    for ($i = 1; $i <= 10; $i++) {
        $nota = rand(0.0, 5.0);
        array_push($grupoA, ["EstudianteA" . $i, $nota]);
        $nota = rand(0.0, 5.0);
        array_push($grupoB, ["EstudianteB" . $i, $nota]);
    }
    function mostrar_Array($arr)
    {
        $sum = $prom = 0;
        foreach ($arr as $e) {
            foreach ($e as $k => $v) {
                echo ($k == 1 ? "Nota: " : "") . $v . "<br>";
                ($k == 1 ? $sum += $v : "");
            }
        }
        return $sum / count($arr);
    }
    echo "<br><h3>Grupo A</h3><br>";
    $sum1 = $prom1 = $sum2 = $prom2 = 0;
    $prom1 = mostrar_Array($grupoA);
    echo "<br><h3>Grupo B</h3><br>";
    $prom2 = mostrar_Array($grupoB);
    echo "Promedio del Grupo A es: $prom1<br>";
    echo "Promedio del Grupo B es: $prom2<br>";
    echo "El promedio general es " . (($prom1 + $prom2) / 2) . "<br>";
    echo "El grupo con mejor promedio es el grupo " . ($prom1 > $prom2 ? "A" : "B");
    ?>
    <h4>7.Desarrollar un programa que, dada una palabra, divida todos sus caracteres y los almacene en las posiciones de un array del tamaño de la palabra, por ejemplo: “Colombia”, tiene 8 palabras, por ende, el array debe ser de tamaño 8.</h4>
    <p>Solución</p>
    <?php
    $palabra = "Colombia";
    $arrPalabra = array();
    for ($i = 0; $i < strlen($palabra); $i++) {
        array_push($arrPalabra, $palabra[$i]);
    }
    foreach ($arrPalabra as $key => $letra) {
        echo $letra . "<br>";
    }
    print_r($arrPalabra);
    echo "Array de " . count($arrPalabra) . " Posiciones";
    ?>
    <script src="modulo2.js"></script>
</body>

</html>