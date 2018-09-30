<?php

session_start();
//session_destroy();
//session_destroy();
//$imagetable= $_SESSION['username'];



if(isset($_SESSION['isim'])){
     $isim= $_SESSION['isim'];
	// $hashResult =  hash('sha256',$email);
echo "logged in";
}
if(!isset($_SESSION['isim'])){
	//session_destroy();
	echo 'nopage.php';
	die();
}

?>