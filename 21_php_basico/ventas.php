<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .producto { margin-bottom: 15px; }
        .titulo { font-weight: bold; font-size: 1.2em; }
        .total { color: green; font-weight: bold; font-size: 1.5em; }
    </style>
</head>
<body>
    <h1>Inventario</h1>
    <?php 
        include 'functions.php';
        $productos = obtenerProductos();
    ?>

    <div>
        <h2>Lista de productos</h2>
        <?php foreach($productos as $codigo => $detalles) : ?>
        <div class="producto">
            <span class="titulo">Código: </span> <?php echo $codigo; ?><br>
            <span class="titulo">Nombre: </span> <?php echo $detalles["nombre"]; ?><br>
            <span class="titulo">Precio: </span> $<?php echo number_format($detalles["precio"], 2); ?><br>
            <span class="titulo">Stock: </span> <?php echo $detalles["stock"]; ?><br>
        </div>
        <?php endforeach; ?>
        </div>

        <?php $costoTotal = calcularCostoTotal($productos); ?>

        <div>
            <h2 class="total">Costo total de inventario (con impuesto): </h2>
            <p>El costo total de todos los productos es: $<?php echo number_format($costoTotal, 2); ?>

        </div>
    </div>
</body>
</html>