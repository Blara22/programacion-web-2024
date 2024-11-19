<?php
//Comentario
echo "Hola mundo<br>"; //Comentario
echo "Cómo estás <br>"; #Comentario

/* Comentario en bloque
Otra línea
*/

$nombre = "Brenda";
$edad = 30;
$estaVivo = true;

echo is_int($nombre);
echo "<br>";
echo "Nombre: $nombre Edad: $edad <br>";

define("PI", 3.1416);
echo PI."<br>";

$frutas = array("Manzana", "Pera", "Naranja", 5);
//$frutas[10] = "Plátano";
array_push($frutas, "Limón");
for($i = 0; $i < 11; $i++){
    if(isset($frutas[$i])){
        echo $frutas[$i]."<br>";
    }
}
print_r($frutas);
echo "<br>";

$persona = [
    "nombre" => "Brenda",
    "edad" => 30,
    "profesion" => "Maestra" 
];

foreach ($persona as $key => $value){
    echo "$key:  $value<br>";
}

foreach ($persona as $value){
    echo "$value<br>";
}

function saludar($nombre) {
    return "Hola $nombre";
}

echo saludar("Pablito");

?>