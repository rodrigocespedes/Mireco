<?php
$response = array();
require_once __DIR__ . '/c_dbconect.php';
$db = new DB_CONNECT();
$users = mysql_query("SELECT * FROM user") or die(mysql_error());
	$a = array();
	$b = array();
    if ($users != false){
        $no_of_users = mysql_num_rows($users);
		while ($row = mysql_fetch_array($users)) {		
			$b["use_code"] = $row["use_code"];
			$b["use_firstname"] = $row["use_firstname"];
			$b["use_lastname"] = $row["use_lastname"];
			$b["use_login"] = $row["use_login"];
			$b["use_password"] = $row["use_password"];
			$b["use_phone"] = $row["use_phone"];
			$b["use_rol"] = $row["use_rol"];
			array_push($a,$b);
		}
		echo json_encode($a);
		}
?>
