<?php
		if (isset($_REQUEST['submit'])){
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");

			$a=$_REQUEST['user'];
			$b=$_REQUEST['pass'];
			$c=$_REQUEST['id'];
			
			$result=mysql_query("insert into login_alumni values('$a','$b','$c')");
			//$result=mysql_query('insert into job_offering(designation) values("'.$a.'")');
			header("location: admin.php");
		}
		else{
			header("location: index.php?password=incorrect");
		}
?>