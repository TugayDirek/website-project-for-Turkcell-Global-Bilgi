<?php

session_start();

if(!isset($_SESSION['isim'])){
echo "<html><head>    <link rel='icon' href='turkcell-logo.png'></head><body>
<center ><div style='position:relative;top:230px;'><h2>Giriş Yap!!!</h2>
 <a href='loginturkcell.php'><input  style='background-color: #669900;
    border: none;
    color: white;
    padding: 18px;
	width:650px;
	height:80px:
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	   cursor:pointer;
    margin: 10px 1px 4px 1px;
	margin-right:75px;
	margin-left:75px;
	' onclick='' id='' type='button' value='Giriş Sayfasına Dön...'  class='btn btn-info btn-lg' data-toggle='modal'></a>
</div></center></body></html>";
session_destroy();
die();
}


?>



<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="turkcell-logo.png">

<style> 
input[type=text] {
    width: 20%;
    padding: 2px 5px;
    margin: 8px 0;
    box-sizing: border-box;
}


/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.button {
background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 10px 1px 4px 1px;
	margin-right:75px;
	margin-left:75px;
	border-radius:10px;
}





.navbar {
  overflow: hidden;
  background-color: #00cc66;
  position: fixed;
  top: 0;
  left:0;
  width: 100%;
  padding:0;
  margin:0;
  z-index: 1;

}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

#background {
    position: fixed;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('kulaklık.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 41%;
    opacity: 0.70;
	z-index:-1;
    filter:alpha(opacity=80);
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  
  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/i18n/jquery-ui-timepicker-tr.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">

	
	
	
	
	

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  
  
   <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>-->
 <!-- 
    <link rel="icon" href="kroo.jpg">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

-->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
 -->
 <script>
 function loadPage(){
 
  //disable the default form submission
  //event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($('#searchbox')[0]);
 
  $.ajax({
    url: 'formdata2tar.php',
    type: 'POST',
    data: formData,
   // async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      //alert(returndata);
	      // $('#uploaded_image').html(returndata);
             //window.location = returndata;
             if(returndata.includes(".php")){
    window.location = returndata;
		}else{
			//alert(returndata);
		}
    }
  });
 
  return false;
}
 
 $( function() {
 
 $( "#tarih" ).datepicker({
 
 dateFormat: "dd-mm-yy",
 altFormat: "yy-mm-dd",
 altField:"#tarih-db",
 monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
 dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
 firstDay:1
});
 
 } );
 

 
 </script>
<script>
 loadPage();
</script>
 
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 -->
<meta HTTP-EQUIV="Content-type" VALUE="text/html; charset=utf-8" />
</head>
<body  style="margin:0;padding:0;">


<div id="background"></div>

<div class="navbar" style="padding:15px;opacity:0.8;">

  <form id="searchbox" style="margin:0px;padding:0px;"> 
  <center>
<center style="display:inline;margin:0px;padding:0px;"> <input style="border-radius:15px;border:none;height:30px;width:300px;margin:0px;padding:0px;" type="text" id="searchbar" name="searchbar" placeholder=" sicil, isim veya tarih ile ara"></center>

<button id="search" style="position:fixed;right:40%;border-radius:15px;border:none;height:30px;margin-right:5px;padding-right:5px;" type="submit"><i style="border:none;margin:10px 10px;padding:0px;display:inline;" class="fa fa-search"></i></button>
 <input  onclick="logOut();" id="" type="button" value="Çıkış" style="padding:5px;font-size:15px;background-color:red;float:right;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"/>

</center>
</form>
</div>


<div style="text-align:center;padding-left:100px;width:90%;height:20%;">
<center><h2>Kulaklık Kayıt Sistemi</h2></center>
<br><br>


<form id="Send">



