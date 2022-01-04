<?php
// include("../config.php");
$db = mysqli_connect('localhost', 'root', '', 'inventory');
 if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


if (isset($_GET['id'])){
	$id = $_GET['id'];
	$retrive = "DELETE FROM customer_order WHERE order_id = $id";

	if (mysqli_query($db, $retrive)) {
	    echo "Record deleted successfully";
	    header("location:customerorder.php");
	} else {
	    echo "Error deleting record: " . mysqli_error($db);
	}
}
?>


