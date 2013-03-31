<?php
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'company')){
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
	<div class="content"><font color="#fff" size="5px">Logout</font></div>
	<div class="content" onclick="window.location='regis.php'"><font color="#fff" size="5px">Back</font></div>
</div>
<div class="other">
	<form action="fill_profile_company.php" method="post" id="usrform">
		<table>
		<tr><td><label>Designation</label></td>
		<td><input type="text" name="desig" required="required"/></td></tr>
		<tr><td><label>Number of Posts</label></td>
		<td><input type="number" name="num_posts" required="required"/></td></tr>
		<tr><td><label>Description Of the Profile</label></td>
		<td><textarea rows="4" cols="50" name="profile" form="usrform">Enter text here...</textarea></td></tr>		
		<tr><td><label>Min. CPI </label></td>
		<td><input type="text" name="min_cpi" required="required"/></td></tr>
		<tr><td><label>Max. CPI (optional)</label></td>
		<td><input type="text" name="max_cpi"/></td></tr>
		<tr><td><label>Basic (optional) (in lakhs)</label></td>
		<td><input type="text" name="basic"/></td></tr>
		<tr><td><label>HRA (optional) (in lakhs)</label></td>
		<td><input type="text" name="hra"/></td></tr>
		<tr><td><label>Sign In Bonus (optional) (in lakhs)</label></td>
		<td><input type="text" name="bonus"/></td></tr>
		<tr><td><label>Shares Worth (optional) (in lakhs)</label></td>
		<td><input type="text" name="shares"/></td></tr>
		<tr><td><input type="submit" value="submit"/></td></tr>
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
