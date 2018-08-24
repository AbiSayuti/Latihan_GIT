<?php

	session_start();
	$name = "";
	$brand = "";
	$price = "";
	$condition = "";
	$store = "";
	$id = "";
	$edit_state = false;
	$update_state = false;
	$delete_state = false;

	//Connect to Database
	//Make a variable connection
	//1. nama ip / pengganti ip / domain . 2. superuser . 3. password .  4. nama database yang ingin di connect kan 
	$db = mysqli_connect('localhost', 'root', '', 'ollshop');
	$dbh = new PDO ("mysql:host=localhost;dbname=ollshop", "root", "");


	$results = mysqli_query($db, "SELECT * FROM unbrandedStore");


?>