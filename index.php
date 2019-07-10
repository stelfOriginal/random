<?php

require_once 'vendor/autoload.php';
use models\{Conexion};
$rand = new Conexion('localhost', 'root', '', 'random');

$personas = [
    'Fran' => 1,
    'Jaume' => 2,
    'Jose' => 3,
    'Lolo' => 4,
    'Adrian' => 5,
    'Julia' => 6,
    'Jorge' => 7,
    'Cristian' => 8,
    'Mateo' => 9,
    'Alexis' => 10,
    'Petro' => 11,
    'Alejandro' => 12,
    'Jordi' => 13,
    'Toni' => 14,
    'David' => 15,
    'Luis' => 16
];

foreach($personas as $valor){
    echo(rand($valor,$valor));
}
?>
<!-- HTML5 --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- links externos -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome -->
</head>

<body>

<!-- HEADER -->
    <header>
        <nav>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </nav>
    </header>

<!-- SECTION -->
<section>
    <article></article>
</section>

<!-- FOOTER -->
<footer>
</footer>

</body>
</html>