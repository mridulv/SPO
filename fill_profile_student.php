<?php
		if (isset($_REQUEST['submit'])){
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");
		$a=$_REQUEST['name'];
		$a=$_REQUEST['roll'];
		$a=$_REQUEST['department'];
		$a=$_REQUEST['cpi'];
		$a=$_REQUEST['resume'];
		
		$result=mysql_query('insert into student(name');
		if ($m==0)
			header("location: index.php?password=incorrect");
		}
		else{
			header("location: index.php");	
		}
?>
		