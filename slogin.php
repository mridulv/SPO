<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<html>
<head>
<title>Login page</title>

<style type="text/css" title="currentStyle">
			@import "media/css/style.css";
			@import "media/css/demo_table.css";
</style>
</head>
<body id="megaworld">
<div id='login_form'>
<table width=100% height=100%><tr><td>
<?
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1 && ($_SESSION['status']==1 || $_SESSION['status']==3 || $_SESSION['status']==2)){
	echo "sdsd";
  header("Location: trans.php");
  //both have access to these resources
}
else if(isset($_REQUEST['uname']) && isset($_REQUEST['passwd']) && $_REQUEST['uname']!='' && $_REQUEST['uname']!='' && $_REQUEST['uname']!=''){
	echo "asas";
  //echo "sujit";
   if(authenticate()){
	//echo "pass"; 
	echo "lodu";
  include('conn.php');
  $query="select * from `login_secy` where `Name` like '".$_REQUEST['uname']."'"; 
  $result=mysql_query($query) or die('asasasaallpllpll');
  $fetch = mysql_fetch_array($result);
  echo $fetch[3];
  if( $fetch[4]== false ){
		echo "<h2 align=center style='color:red;'>Your account is not active</h2>";
  }
  else{
  $_SESSION['name']=$_REQUEST['uname'];
  echo "aaappppooo";
  if( $fetch[3]=='admin') {
      $_SESSION['status']=2;
	  $_SESSION['name']='admin';
  }
  else if ( $fetch[3] =='casino') $_SESSION['status']=3;
  else if ( $fetch[3] =='coordie') $_SESSION['status']=2;
  else if ( $fetch[3] =='secy') $_SESSION['status']=1;
  
  $_SESSION['loggedin']=1;
  echo "asasaploo12121212";
  header("location: koko.php");
  }
  }
  else {
      echo "<h2 align=center style='color:red;'>Error in details</h2>";
  }
}

else {
      echo "Fill in all the details";
}


function authenticate(){
    //connect to the db
    include('conn.php');
    $query="select * from `login_secy` where `Name` like '".$_REQUEST['uname']."'"; 
    $result=mysql_query($query);
	$fetch = mysql_fetch_array($result);
	//echo $fecth[3];
    if(!$result) {
    $err=mysql_error();
     print "Error in details";
    exit();
        }
     //authenticate the user
     $pass_test=(md5($_REQUEST['passwd']).''==mysql_result($result,0,"Password"));
     if($pass_test) return True; 
     return False;
        
}
?>

<h2 align=center>Login page </h2>
<form name='login' id='login' action='' method='post'>
<table align=center>
<tr>
    <td>Username</td>
    <td><input type='text' id='uname' name='uname'/><br/></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type='password' id='passwd' name='passwd' /><br/></td>
</tr>

<tr>
    <td><input type='submit' value='Login'/></td>
    <td><input type="reset" value="Reset"/></td>
</tr>
</form>
</table>
</td></tr></table>
</div>
</body>
</html>