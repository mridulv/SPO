<?php

	if (isset($_REQUEST['submit'])){
	mysql_connect("localhost","root","mridul")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("test")
	or die("<h3>could not select database 'test'</h3>\n");

	$a=$_REQUEST['rating'];
	$b=$_REQUEST['profile'];
	$ap=$_COOKIE['user'];
	$c=explode(".",$b);

	$result=mysql_query("insert into company_rating values('$c[1]','$ap','$a','$c[0]')");
	$rating=mysql_query("select * from job_offering where designation='".$c[0]."' and company_id=".$c[1]);

	echo $ap;
	echo $c[1];
	echo $c[0];

	$row=mysql_fetch_array($rating);

	$rate_r=$row['Company_Rating'];
	$rate_per=$row['persons'];

	$tot=$rate_r*$rate_per;
	$tot=($tot+$a)/($rate_per+1);
		
	echo $tot;

	$resultd=mysql_query("update job_offering set Company_Rating=".$tot." where designation='".$c[0]."' and company_id=".$c[1]);
	$resultd2=mysql_query("update job_offering set persons=".($rate_per+1)." where designation='".$c[0]."' and company_id=".$c[1]);
	header("location: alumni_rate.php");
	}
	else
		header("location: index.php");
?>