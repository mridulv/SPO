<?php
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'alumni')){
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
	margin-top:60px;
	margin-left:20px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:1200px;
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
	overflow-y:scroll;
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
h3{
	font-size:20px;
	text-transform: uppercase;
	font-family: 'Open Sans', sans-serif;
	background-color:#ccccff;
	border:2px solid black;
	border-radius: 1px;
	border-collapse:1px;
}
#accordion{
	position:absolute;
	width:1200px;
	margin-top:20px;
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
				window.location='profile_alumni.php';
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
<div id="full">
	<img class="close" src="img/close.png"/>
</div>
<!-- <div id="k2">
<p class="signin button" id="pro"> 
	<input type="button" value="Edit Profile"/>
</p>
<p class="signin button" onclick="window.location ='logout.php';" id="log"> 
	<input type="button" value="Logout"/> 
</p>
</div> -->
<div id="header">
	<?php
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");

			$result4= mysql_query("select * from alumni where alumni_id=".$_COOKIE['user']);
			if (mysql_num_rows($result4)==0){
				echo '<div class="content" id="profile_my"><font color="#fff" size="5px">Create a  New Profile</font></div>';		
			}
	?>
	<div class="content" id="logout"><font color="#fff" size="5px">Logout</font></div>
</div>
<div id="main-content">
	<h3 style="align:center;" class="btn btn-success">Rate the Companies according to the work enviornment and the salary/packages ( out of 5)</h2>
	<div id="accordion">
		<?php
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");
			$ck=0;

			$result5p= mysql_query("select * from job_offering NATURAL JOIN Company");

			while($row=mysql_fetch_array($result5p)){ 
				$ck=0;
				$result4= mysql_query("select * from company_rating NATURAL JOIN Company where alumni_id=".$_COOKIE['user']);
				while($rowe=mysql_fetch_array($result4)){
					if ($rowe['company_id']==$row['company_id'] && !strcmp($rowe['designation'],$row['designation'])){
							$ck=1;
					}
				}
				$rp=$row['company_id'];
				$name=$row['Company_name'];
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
				if ($ck==0){					
					echo '<div class="head-app">'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Designation : '.$a.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
					echo '<div class="detail-app">
					<table><tr><td>
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
					<tr><td>(As Provided by the Company)</td></tr>
					</table></td>
					<td style="width:100px;">
					</td>
					<td style="position:absolute;">
					<form action="rate.php" method="post">
						<table>
							<tr><td><label>Rating</label></td>
							<td><input type="number" name="rating" min="1" max="5"></td></tr>
							<input type="hidden" name="profile" value="'.$a.'.'.$rp.'">
							<tr><td><input class=" btn btn-danger" type="submit" value="submit" name="submit"/></td></tr>
						</table>
					</form>
					</td>
					</table>
					</div>';
				}
			}
		?>
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