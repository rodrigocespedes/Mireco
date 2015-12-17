<?php
$response = array();
require_once __DIR__ . '/c_dbconect.php';
$db = new DB_CONNECT();
$users = mysql_query("SELECT * FROM type") or die(mysql_error());
	$a = array();
	$b = array();
    if ($users != false){
        $no_of_users = mysql_num_rows($users);
		while ($row = mysql_fetch_array($users)) {		
			$b["typ_code"] = $row["typ_code"];
			$b["typ_name"] = $row["typ_name"];
			$b["typ_description"] = $row["typ_description"];
			array_push($a,$b);
		}
		echo json_encode($a);
		}
?>
