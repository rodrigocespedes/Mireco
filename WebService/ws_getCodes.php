<?php
$response = array();
require_once __DIR__ . '/c_dbconect.php';
$db = new DB_CONNECT();
$users = mysql_query("SELECT * FROM code") or die(mysql_error());
	$a = array();
	$b = array();
    if ($users != false){
        $no_of_users = mysql_num_rows($users);
		while ($row = mysql_fetch_array($users)) {		
			$b["cod_code"] = $row["cod_code"];
			$b["cod_name"] = $row["cod_name"];
			$b["cod_type"] = $row["cod_type"];
			array_push($a,$b);
		}
		echo json_encode($a);
		}
?>
