<?php
  if (isset($_REQUEST['signup'])){
		mysql_connect("localhost","root","mridul")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("test")
		or die("<h3>could not select database 'test'</h3>\n");
		
		$a=$_REQUEST['username'];
		$b=$_REQUEST['password'];
		$c=$_REQUEST['user'];
		$d=$_REQUEST['passwordsignup'];
    $e=$_REQUEST['passwordsignup_confirm'];

    $conn_id = ftp_connect("vyom.cc.iitk.ac.in"); 

    $login_result = ftp_login ($conn_id,$a,$b); 
    if ((!$conn_id) || (!$login_result)) { 
         header('Location: index.php?connect=not#toregister');
    } else {
        $result="INSERT INTO login (username,password) VALUES ('".$c."','".$d."')";
        mysql_query($result);
        header('Location: index.php?valid=user#toregister');
    }
	
  }
  else{
    header('Location: index.php');
  }
?>