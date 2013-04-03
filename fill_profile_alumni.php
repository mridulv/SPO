<?php
		if (isset($_REQUEST['submit'])){
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");
			$a=$_REQUEST['name'];
			$b=$_REQUEST['dept'];
			$d=$_REQUEST['batch'];
			$c=$_REQUEST['address'];

			$k = $_COOKIE['user'];
			
			$result=mysql_query("insert into alumni values('$k','$d','$c','$b','$a')");
			//$result=mysql_query('insert into job_offering(designation) values("'.$a.'")');
			header("location: alumni_rate.php");
		}
		else{
			header("location: index.php?password=incorrect");
		}
?>
		