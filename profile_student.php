<?php
mysql_connect("localhost","root","mridul")
or die("<h3>could not connect to MySQL</h3>\n");
mysql_select_db("test")
or die("<h3>could not select database 'test'</h3>\n");
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'student')){
	$result= mysql_query("select * from student where roll=".$_COOKIE['user']);
	while($row=mysql_fetch_array($result)){
		//header("location: regis.php");		
	}
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
	top:100px;
	left:10px;
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
	<div class="content" onclick="window.location='logout.php'"><font color="#fff" size="5px">Logout</font></div>
	<div class="content" onclick="window.location='regis.php'"><font color="#fff" size="5px">Back</font></div>
</div>
<div class="other">
	<form class="form-horizontal" enctype="multipart/form-data" action="fill_profile_student.php" method="post">
		<table>
		<tr><td><label>Name</label></td>
		<td><input type="text" name="name"/></td></tr>
		<tr><td><label>Department</label></td>
		<td><select name="dept">
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
		</select></td></tr>
		<tr><td><label>Degree</label></td>
		<td><select name="degree">
			<option value="Btech">B tech</option>
			<option value="Mtech(Dual)">B tech-M tech ( Dual )</option>
			<option value="Mtech">M tech</option>
		</select></td></tr>
		<tr><td><label>CPI</label></td>
		<td><input type="text" name="cpi"/></td></tr>
		<tr><td><label>Upload Resume</label></td>
		<td><input type="file" name="resume"/></td></tr>
		<tr><td><input type="submit" value="submit" name="submit"/></td></tr>
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
