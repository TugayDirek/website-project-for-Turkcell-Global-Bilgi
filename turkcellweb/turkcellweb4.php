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
$table = "kullanicilar";
if($dbselect){
//	echo  "dbselect okkk";
}
//mysqli_set_charset($connection,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
mysqli_query($connection,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'");


echo '<html><head>    <link rel="icon" href="turkcell-logo.png">
<style>#background {
    position: fixed;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("turkcell.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 0.50;
	z-index:-1;
    filter:alpha(opacity=80);
}
</style><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><link rel="icon" href="kroo.jpg"></head><body background="kro.png" style="background-size:cover; style="""><div id="background"></div>
';

//print_r($_SESSION['result']);$
if(isset($_SESSION["result"])){
$result0 = $_SESSION["result"];




echo '<h1 align="center">Sonuç</h1><table  align="center" style="border: 1px solid black; font-weight: bold;">';

//echo $result0;
$result = mysqli_query($connection,"SELECT * FROM $table WHERE (isim= '$result0' OR sicil='$result0')  OR tarih='$result0'");
//$_SESSION['result'] =$searchbar;
if(mysqli_num_rows($result)>=1){
	
	
		while($row = mysqli_fetch_array($result)){
			$isim= $row['isim'];$sicil= $row['sicil'];$tarih= $row['tarih'];$lokasyon= $row['lokasyon'];$kulaklikMarkasi= $row['kulaklikMarkasi'];
			$teslimNedeni= $row['teslimNedeni'];$islemYapan= $row['islemYapan'];$eskiSeriNo= $row['eskiSeriNo'];$yeniSeriNo= $row['yeniSeriNo'];
			//echo "result".$isim."result".$sicil."result".$tarih."result".$lokasyon."result".$kulaklikMarkasi."result".$teslimNedeni."result".$islemYapan."result".$eskiSeriNo."result".$yeniSeriNo;
			//$_SESSION['result'] = 

//if(mysqli_num_rows($result)>=1){
echo '<tr>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>İsim</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Sicil</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Tarih</h4></center></td>';
echo '<td style="border: 1px solid black; padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Lokasyon</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Kulaklık Markası</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Teslim Nedeni</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>İşlem Yapan</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Eski Seri No</h4></center></td>';
echo '<td style="border: 1px solid black;padding-top: 15px;text-align: left;padding-left: 5px; padding-right:5px;"><center><h4>Yeni Seri No</h4></center></td>';



echo "<tr>";
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$isim. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$sicil. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$tarih. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$lokasyon. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$kulaklikMarkasi. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$teslimNedeni. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$islemYapan. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$eskiSeriNo. '</center></td>';
	echo '<td style="font-size:15px;border: 1px solid black;padding: 10px;text-align: left;" ><center>'  .$yeniSeriNo. '</center></td>';
echo '</tr>';
echo "</tr>";
///else{
	//echo "<center><h3>Eşleşme Yok</h3></center>";
//	}
	}
	
	}

echo '</table>';




	
}else {
		echo "<center><h3>Arama butonu veya Enter tuşunu kullanın!!!</h3></center>";

}

echo "<center ><div style=''>
 <a href='turkcellweb.php'><input  style='background-color: #669900;
    border: none;
    color: white;
    padding: 12px;
	width:350px;
	height:50px:
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	   cursor:pointer;
    margin: 10px 1px 4px 1px;
	margin-right:75px;
	margin-left:75px;
	' onclick='' id='' type='button' value='Ana Sayfaya Dön...'  class='btn btn-info btn-lg' data-toggle='modal'></a>
</div></center>";
//session_destroy();

?>