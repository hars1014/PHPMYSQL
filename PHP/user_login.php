<!doctype html>
<html>
<head>
<link href = "../CSS/loginStyle.css" rel="stylesheet" type="text/css"/>
<link href = "../CSS/800px.css" rel="stylesheet" type="text/css" media= "screen and (max-width: 800px)"/>
<link href = "../CSS/Menu.css" rel="stylesheet" type="text/css"/>
<link href = "../CSS/SideBar.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<title>Nexus In The Hood</title>
<script>
function validate_user()
{
	var check_username = /^[a-zA-Z0-9_]{3,16}$/;
	if(document.getElementById("uname").value == "")
	{
		alert("Please Enter Username");
		document.getElementById("uname").focus();
		return false;
	}
	else if(check_username.test(document.getElementById("uname").value) == false)
	{
		alert('Invalid  username');
		document.getElementById("uname").focus();
		return false;
	}
}
function validate_pass()
{
	var check_pass = /^[a-zA-Z0-9_]{8,10}$/;
	if(document.getElementById("pass").value == "")
	{
		alert("Please Enter Password");
		document.getElementById("pass").focus();
		return false;
	}
	else if(check_pass.test(document.getElementById("pass").value) == false)
	{
		alert("Invalid Password");
		document.getElementById("pass").focus();
		return false;
	}
}
</script>
</head>
<body>

<div id= "Container">
<div id= "Header"> </div>
<div id= "MainBody">
<div id="form1">
<form action="../PHP/login.php" method="POST">
User Name:<br>
<input type="text" name="uname" id="uname" onblur="validate_user()"><br>
Password:<br>
<input type="password" name="pass" id="pass" onblur="validate_pass()"><br><br>
<input type="submit" name="submit" value="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="newuser" value="signup!!"><br>
<p><a href="#"> forgot your password?? </a></p>
</form>
</div>
</div>
</div>
</body>
</html>