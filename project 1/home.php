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

.content{
	border: 2px solid white;
	width: 45%;
	height: 540px;
	margin-top: 30px;
	margin-left: 28%;
}

.wrapper{
 border:hidden;
 width: 100%;
 height: 900px;
}	

form{
	margin-left: 30px;
}

.login{
	border: 2px solid white;
	width: 45%;
	height: 280px;
	margin-left: 28%;
	margin-top: 10px;
}

h1{
	margin-top: 10px;
	text-align: center;
}
.login form{
	font-size: 20px;
	font-weight: bold;
}

.login-btn{
	width: 70px;
}

</style>
</head>
<body>
	<nav class="topnav" id="mytopnav">
		<ul>
			<li><a href="" class="active">Home</a></li>
			<li><a href="gallery.php" >Gallery</a></li>
			<li><a href="upload_picture.php">Upload your picture</a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li><a href="javascript:void(0);" class="icon" onclick="myFunction()"></a></li>
		</ul>
	</nav>
	<div class="wrapper">
	<div class="content">
<form action=""  method="">
			Full Name<br><input type="text" name="fullname" size="55"><p></p>
			Username<br><input type="text" name="username" size="55"><p></p>
			E-mail<br><input type="email" name="email" size="55"><p></p>
			Phone No<br><input type="text" name="phone_no" size="55"><p></p>
			<label>Select Your Gender</label><p></p>
			<select>
			<option>Male</option>
			<option>Female</option>
			</select><p></p>
			Date Of Birth<br><input type="date" name="date_of_birth"><p></p>
			Password<br><input type="password" name="password" size="55"><p></p>
			Confirm Password<br><input type="password" name="confirm_password" size="55"><p></p>
			<input type="submit" name="submit" value="Register Me">
</form>
</div>
<div class="login">
	<h1>
		LOG IN
	</h1>
	<br>
	<form>
	Username<br><input type="" name="" size="55"><p></p>
	Password<br><input type="" name="" size="55"><p></p>
	<input type="submit" name="submit" value="login" class="login-btn">
</form>
</div>
</div>
</body>
</html>


