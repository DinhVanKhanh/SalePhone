<?php 
session_start();
// unset($_SESSION['num']);
	if(isset($_POST['num']) && isset($_POST['id'])){
		$quantity = $_POST['num'];
		$id = $_POST['id'];
		$_SESSION['cart'][$id] = $quantity;
		echo $_SESSION['cart'][$id];
		// echo '<pre>';
		// var_dump($_SESSION);
	}
	// else
	// {
	// 	$a = 0;
	// 	echo $a;
	// }
	
?>