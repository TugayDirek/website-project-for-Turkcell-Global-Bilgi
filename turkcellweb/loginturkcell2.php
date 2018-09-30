<?php



session_start();

$user = "username"; 
$password = "password"; 
$host = "localhost"; 
$dbase = "test"; 

$connection= mysqli_connect($host, $user,$password);

if (!$connection)
{
die ('Could not connect:' . mysqli_error());
}else{
//	echo "db connected";
}
 $dbselect=mysqli_select_db($connection,$dbase);
$table = "turcellprofil";
if($dbselect){
	//echo  "dbselect okkk";
}

if(isset($_POST['takeUserName'])){
$isim = $_POST['takeUserName'];

}

if(isset($_POST['takePassword'])){
$password2 = $_POST['takePassword'];

}
mysqli_query($connection,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'");

//echo $isim.$password2;

if (!empty($password2) && !empty($isim)){

$result = mysqli_query($connection,"SELECT * FROM $table WHERE isim= '$isim' AND sifre= '$password2'");
//mysqli_query($connection,"INSERT INTO `turcellprofil`(`isim`, `sifre`) VALUES ('bülent','bülent')");
if(mysqli_num_rows($result)>=1){
	
	
	$_SESSION['isim'] = $isim;
	echo "turkcellweb.php";
}else{
     echo "yanlış kullanıcı adı/şifre";
}

}else{
	echo "empty";
}

	///echo "empty";

?>