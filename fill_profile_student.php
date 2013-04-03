<?php
		if (isset($_REQUEST['submit'])){
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");

		$target = "resume/"; 
 		$target = $target . basename( $_FILES['resume']['name']); 

		$a=$_REQUEST['name'];
		$b=$_COOKIE['user'];
		$c=$_REQUEST['dept'];
		$d=$_REQUEST['cpi'];
		$f=$_REQUEST['degree'];
		
		$result=mysql_query("insert into student values('$b','$a','$target','0')");
		$result2=mysql_query("insert into student_degree values('$b','$f','$d','$c')");

		if (file_exists("resume/" . $_FILES["resume"]["name"]))
	    {
	      	echo $_FILES["resume"]["name"] . " already exists. ";
	    }
	    else
	    {
	        move_uploaded_file($_FILES["resume"]["tmp_name"],"resume/" . $_FILES["resume"]["name"]);
	        echo "Stored in: " . "resume/" . $_FILES["resume"]["name"];
	    }

		header("location: regis.php");	
		}
		else{
			header("location: index.php");	
		}
?>
		