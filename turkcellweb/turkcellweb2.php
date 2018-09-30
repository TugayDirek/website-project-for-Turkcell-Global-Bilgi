<?php
//header('Content-type: text/html; charset=utf-8');

if(isset($_POST['sicil'])){
$sicil = $_POST['sicil'];

}

if(isset($_POST['isim'])){
$isim = $_POST['isim'];

}

if(isset($_POST['tarih'])){
$tarih = $_POST['tarih'];

}
if(isset($_POST['lokasyon'])){
$lokasyon = $_POST['lokasyon'];

}
if(isset($_POST['kulaklikMarkasi'])){
$kulaklikMarkasi = $_POST['kulaklikMarkasi'];

}
if(isset($_POST['teslimNedeni'])){
$teslimNedeni = $_POST['teslimNedeni'];

}
if(isset($_POST['islemYapan'])){
$islemYapan = $_POST['islemYapan'];

}
if(isset($_POST['eskiSeriNo'])){
$eskiSeriNo = $_POST['eskiSeriNo'];

}
if(isset($_POST['yeniSeriNo'])){
$yeniSeriNo = $_POST['yeniSeriNo'];

}

//ECHO $sicil."  +".$isim."  +".$tarih."  +".$lokasyon."  +".$kulaklikMarkasi."  +".$teslimNedeni."  +".$islemYapan."  +".$eskiSeriNo."  +".$yeniSeriNo."  +";

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
$table = "kullanicilar";
if($dbselect){
}
mysqli_query($connection,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
($connection,"utf8");

if ((!empty($sicil)) && (!empty($isim))&& (!empty($tarih))&& (!empty($lokasyon))&& (!empty($kulaklikMarkasi))&& (!empty($teslimNedeni))&& (!empty($islemYapan))&& (!empty($eskiSeriNo))&& (!empty($yeniSeriNo))){

$result = mysqli_query($connection,"SELECT * FROM $table WHERE isim= '$isim' OR sicil='$sicil'");

if(mysqli_num_rows($result)==0){

$finalResult = mysqli_query($connection,"INSERT INTO `kullanicilar`( `sicil`,`isim`,`tarih`,`lokasyon`, `kulaklikMarkasi`, `teslimNedeni`, `islemYapan`, `eskiSeriNo`, `yeniSeriNo`) VALUES (  '".$sicil." ', '".$isim." ', '".$tarih." ', '".$lokasyon." ', ' ".$kulaklikMarkasi." ', ' ".$teslimNedeni." ', ' ".$islemYapan." ', '".$eskiSeriNo."', ' ".$yeniSeriNo. "');");//)

if($finalResult){
	 echo "Başarılı bir şekilde kaydedildi.";
}

}else{
	echo "isim ve\\veya sicil kullanılıyor!!!";
}
}else{
	echo  "Tüm alanları doldurun!!!";
}




?>