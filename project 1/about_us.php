<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
body,html{
       background:rgba(26,26,26,0.3);
       width: 100%;
}

*{
	box-sizing: border-box;
	padding: ;
	margin: ;
}

nav{
   border: 1px solid black;
   background: #1a1a1a;
   border-radius: 10px;
}

nav li{
	list-style: none;
	display: inline;
}

nav li a{
	padding: 15px 20px;
	text-decoration:none; 
	color: white;
	font-family: verdana;
	font-weight: bold;
}	

a:hover{
	border-bottom: 4px solid rgb(64,230,64);
}

.active{
	background:rgb(64,230,64);
	border-radius: 15px;
}

.main{
    border: 2px hidden black;
    width: 100%;
    height:100%;

}

.our_mission{
	border: 2px solid white;
	width: 80%;
	height: 380px;
	margin-left: 10%;
	margin-top: 20px;
	background-color: white;
}

.leadership{
	border: 2px solid white;
    width: 80%;
	height: 460px;
	margin-left: 10%;
	margin-top: 10px;
	background-color: white;
}

.our_mission h1{
	text-align: center;
	font-size: 35px;

}

.first_paragraph{
	text-align: center;
	font-weight:;
	font-size: 20px;
	font-family:;
}

.second_paragraph{
	text-align: center;
	font-size: 35px;
	font-weight: bold;
	font-family:;
}

.third_paragraph{
	text-align: center;


}

.third_paragraph{
	text-align: center;

}

.fourth_paragraph{
	text-align: center;
}

.firstdiv{
	border: 2px solid black;
	width: 20%;
	height: 200px;
	margin-top:5%;
	margin-left: 15%;
	background-image: url("image1.png");
	background-repeat:no-repeat;
	background-size:cover;
	border-radius: 50%;
}

.seconddiv{
	border: 2px solid black;
	width: 20%;
	height: 200px;
	margin-left: 25%;
	background-image: url("image2.png");
	background-repeat:no-repeat;
	background-size:cover;
	border-radius: 50%;
}

.leadership div{
	display: inline-block;
	border-spacing: 20px;
}
		

	</style>
</head>
<body>
<nav class="topnav" id="mytopnav">
 <ul>
	<li><a href="home.php">Home</a></li>
	<li><a href="gallery.ph">Gallery</a></li>
	<li><a href="upload_picture.php">Upload your picture</a></li>
	<li><a href="" class="active">About Us</a></li>
	<li><a href="contact_us.php">Contact Us</a></li>
	<li><a href="javascript:void(0);" class="icon" onclick="myFunction()"></a></li>
</ul>
</nav>
<div class="main">
	<div class="our_mission">
		<h1>-Our Mission-</h1>
		<p class="first_paragraph">
			To provide the most actionable app store data
		</p>
		<p class="second_paragraph">
			About
		</p>
		<p class="third_paragraph">
			ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
			cillum dolore eu fugiat nulla pariatur. </p>
			<p class="fourth_paragraph"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
			cillum dolore eu fugiat nulla pariatur. </p>	

	</div>
	<div class="leadership">
		<h1 style="text-align: center;">
			Leadership
		</h1>

		<div class="firstdiv"></div>
		<div class="seconddiv"></div><br>
	</div>
	
</div>
</body>
</html>