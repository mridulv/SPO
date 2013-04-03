<?php
		if (isset($_REQUEST['login'])){
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");
		$a=stripslashes($_REQUEST['user']);
		$b=stripslashes($_REQUEST['pass']);
		$c=stripslashes($_REQUEST['role']);	

		if (!strcmp($c,"student")){
			$result=mysql_query('select * from login');
			$m=0;
			while($row=mysql_fetch_array($result)){
			if ($row['username']==$a && $row['password']==$b){
						$m=1;
						session_start();
						setcookie("role","student",time()+3600);
						setcookie("user",$row['roll'],time()+3600);
						header("location: regis.php");
						exit();
			}
			}
			if ($m==0)
				header("location: index.php?password=incorrect");
			else{
				header("location: index.php");	
			}
		}
		else if(!strcmp($c,"company")){
			echo $a.$b." ";
			$result2=mysql_query('select * from login_company');
			$m=0;
			while($row2=mysql_fetch_array($result2)){
			echo $row2['username']." ";
			if ($row2['username']==$a && $row2['password']==$b){
						$m=1;
						session_start();
						setcookie("role","company",time()+3600);
						setcookie("user",$row2['company_id'],time()+3600);
						header("location: regis-com.php");
						exit();
			}
			}
			if ($m==0)
				header("location: index.php?password=incorrect");
			else{
				header("location: index.php");	
			}
		}
	}
	else
		header("location: index.php");	
?>
		