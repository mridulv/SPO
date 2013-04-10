<?php
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'admin')){
session_start();
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style5.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<title>Registration Portal</title>
<style type="text/css">
#header{
	position:fixed;
	padding:10px 5px 0px 5px;
	height:35px;
	width:1900px;
	background-color: #000000;
	z-index:10;
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
	margin-top:70px;
	margin-left:50px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:1200px;
	height:500px;
	overflow: auto;
	z-index:4;
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
	<div class="btn btn-success">Registration Process</div>
	</br></br>
	<div id="accordion">
	<div class="head-app"><b>For Registering a Student , Register Here</b></div>
	<div class="detail-app">
			<form action="add_student.php" method="post">
				Username : <input type="text" name="user" required="required"/></br>
				Roll No : <input type="text" name="roll" required="required"/></br>
				Password : <input type="password" name="pass" required="required"/></br>
				Confirm Password : <input type="password" name="pass2" required="required"/></br>
				<input class="btn btn-danger" type="submit" value="submit" name="submit"/>
			</form>
	</div>
	<div class="head-app"><b>For Registering a Company , Register Here</b></div>
	<div class="detail-app">
			<form action="add_company.php" method="post">
				Username : <input type="text" name="user" required="required"/></br>
				Company Id : <input type="text" name="id" required="required"/></br>
				Company Name : <input type="text" name="com_name" required="required"/></br>
				Office Address : <input type="text" name="office" required="required"/></br>
				Password : <input type="password" name="pass" required="required"/></br>
				Confirm Password : <input type="password" name="pass2" required="required"/></br>
				<input class="btn btn-danger" type="submit" value="submit" name="submit"/>
			</form>
	</div>
	<div class="head-app"><b>For Registering a Alumni , Register Here</b></div>
	<div class="detail-app">
			<form action="add_alumni.php" method="post">
				Username : <input type="text" name="user" required="required"/></br>
				Company Id : <input type="text" name="id" required="required"/></br>
				Password : <input type="password" name="pass" required="required"/></br>
				Confirm Password : <input type="password" name="pass2" required="required"/></br>
				<input class="btn btn-danger" type="submit" value="submit" name="submit"/>
			</form>
	</div>
	<div class="head-app"><b>For Registering a Faculty-Supervisor , Register Here</b></div>
	<div class="detail-app">
			<form action="add_super.php" method="post">
				Faculty-Supevisor : <input type="text" name="user" required="required"/></br>
				Faculty Id : <input type="text" name="id" required="required"/></br>
				Designation : <input type="text" name="desig" required="required"/></br>
				Department : <select name="dept">
					<option value="AE">AE</option>
					<option value="BSBE">BSBE</option>
					<option value="CHE">CHE</option>
					<option value="CHM">CHM</option>
					<option value="CE">CE</option>
					<option value="CSE">CSE</option>
					<option value="ECO">ECO</option>
					<option value="EE">EE</option>
					<option value="MSE">MSE</option>
					<option value="ME">ME</option>
					<option value="MTH">MTH</option>
					<option value="PHY">PHY</option>
					<option value="IME">IME</option>
					<option value="hSS">HSS</option>
				</select></br>
				<input class="btn btn-danger" type="submit" value="submit" name="submit"/>
			</form>
	</div>
</div>
</div>
</body>
</html>
<?php
}
else{
header("location: index.php");
}
?>