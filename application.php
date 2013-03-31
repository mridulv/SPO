<?php
		if (isset($_REQUEST['submit'])){
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");
			
			$a=$_REQUEST['options'];
			
			for ($i=0;$i<count($a);$i++){
				$b = explode(".",$a[$i]);
				$c=$_COOKIE['user'];
				$result=mysql_query("insert into applied_for values('$c','$b[0]','$b[1]')");	
			}
			header("location: regis.php");
			//$result=mysql_query('insert into job_offering(designation) values("'.$a.'")');
		}
		else{
			header("location: index.php?password=incorrect");
		}
?>
		