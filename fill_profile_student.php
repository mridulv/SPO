<?php
		if (isset($_REQUEST['submit'])){
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");
		$a=$_REQUEST['name'];
		$b=$_COOKIE['user'];
		$c=$_REQUEST['dept'];
		$d=$_REQUEST['cpi'];
		$e=$_REQUEST['resume'];
		$f=$_REQUEST['degree'];
		
		$result=mysql_query("insert into student values('$b','$a','$e','0')");
		$result2=mysql_query("insert into student_degree values('$b','$f','$d','$c')");
		header("location: regis.php");	
		}
		else{
			header("location: index.php");	
		}
?>
		