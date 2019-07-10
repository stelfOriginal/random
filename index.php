<?php

// require_once 'vendor/autoload.php';
// use models\{Conexion};
// $rand = new Conexion('localhost', 'root', '', 'random');

$personas = [
    'Fran' ,
    'Jaume' ,
    'Jose' ,
    'Lolo' ,
    'Adrian' ,
    'Julia' ,
    'Jorge' ,
    'Cristian' ,
    'Mateo' ,
    'Alexis' ,
    'Petro' ,
    'Alejandro' ,
    'Jordi' ,
    'Toni' ,
    'David' ,
    'Luis' 
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