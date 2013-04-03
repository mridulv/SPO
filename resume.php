<?php

	mysql_connect("localhost","root","mridul")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("test")
	or die("<h3>could not select database 'test'</h3>\n");

	$a=$_REQUEST['roll'];

	$result= mysql_query("select * from student where roll=".$a);
	$row=mysql_fetch_array($result);
		
	header('Content-type: application/pdf');
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	header("Content-Disposition: inline;filename='name.pdf'");
	header("Content-length: ".strlen($row['resume']));
	echo $row['resume'];
?>