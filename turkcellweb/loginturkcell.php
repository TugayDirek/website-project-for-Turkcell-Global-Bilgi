<html>
<head>


<style>

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button ,input[type=submit]{
    background-color: #ffff66;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#background {
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

</style>
    <link rel="icon" href="turkcell-logo.png">

<meta HTTP-EQUIV="Content-type" VALUE="text/html; charset=utf-8" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>
<body>


<div id="background"></div>
<br><br>
<br><br>

<div id="Register" style="border-radius:200px;background-color:#1a75ff; width:350px; overflow:hidden; z-index:-1; height:350px; position:static; margin:auto " >
<br>
     <center> <h2>Giriş Yapın</h2></center>
	 
	 <form id="start">

     <center> <input id="takeUserName" type="text" placeholder="İsim Girin" name="takeUserName" style="border-radius:10px;text-align:center;width:70%" required></center>
      <center><input id="takePassword" type="password" placeholder="Şifre Girin" name="takePassword" style="border-radius:10px;text-align:center;width:70%" required></center><br>
    <center><input  type="submit" style="font-weight:bold;border-radius:10px;width:auto;display:block;" value="Giriş"></center>
    </form>
</div>

<script>


$("form#start").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($('#start')[0]);
 
  $.ajax({
    url: 'loginturkcell2.php',
    type: 'POST',
    data: formData,
   // async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      //alert(returndata);
	       if(returndata.includes(".php")){
    window.location = returndata;
		}else{
				  //document.getElementById("popUpBox").innerHTML = returndata;

			
			alert(returndata);
		}
	  //window.location = "resultbio.php";
	 //document.getElementById("sample").innerHTML = returndata;
	       //alert(returndata);

    }
  });
 
  return false;
});


</script>

</body>
</html>