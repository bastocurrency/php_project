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
	border:hidden;
	width: 100%;
	height: 500px;
	margin: 
}	

.content{
	border: 2px solid white;
	width: 50%;
	height: 400px;
	margin-top:20px; 
	margin-left: 28%;
}	

form{
	margin-left: 20px;
}
</style>

</head>
<body>
	<nav class="topnav" id="mytopnav">
		<ul>
			<li><a href="home.php" >Home</a></li>
			<li><a href="gallery.php" >Gallery</a></li>
			<li><a href="upload_picture.php" class="active">Upload your picture</a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li><a href="javascript:void(0);" class="icon" onclick="myFunction()"></a></li>
		</ul>
	</nav>
<div class="main">
	<div class="content">
	<form>
		Full Name<br><input type="text" name="" size="55"><p></p>
		Username<br><input type="text" name="" size="55"><p></p>
		<input type="file" name="file" value="file"><p></p>
		<textarea placeholder="Description of the image....." cols="49" rows="8"></textarea><p></p>
		<input type="submit" name="Upload" value="Upload"><P></P>
	</form>
	</div>
</div>


</body>
</html>