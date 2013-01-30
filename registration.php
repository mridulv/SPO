<?php
if (isset($_COOKIE['college'])){
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
top:100px;
left:180px;
height:300px;
background-color:#000000;
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
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/demo2.css" />
</head>
<body>
<div class="container">
            <header>
                <h1>Registration Portal</h1>
            </header>
<div id="login" class="animate form">
<div class="container2">
            <header>
                <h1>Fill in your team details by clicking on any of the sports</h1>
            </header>
</div>
<hr/>
<?php
if (isset($_REQUEST['arr'])){
$arr=explode(",", $_REQUEST['arr']);
$a=sizeof($arr);
for ($i=0;$i<$a;$i++){
	echo "<a href='form.php?arr=".$_REQUEST['arr']."&name=".$arr[$i]."'><img class='mb_imagelist' alt='".$arr[$i]."' src='thumbs/img".$arr[$i].".jpg' /></a>";
}
}
?>
</div>
</div>
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