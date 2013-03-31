<?php
if (isset($_COOKIE['user'])&& !strcmp($_COOKIE['role'],'student')){
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
	<div class="content" onclick="window.location='profile_student.php';"><font color="#fff" size="5px">Edit Profile</font></div>
</div>
<div id="main-content">
	<h2><u>Companies in which job applied for</u></h2>
	<div id="accordion">
		<?php
			for ($i=0;$i<10;$i++){
				echo '<div class="head-app">Microsoft&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results : Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status : Yes</div>';
				echo '<div class="detail-app">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>';
			}
		?>
	</div>
</div>
<div id="company-content">
	<h2><u>New Companies</u></h2>
	<div id="job-new">
		<?php
			for ($i=0;$i<10;$i++){
				echo '<div class="comp-short" alt="'.$i.'">Microsoft&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
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