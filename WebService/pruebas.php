<?php

require_once __DIR__ . '/c_dbconect.php';
$db = new DB_CONNECT();

$cpro=1003;
$can=1;
        $disminuir = mysql_query("UPDATE `inventario` SET `inv_cant_mayor`= inv_cant_mayor-$can WHERE `inv_procod`='$cpro'");   

?>