Sicil : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <input type="text" name="sicil"><br>
  İsim-Soyisim:&nbsp &nbsp &nbsp &nbsp 
  <input type="text" name="isim"><br>
  
  
   
  
  Tarih :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <input id="tarih" type="text" name="tarih"></br>
 <input type="text" id="tarih-db" style="display:none;"><!-- type="hidden" olması daha iyi olurdu. -->

  Lokasyon :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <!--<input type="text" name="lokasyon">-->
   <select  style="width:175px;width: 20%;
    padding: 4px 7px;
    margin: 4px 0;
    box-sizing: border-box;" name="lokasyon">
  <option value="izmir">İzmir</option>
  <option value="izmir ışıkkent">İzmir Işıkkent</option>
  

</select><br>
  Kulaklık Markası:
  <select  style="width:175px;width: 20%;
    padding: 4px 7px;
    margin: 4px 0;
    box-sizing: border-box;" name="kulaklikMarkasi">
  <option value="sony">Sony</option>
  <option value="jabra">Jabra</option>
  <option value="platronix">Platronix</option>

</select><br><br><br>
  
  <p style="display:inline;font-weight:bold;">Teslim Nedeni:</p> &nbsp &nbsp 
  
  
  <select  style="width:175px;width: 20%;
    padding: 4px 7px;
    margin: 4px 0;
    box-sizing: border-box;" name="teslimNedeni">
  <option value="Arizali">Arızalı</option>
  <option value="Gecici Zimmet">Geçici Zimmet</option>
  <option value="iade">İade</option>
  <option value="ise Giris">İşe Giriş</option>
    <option value="isten cıkıs">İşten Çıkış</option>

	  <option value="Kırık">Kırık</option>

	    <option value="Kayıp">Kayıp</option>

</select>
 <!--   <center>
<div style="width:175px;height:50px;">
  
</div></center>-->
<br>
  İşlem Yapan:&nbsp &nbsp &nbsp  &nbsp 
  <select  style="width:175px;width: 20%;
    padding: 4px 7px;
    margin: 4px 0;
    box-sizing: border-box;" name="islemYapan">
  <option value="hasanözyavuz">Hasan Özyavuz</option>
  <option value="bülentkarataş">Bülent Karataş</option>
  

</select><br>
  
  Eski Seri No :&nbsp &nbsp &nbsp 
  <input type="text" name="eskiSeriNo"><br>
  Yeni Seri No :&nbsp &nbsp &nbsp 
  <input type="text" name="yeniSeriNo"><br>
  
  
 
<div class="container" style="margin-top:23px;">
  <!-- Trigger the modal with a button <button type="button" >Open Modal</button>-->
  
 <input  onclick="" id="" type="submit" value="Gönder"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"/>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Uyarı</h4>
        </div>
        <div class="modal-body">
          <p id="popUpBox"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</form>
</div>






<script>



function logOut(){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($('#start')[0]);
 
  $.ajax({
    url: 'logOut.php',
    type: 'POST',
    data: formData,
   // async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      //alert(returndata);
	    //   $('#uploaded_image').html(returndata);
window.location="loginturkcell.php";
    }
  });
 
  return false;
}


$("form#Send").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($('#Send')[0]);
 
  $.ajax({
    url: 'turkcellweb2.php',
    type: 'POST',
    data: formData,
   // async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      //alert(returndata);
	  document.getElementById("popUpBox").innerHTML = returndata;
	  //window.location = "resultbio.php";
	 //document.getElementById("sample").innerHTML = returndata;
	       //alert(returndata);

    }
  });
 
  return false;
});


$("form#searchbox").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($('#searchbox')[0]);
 
  $.ajax({
    url: 'turkcellweb3.php',
    type: 'POST',
    data: formData,
   // async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      //alert(returndata);
	  document.getElementById("popUpBox").innerHTML = returndata;
	  window.location = "turkcellweb4.php";
	 //document.getElementById("sample").innerHTML = returndata;
	       //alert(returndata);

    }
  });
 
  return false;
});
//////////////////////////////select box



var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);










////////////////////////////select box


</script>
</body>


</html>
