<?php
include_once("dbconnect.php");

$db = new DBConnect();

if(isset($_GET['item_id'])
{
	
}
	
function getItem($itemID)
{
	
}

function getAllItems()
{
	$conn = $db->connect();
	$sql = "SELECT * FROM item";
	$stmt = $con->query($sql);
	print_r( $stmt->fetchAll(PDO::FETCH_NUM) );
}

?>