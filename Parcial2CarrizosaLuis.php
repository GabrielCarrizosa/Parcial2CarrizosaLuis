<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parcial_2</title>
</head>
<body>
<?php
$carros = [
    ["Carro rojo", 15000],
    ["Carro blanco", 18000],
    ["Carro negro", 20000],
    ["Carro gris", 17000],
    ["Carro naranja", 16000]
];

echo "Arreglo inicial de carros y precios:<br>";
foreach ($carros as $carro) {
    echo "{$carro[0]}: \${$carro[1]}<br>";
}

array_push($carros, ["Carro amarillo", 19000]);
array_push($carros, ["Carro azul", 15500]);

echo "Arreglo después de agregar 2 carros:<br>";
foreach ($carros as $carro) {
    echo "{$carro[0]}: \${$carro[1]}<br>";
}

usort($carros, function($a, $b) {
    return $a[1] <=> $b[1];
});
echo "Arreglo ordenado por precio:<br>";
foreach ($carros as $carro) {
    echo "{$carro[0]}: \${$carro[1]}<br>";
}
?>
</body>
</html>

