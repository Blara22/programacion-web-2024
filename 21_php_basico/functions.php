<?php 

define("IMPUESTO", 0.16);

/**
 * Calcula el costo total de un inventario incluyendo el impuesto
 * 
 * @param array $productos Arreglo de productos con claves 'precio' y 'stock'
 * @return double Costo total con impuesto aplicado.
 */
function calcularCostoTotal($productos)
{
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto["precio"] * $producto["stock"];
    }

    return $total + ($total * IMPUESTO);
}

function obtenerProductos()
{
    $productos = [
        "producto1" => [
            "nombre" => "Laptop", 
            "precio" => 15000, 
            "stock" => 3
        ],
        "producto2" => [
            "nombre" => "Tablet",
            "precio" => 7000,
            "stock" => 5
        ],
        "producto3" => [
            "nombre" => "Smartphone", 
            "precio" => 5000, 
            "stock" => 10
        ],
        "producto4" => [
            "nombre" => "Monitor", 
            "precio" => 3000, 
            "stock" => 7
        ]
    ];

    return $productos;
}

?>