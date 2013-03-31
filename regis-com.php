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
	border:1px solid #8888ff;
	background-color: #aaaaff;
	border-radius: 4px;
	position:relative;
	margin-top:10px;
	width:120px;
	height:30px;
	cursor:pointer;
}
#new-pos{
	position:fixed;
	padding-left: 20px;
	padding-top:20px;
	background-color: #ffffff;
	left:0px;
	top:32px;
	width:1340px;
	height:600px;
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
#student-app {
	position:absolute;
	left:600px;
	top:200px;
    border-left:1px solid #aaaaaa;
    display: inline;
}
</style>
<script  type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.2.custom.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$("#new-pos").tabs();
	});
</script>
<div id="header">
	<div class="content" onclick="window.location='logout.php';"><font color="#fff" size="5px">Logout</font></div>
	<div class="content" onclick="window.location='profile_company.php'";><font color="#fff" size="5px">Create New Profile</font></div>
</div>
<body>
<div id="full">
	<img class="close" src="img/close.png"/>
</div>
<div id="new-pos">
	<?php
		echo "<ul>";
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");

		$k=$_COOKIE['user'];
		$i=0;
		$result= mysql_query("select * from job_offering where company_id=".$k);
		while($row=mysql_fetch_array($result)){
			$t = $row['designation'];
			echo '<li><a href="#tabs-'.$i.'">'.$t.'</a></li>';
			$i++;
		}
		echo "</ul>";
		$k=$_COOKIE['user'];
		$p=0;
		$result= mysql_query("select * from job_offering where company_id=".$k);
		while($row=mysql_fetch_array($result)){
			$a=$row['designation'];
			$b=$row['Number_of_posts'];
			$c=$row['description'];
			$t=$row['departments'];
			$y=$row['degree'];
			$d=$row['Min_CPI'];
			$e=$row['Max_CPI'];
			$f=$row['Basic'];
			$g=$row['HRA'];
			$h=$row['Sign_In_Bonus'];
			$i=$row['Shares_Worth'];
			echo '<div id="tabs-'.$p.'">
					<table cellspacing="5" border="0" cellpadding="0">
					<tr valign="top" align="left">
					<td width="600" height="500px" style="border:1px solid black;"><p>
					<table>
					<tr><td><label><b>Designation</b></label></td>
					<td>'.$a.'</td></tr>
					<tr><td><label><b>Number of Posts</b></label></td>
					<td>'.$b.'</td></tr>
					<tr><td><label><b>Description Of the Profile</b></label></td>
					<td>'.$c.'</td></tr>	
					<tr><td><label><b>Departments of Students should be among </b></label></td>
					<td>'.$t.'</td></tr>
					<tr><td><label><b>Degree of Student should be among </b></label></td>
					<td>'.$y.'</td></tr>
					<tr><td><label><b>Min. CPI </b></label></td>
					<td>'.$d.'</td></tr>
					<tr><td><label><b>Max. CPI </b></label></td>
					<td>'.$e.'</td></tr>
					<tr><td><label><b>Basic Salary (in lakhs)</b></label></td>
					<td>'.$f.'</td></tr>
					<tr><td><label><b>HRA (in lakhs)</b></label></td>
					<td>'.$g.'</td></tr>
					<tr><td><label><b>Sign In Bonus (in lakhs)</b></label></td>
					<td>'.$h.'</td></tr>
					<tr><td><label><b>Shares Worth (in lakhs)</b></label></td>
					<td>'.$i.'</td></tr>
					</table>
					</p></td>
					<td width="1" height="500px" bgcolor="#aaaaaa"><BR></td>
					<td width="600" height="500px" valign="top" align="center" style="border:1px solid black;">
					<p>Here is the news</p><form method="get" action="select.php?prof=0">';
					for ($j=0;$j<5;$j++){
						echo '<div class="comp-short"><input type="checkbox" name="student" value="mridul">mridul'.$j.'</div>';
					}

				echo '<input type="text" name="profile_no" value="'.$p.'" style="display:none;"><input type="submit" value="submit"/></form></td>
					</tr>
					</table>
			</div>';
			$i++;
		}
	?>
</div>
</body>
</html>
<?php
}
else{
header("location: index.php");
}
?>