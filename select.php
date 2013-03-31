<?php
		if (isset($_REQUEST['submit'])){
			mysql_connect("localhost","root","mridul")
			or die("<h3>could not connect to MySQL</h3>\n");
			mysql_select_db("test")
			or die("<h3>could not select database 'test'</h3>\n");
			
			$a=$_REQUEST['select'];
			echo $a[0];
			
			for ($i=0;$i<count($a);$i++){
				$b = explode(".",$a[$i]);
				$c=$_COOKIE['user'];
				$result=mysql_query("insert into company_hires values('$b[0]','$c','$b[1]')");
				$resultd=mysql_query("update student set status=1 where roll=".$b[0]);
				$resultd2=mysql_query("delete from applied_for where roll=".$b[0]);
			}
			header("location: regis-com.php");
			//$result=mysql_query('insert into job_offering(designation) values("'.$a.'")');
		}
		else{
			header("location: index.php?password=incorrect");
		}
?>
		