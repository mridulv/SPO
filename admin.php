<?php
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'admin')){
session_start();
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.png">
<title>Registration Portal</title>
<style type="text/css">
#header{
	position:fixed;
	margin-top:-10px;
	margin-left:-10px;
	height:35px;
	width:1900px;
	background-color: #000000;
}
.content{
	font-color:#ffffff;
	position:relative;
	margin-right:100px;
	display:inline;
	cursor:pointer;
}
#main-content{
	position:absolute;
	margin-top:30px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:1200px;
	height:800px;
	overflow: auto;
}
#company-content{
	position:absolute;
	margin-top:30px;
	margin-left:900px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:400px;
	height:500px;
	overflow: auto;
	display:inline;
}
.detail-app{
	height:200px;
}
.comp-short{
	border:2px solid #8888ff;
	background-color: #aaaaff;
	padding:10px 10px 10px 10px;
	border-radius: 4px;
	position:relative;
	margin-top:10px;
	height:50px;
	cursor:pointer;
}
#new-pos{
	position:fixed;
	border:2px solid black;
	padding-left: 20px;
	padding-top:20px;
	background-color: #ffffff;
	display:none;
	left:300px;
	top:100px;
	width:800px;
	height:480px;
	z-index: 10;
}
#full{
	z-index: 5;
	position:fixed;
	background-color: #000000;
	margin-left:-20px;
	margin-top:-20px;
	opacity : 0;
	display:none;
	width:1375px;
	height:635px;
}
.close{
	position:absolute;
	right:100px;
	top:50px;
}
</style>	
<script  type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.2.custom.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$("#accordion").accordion();
		$(".comp-detail").tabs();
		var k;
		$(".comp-short").click(function(){
			console.log("p");
			k = $(this).attr('alt');
			console.log(k);
			$("#full").show("fast",function(){
				console.log(k+"ssss");
				$(".comp-detail[alt = "+k+"]").fadeIn(20);
				$(this).animate({'opacity': '0.8'});
			});
		});
		$("#logout").click(function(){
				console.log('popop');
				window.location='logout.php';
		});
		$("#profile_my").click(function(){
				console.log('popop');
				window.location='profile_student.php';
		});
		$(".close").click(function(){
			console.log(k);
			$(".comp-detail[alt = "+k+"]").hide(10,function(){
				$("#full").fadeOut(20,function(){
					$("#full").animate({'opacity': '0.0'});
					console.log("memememe");
				});
			});
		});
	});
</script>
<body>
<div id="header">
	<div class="content" id="logout"><font color="#fff" size="5px">Logout</font></div>
</div>
<div id="main-content">
	<table>
		<tr>
			<td>
				<h4>Register For Student</h4>
			</td>
			<td>
				<h4>Register For Company</h4>
			</td>
			<td>
				<h4>Register For Alumni</h4>
			</td>
		</tr>
		<tr>
		<td style="border:2px solid black;height:400px;">
			<form action="add_student.php" method="post">
				Username : <input type="text" name="user" required="required"/></br>
				Roll No : <input type="text" name="roll" required="required"/></br>
				Password : <input type="password" name="pass" required="required"/></br>
				Confirm Password : <input type="password" name="pass2" required="required"/></br>
				<input type="submit" value="submit" name="submit"/>
			</form>
		</td>
		<td style="border:2px solid black;height:400px;">
			<form action="add_company.php" method="post">
				Username : <input type="text" name="user" required="required"/></br>
				Company Id : <input type="text" name="id" required="required"/></br>
				Company Name : <input type="text" name="com_name" required="required"/></br>
				Office Address : <input type="text" name="office" required="required"/></br>
				Password : <input type="password" name="pass" required="required"/></br>
				Confirm Password : <input type="password" name="pass2" required="required"/></br>
				<input type="submit" value="submit" name="submit"/>
			</form>
		</td>
		<td style="border:2px solid black;height:400px;">
			<form action="add_alumni.php" method="post">
				Username : <input type="text" name="user" required="required"/></br>
				Company Id : <input type="text" name="id" required="required"/></br>
				Password : <input type="password" name="pass" required="required"/></br>
				Confirm Password : <input type="password" name="pass2" required="required"/></br>
				<input type="submit" value="submit" name="submit"/>
			</form>
		</td>
		</tr>
	</table>
</div>
</body>
</html>
<?php
}
else{
header("location: index.php");
}
?>