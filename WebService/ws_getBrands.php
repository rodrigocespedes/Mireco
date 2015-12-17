<?php
$response = array();
require_once __DIR__ . '/c_dbconect.php';
$db = new DB_CONNECT();
$users = mysql_query("SELECT * FROM brand") or die(mysql_error());
	$a = array();
	$b = array();
    if ($users != false){
        $no_of_users = mysql_num_rows($users);
		while ($row = mysql_fetch_array($users)) {		
			$b["bra_code"] = $row["bra_code"];
			$b["bra_name"] = $row["bra_name"];
			$b["bra_country"] = $row["bra_country"];
			array_push($a,$b);
		}
		echo json_encode($a);
		}
?>
