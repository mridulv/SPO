<?php
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'company')){
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
	padding:10px 45px 0px 5px;
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
	width:800px;
	height:500px;
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
	position:absolute;
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
.other{
	position:absolute;
	margin-left:20px;
	top:100px;
}
</style>
<script  type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.2.custom.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
</script>
<body>
<div id="header">
	<div class="content" onclick="window.location='regis-com.php'"><font color="#fff" size="5px">Back</font></div>
	<div class="content" onclick="window.location='logout.php'"><font color="#fff" size="5px">Logout</font></div>
</div>
<div class="other">
	<form action="fill_profile_company.php" method="get" id="usrform">
		<table>
		<tr><td><label>Designation</label></td>
		<td><input type="text" name="desig" required="required"/></td></tr>
		<tr><td><label>Number of Posts</label></td>
		<td><input type="number" style="height:30px;"name="num_posts" required="required"/></td></tr>
		<tr><td><label>Description Of the Profile</label></td>
		<td><textarea rows="4" cols="50" name="profile" form="usrform">Enter text here...</textarea></td></tr>	
		<tr><td><label>Departments of Students ( seperated by comma )</label></td>
		<td><input type="text" name="dept" required="required" placeholder="CSE,EE,MTH"/></td></tr>
		<tr><td><label>Degree of Student  ( seperated by comma )</label></td>
		<td><input type="text" name="degr" required="required" placeholder="Btech,Mtech(Dual),Mtech"/></td></tr>
		<tr><td><label>Min. CPI </label></td>
		<td><input type="text" name="min_cpi" required="required"/></td></tr>
		<tr><td><label>Max. CPI</label></td>
		<td><input type="text" name="max_cpi" required="required"/></td></tr>
		<tr><td><label>Basic (optional) (in lakhs)</label></td>
		<td><input type="text" name="basic"/></td></tr>
		<tr><td><label>HRA (optional) (in lakhs)</label></td>
		<td><input type="text" name="hra"/></td></tr>
		<tr><td><label>Sign In Bonus (optional) (in lakhs)</label></td>
		<td><input type="text" name="bonus"/></td></tr>
		<tr><td><label>Shares Worth (optional) (in lakhs)</label></td>
		<td><input type="text" name="shares"/></td></tr>
		<tr><td><input class="btn btn-danger"  type="submit" value="submit" name="submit"/></td></tr>
		</table>
	</form>
</div>
</body>
</html>
<?php
}
else{
header("location: index.php");
}
?>
