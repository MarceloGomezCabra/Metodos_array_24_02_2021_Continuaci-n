<?php
// Más métodos de array


// array_keys (Nos entrega items de un array.)

$array = (array) ["Miguel","Marcelo", "monica", "Walter", "Juan", "Monica"];
$res = array_keys($array);
// No tiene método abreviado
print_r($array);
echo "<br>";
print_r($res);


// array_keys($array, "", false) (Busca un dato en el array igual al indicado en el argumento.)

$array = (array) ["Miguel","Marcelo",5, "monica", "Walter", "Juan", "Monica", "5"];
$res = array_keys($array, "5", false);
$res = array_keys($array, "5");  // método abreviado
print_r($array);
echo "<br>";
print_r($res);


// array_keys($array, "", true) (Busca un dato en el array idéntico al indicado en el parámetro.)

$array = (array) ["Miguel","Marcelo", "monica", "Walter", "Juan", "Monica"];
$res = array_keys($array, "Marcelo", true);
//no tine método abreviado
print_r($array);
echo "<br>";
print_r($res);


// array_search (?)

$array = (array) ["Miguel","Marcelo", "monica", "Walter", "Juan", "Monica"];
$res = array_search("Miguel", $array, true);
//no tine método abreviado
print_r($array);
echo "<br>";
print_r($res);


// array_fill (?)

$array = (array) ["Miguel","Marcelo", "monica", "Walter", "Juan", "Monica"];
$res = (array) array_fill(0,5,null);
//no tine método abreviado
print_r($array);
echo "<br>";
print_r($res);


//array_pad (?)

$array = (array) ["Miguel","Marcelo", "monica", "Walter", "Juan", "Monica"];
array_pad($array, 5,null);
//no tine método abreviado
print_r($array);
echo "<br>";
print_r($res);


/* array_combine (Crea un array asociativo siempre y cuando los dos array
contengan igual cantidad de elementos, de lo contrario generará un error. */

$array = (array) ["Miguel","Marcelo", "monica", "Walter"];
$array1 = (array) ["perrito", "vaca", "oso", "pato"];
$res = array_combine($array , $array1); // (key, value)
//no tine método abreviado
print_r($array);
echo "<br>";
print_r($res);


// array_column

header('Content-Type: application/json');
$array = (array) [
    array(
        "CC" => 123456789,
        "Nombre" => "Miguel Angel",
        "Edad" => 23,
        "Estado_civil" => false,
        "Salud" => array(
            "NIT" => 123,
            "Nombre" => "Coosalud"
        ),
    ),
    array(
        "CC" => 8686,
        "Nombre" => "Thomas Perez",
        "Edad" => 15,
        "Estado_civil" => true,
        "Salud" => array(
            "NIT" => 456,
            "Nombre" => "Cafesalud"
        ),
        
    ),
    array(
        "CC" => 4868486,
        "Nombre" => "Juan Carlos",
        "Edad" => 25,
        "Estado_civil" => true,
        "Salud" => array(
            "NIT" => 798,
            "Nombre" => "Sanitas"
        ),
    ),
    array(
        "CC" => 86486,
        "Nombre" => "Claudia Milena",
        "Edad" => 20,
        "Estado_civil" => false,
        "Salud" => array(
            "NIT" => 753,
            "Nombre" => "EPS"
        ),
    ),
    array(
        "CC" => 486486745,
        "Nombre" => "Marcelo Gomez",
        "Edad" => 20,
        "Estado_civil" => false,
        "Salud" => array(
            "NIT" => 159,
            "Nombre" => "Comeva"
        ),
    ),
];

$nit = array_column(
            array_column(
                $array, "Salud"
            ),
        "NIT"
    );
foreach ($array as $key => $value) {
    unset($array[$key]["Salud"]);
}
$res = array_combine($nit, $array);




print_r($array);
// echo "<br><br><br><br>";
print_r($res);










?>