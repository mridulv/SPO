<?php
if (isset($_COOKIE['user']) && !strcmp($_COOKIE['role'],'student')){
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
	<div class="content"><font color="#fff" size="5px">Logout</font></div>
</div>
<div id="main-content">
	<h2><u>Companies in which job applied for</u></h2>
	<div id="accordion">
		<?php
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");

			$result4= mysql_query("select * from applied_for NATURAL JOIN Company where roll=".$_COOKIE['user']);
			
			while($row4=mysql_fetch_array($result4)){ 

				$result5= mysql_query("select * from company_hires NATURAL JOIN Company where roll=".$_COOKIE['user']." and designation='".$row4['designation']."' and company_id=".$row4['company_id']);
				$result6= mysql_query("select * from job_offering where company_id=".$row4['company_id']." and designation='".$row4['designation']."'");
				$row=mysql_fetch_array($result6);
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
				if (mysql_num_rows($result5)!=0){					
					$row5=mysql_fetch_array($result5);
					echo '<div class="head-app">'.$row5['Company_name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results : Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status : Yes</div>';
					echo '<div class="detail-app">
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
					</div>';
				}
				else{
					$result5= mysql_query("select * from company_hires NATURAL JOIN Company where designation='".$row4['designation']."' and company_id=".$row4['company_id']);					
					if (mysql_num_rows($result5)==0){					
						echo '<div class="head-app">'.$row4['Company_name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results : No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status : No</div>';
						echo '<div class="detail-app">
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
						</div>';
					}
					else{
						echo '<div class="head-app">'.$row4['Company_name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results : Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status : No</div>';
						echo '<div class="detail-app">
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
						</div>';						
					}
				}
			}
		?>
	</div>
</div>
<div id="company-content">
	<h2><u>New Companies</u></h2>
	<div id="job-new">
		<form action="application.php" method="get">
		<?php
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");

			$result3= mysql_query("select * from student_degree where roll=".$_COOKIE['user']);
			$row3=mysql_fetch_array($result3);

			$result= mysql_query("select * from job_offering");
			while($row=mysql_fetch_array($result)){
				$check=0;
				$result2= mysql_query("select * from applied_for");
				while($row2=mysql_fetch_array($result2)){
					if (($row2['roll'] == $_COOKIE['user'] && $row2['company_id'] == $row['company_id'] && $row2['designation'] == $row['designation'])){
						$check=1;
					}
				}
				if ($check==0){
				$a1=$row['departments'];
				$a2=$row['degree'];
				$b1=explode(",",$a1);
				$b2=explode(",",$a2);
				if (in_array($row3['department'], $b1) && in_array($row3['degree'], $b2) && ($row3['cpi'] >= $row['Min_CPI']  && $row3['cpi'] <= $row['Max_CPI'])){
					echo '<input type="checkbox" name="options[]" value="'.$row['company_id'].'.'.$row['designation'].'"><div class="comp-short" alt="'.$i.'">'.$row['designation'].'</div>';
					echo '<div id="new-pos" class="comp-detail" alt="'.$i.'">
							<ul>
								<li><a href="#tabs-1">Nunc tincidunt</a></li>
								<li><a href="#tabs-2">Proin dolor</a></li>
								<li><a href="#tabs-3">Aenean lacinia</a></li>
							</ul>
							<div id="tabs-1">
								<p>Tab'.$i.'</p>							
							</div>
							<div id="tabs-2">
								<p>Tab'.$i.'</p>	
							</div>
							<div id="tabs-3">
								<p>Tab'.$i.'</p>	
							</div>
						</div>';
					}
				}
			}
		?>
		<input type="submit" value="submit" name="submit"/>
		</form>
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