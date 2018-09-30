<?php

session_start();

$searchbar="Eşleşme yok!!!";

if(isset($_POST['searchbar'])){
	$searchbar = $_POST['searchbar'];
}


$_SESSION['result'] =$searchbar;
//echo $_SESSION['result'];
?>