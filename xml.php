<?php 
require("dp.php");

function parseToXML($htmlStr){
    $xmlStr=str_replace('<', '&lt;', $htmlStr);
    $xmlStr=str_replace('>', '&gt;', $xmlStr);  // Corregir el nombre de la variable aquí
    $xmlStr=str_replace('"', '&quot;', $xmlStr);
    $xmlStr=str_replace("'", '&#39;', $xmlStr);
    $xmlStr=str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;  // Devolver el resultado
}

$query = "SELECT * FROM sucursales;";
$result = mysqli_query($conn, $query);

if(!$result){
    die('Invalid query: ' . mysqli_error($conn));  // Proporcionar el enlace a la conexión $conn
}

header("Content_type: text/xml");
echo "<?xml version='1.0'?>";
echo '<markers>';
$ind=0;

while ($row = mysqli_fetch_assoc($result)){
    echo '<marker ';
    echo 'idSucursales="' . $row['idSucursales'] . '"';
    echo 'Nombre="' . $row['Nombre'] . '"';
    echo 'Direccion="' . parseToXML($row['Direccion']) . '"';
    echo 'Latitud="' . $row['Latitud'] . '"';
    echo 'Longitud="' . $row['Longitud'] . '"';
    echo '/>';
    $ind = $ind + 1;
} 

echo '</markers>';
?>
