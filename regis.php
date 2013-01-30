<?php
if (isset($_COOKIE['user'])){
session_start();
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.png">
<title>Registration Portal</title>
<style type="text/css">
img{
height:100px;
width:100px;
margin-left:10px;
margin-top:10px;
}
#login{
position:absolute;
top:50px;
left:100px;
width:500px;
height:620px;
background-color:#000000;
}
#login2{
position:absolute;
top:50px;
left:700px;
width:500px;
height:530px;
background-color:#000000;
}
#k1{
position:absolute;
bottom:10px;
right:10px;
width:100%;
}
#k2{
position:fixed;
top:10px;
right:10px;
width:30%;
}
</style>
<script  type="text/javascript" src="jquery.js"></script>
<script  type="text/javascript" src="jquery-ui.min.js"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" type="text/css" href="css/demo2.css" />
</head>
<body>
<div id="k2">
<p class="signin button" onclick="window.location ='logout.php';"> 
	<input type="button" value="Logout"/> 
</p>
</div>
</body>
</html>
<?php
}
else{
header("location: index.php");
}
?>