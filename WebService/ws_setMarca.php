<?php
$response = array();
require_once __DIR__ . '/c_dbconect.php';
$db = new DB_CONNECT();

$json = $_POST["envioMarcas"];
//Remove Slashes
if (get_magic_quotes_gpc()){
$json = stripslashes($json);
}
//Decode JSON into an Array
$data = json_decode($json);
//Util arrays to create response JSON
$a=array();
$b=array();
//Loop through an Array and insert data read from JSON into MySQL DB
for($i=0; $i<count($data) ; $i++)
{
	$cod=$data[$i]->mar_codigo;
	$nom=$data[$i]->mar_nombre;
	$des=$data[$i]->mar_descripcion;
	$detalle_venta = mysql_query("INSERT INTO marca(mar_codigo, mar_nombre, mar_descripcion) VALUES('$cod','$nom','$des')");
}
echo "Registrado";
?>
