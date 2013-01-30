<?php
		if (isset($_REQUEST['login'])){
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");
		$a=stripslashes($_REQUEST['user']);
		$b=stripslashes($_REQUEST['pass']);
		
		$result=mysql_query('select * from login');
		$m=0;
		while($row=mysql_fetch_array($result)){
		if ($row['username']==$a && $row['password']==$b){
					$m=1;
					session_start();
					setcookie("user",$row['username'],time()+3600);
					header("location: regis.php");
					exit();
		}
		}
		if ($m==0)
			header("location: index.php?password=incorrect");
		}
		else{
			header("location: index.php");	
		}
?>
		