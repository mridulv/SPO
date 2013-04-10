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
h3{
	font-size:20px;
	text-transform: uppercase;
	font-family: 'Open Sans', sans-serif;
	background-color:#ccccff;
	border:2px solid black;
	border-radius: 1px;
	border-collapse:1px;
}
#header{
	position:fixed;
	margin-top:0px;
	z-index:1;
	margin-left:0px;
	padding:10px 5px 0px 5px;
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
	position:relative;
	border:2px solid #8888ff;
	background-color: #aaaaff;
	padding:10px 10px 10px 10px;
	border-radius: 4px;
	margin-top:30px;
	margin-right:60px;
	height:50px;
	cursor:pointer;
	display:inline;
}
.comp-short2{
	position:relative;
	border:2px solid #8888ff;
	background-color: #aaaaff;
	padding:10px 10px 10px 10px;
	border-radius: 4px;
	margin-top:30px;
	margin-right:60px;
	height:50px;
	cursor:pointer;
	display:inline;
}
#new-pos{
	position:absolute;
	padding-left: 20px;
	padding-top:20px;
	background:#fff url(images/bg.jpg) repeat top left;
	left:0px;
	top:32px;
	width:1325px;
	height:600px;
}
#new-pos2{
	position:fixed;
	border:2px solid black;
	padding-left: 20px;
	padding-top:20px;
	background-color: #ffffff;
	left:300px;
	top:0px;
	width:800px;
	height:620px;
	z-index: 10;
	display:none;
}
#full{
	position:absolute;
	background-color: #000000;
	margin-left:-20px;
	margin-top:-20px;
	opacity : 0;
	z-index: 2;
	display:none;
	width:1375px;
	height:635px;
}
.close-2{
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
#frame{
	position:relative;
	margin-left:-30px;
	margin-top:-20px;
	width:820px;
	height:630px;
}
#logout{
	position:relative;
	margin-right:10px;
	width:100px;
}
#accordion{
	position:relative;
	margin-top:20px;
}
.tab{
	width:1200px;
	height:500px;
	border:2px solid black;
	z-index: 10;
	background-color:#ffffff;
	box-shadow: 10px 10px 5px #888888;
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
		$(".comp-short").click(function(){
			console.log("p");
			k = $(this).attr('alt');
			console.log(k);
			$("#full").show("fast",function(){
				console.log(k+"ssss");
				$(this).animate({'opacity': '0.8'});
				$(".comp-detail[alt = "+k+"]").fadeIn(20);
			});
		});
		$(".close-2").click(function(){
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
	<div class="content" onclick="window.location='profile_company.php'";><font color="#fff" size="5px">Create New Profile</font></div>
	<div class="content" id="logout" onclick="window.location='logout.php';"><font color="#fff" size="5px">Logout</font></div>
</div>
<div id="full">
	<img class="close-2" src="img/close.png"/>
</div>
<div id="new-pos">
	<?php
		echo "<ul>";
		$op=0;
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
			$j=$row['Company_Rating'];
			echo '<div class="tab" id="tabs-'.$p.'">
					<table cellspacing="5" border="0" cellpadding="0">
					<tr valign="top" align="left">
					<td width="600" height="500px" style="border:1px solid black;padding:20px;"><p>
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
					<tr><td><label><b>Rating given by (IITK alumnus)</b></label></td>
					<td>'.$j.'</td></tr>
					</table>
					</p></td>
					<td width="1" height="500px" bgcolor="#aaaaaa"><BR></td>
					<td width="600" height="500px" valign="top" align="center" style="border:1px solid black;">';

					$resultn2= mysql_query("select * from company_hires NATURAL JOIN student where company_id=".$k." and designation='".$row['designation']."'");
					if (mysql_num_rows($resultn2) !=0){
						echo '<h3 class="btn btn-success">Students Selected For this Profile</h3>';
						while($rown2=mysql_fetch_array($resultn2)){
							$r=$rown2['name'];
							echo '</br></br></br><div class="comp-short2 btn btn-primary">'.$r.'</div>';
						}
					}
					else{
					echo '<h3 class="btn btn-success">Students Applied For this Profile</h3>
					<form class="form-inline" method="post" action="select.php">';
					$resultn= mysql_query("select * from applied_for NATURAL JOIN student where company_id=".$k." and designation='".$row['designation']."'");
					$op=0;
					while($rown=mysql_fetch_array($resultn)){
						$op++;
						$r=$rown['name'];
						echo '</br></br></br><input style="float:center;margin-left:20px;" type="checkbox" name="select[]" value="'.$rown['roll'].'.'.$a.'"/><div style="margin-left:20px;" class="comp-short btn btn-primary" alt="'.$op.'">'.$r.'</div>';
						echo '<div id="new-pos2" class="comp-detail" alt="'.$op.'">';
						//echo 'See <a href="'.$rown['resume'].'" target="_blank">Here</a>';
						echo '<iframe id="frame" src="'.$rown['resume'].'"></iframe>';
						echo '</div>';
					}

						echo '</br></br></br><input class="btn btn-danger" type="submit" value="submit" name="submit"/></form>';
					}
					
					echo '</td>
					</tr>
					</table>
			</div>';
			$p++;
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