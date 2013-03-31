<?php
		if (isset($_REQUEST['submit'])){
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");
			$a=$_REQUEST['desig'];
			$b=$_REQUEST['num_posts'];
			$c=$_REQUEST['profile'];
			$t=$_REQUEST['dept'];
			$y=$_REQUEST['degr'];
			$d=$_REQUEST['min_cpi'];
			$e=$_REQUEST['max_cpi'];
			$f=$_REQUEST['basic'];
			$g=$_REQUEST['hra'];
			$h=$_REQUEST['bonus'];
			$i=$_REQUEST['shares'];

			$k = $_COOKIE['user'];
			
			$result=mysql_query("insert into job_offering values('$a','$k','$b','$c','$t','$y','$d','$e','5','$f','$g','$h','$i')");
			//$result=mysql_query('insert into job_offering(designation) values("'.$a.'")');
			header("location: regis-com.php");
		}
		else{
			header("location: index.php?password=incorrect");
		}
?>
		