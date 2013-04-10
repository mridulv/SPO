<?php
		if (isset($_REQUEST['submit'])){
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");

			$a=$_REQUEST['user'];
			$b=$_REQUEST['dept'];
			$c=$_REQUEST['id'];
			$d=$_REQUEST['desig'];
			
			$result=mysql_query("insert into faculty values('$c','$a','$b','$d')");
			//$result=mysql_query('insert into job_offering(designation) values("'.$a.'")');
			header("location: admin.php");
		}
		else{
			header("location: index.php?password=incorrect");
		}
?>
		