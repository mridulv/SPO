<?php
if (isset($_COOKIE['college'])){
session_start();
if (isset($_REQUEST['sport']) && isset($_REQUEST['submit'])){
$captain=$_REQUEST['cap1']." ".$_REQUEST['cap2']." ".$_REQUEST['cap3'];
$player1=$_REQUEST['pla11']." ".$_REQUEST['pla12']." ".$_REQUEST['pla13'];
$player2=$_REQUEST['pla21']." ".$_REQUEST['pla22']." ".$_REQUEST['pla23'];
$player3=$_REQUEST['pla31']." ".$_REQUEST['pla32']." ".$_REQUEST['pla33'];
$player4=$_REQUEST['pla41']." ".$_REQUEST['pla42']." ".$_REQUEST['pla43'];
$player5=$_REQUEST['pla51']." ".$_REQUEST['pla52']." ".$_REQUEST['pla53'];
$player6=$_REQUEST['pla61']." ".$_REQUEST['pla62']." ".$_REQUEST['pla63'];
$player7=$_REQUEST['pla71']." ".$_REQUEST['pla72']." ".$_REQUEST['pla73'];
$player8=$_REQUEST['pla81']." ".$_REQUEST['pla82']." ".$_REQUEST['pla83'];
$player9=$_REQUEST['pla91']." ".$_REQUEST['pla92']." ".$_REQUEST['pla93'];
$player10=$_REQUEST['pla101']." ".$_REQUEST['pla102']." ".$_REQUEST['pla103'];
$player11=$_REQUEST['pla111']." ".$_REQUEST['pla112']." ".$_REQUEST['pla113'];
$player12=$_REQUEST['pla121']." ".$_REQUEST['pla122']." ".$_REQUEST['pla123'];
$player13=$_REQUEST['pla131']." ".$_REQUEST['pla132']." ".$_REQUEST['pla133'];
$player14=$_REQUEST['pla141']." ".$_REQUEST['pla142']." ".$_REQUEST['pla143'];
$player15=$_REQUEST['pla151']." ".$_REQUEST['pla152']." ".$_REQUEST['pla153'];
$player16=$_REQUEST['pla161']." ".$_REQUEST['pla162']." ".$_REQUEST['pla163'];
$player17=$_REQUEST['pla171']." ".$_REQUEST['pla172']." ".$_REQUEST['pla173'];
$player18=$_REQUEST['pla181']." ".$_REQUEST['pla182']." ".$_REQUEST['pla183'];
$desc=$_REQUEST['desc'];
$college=$_COOKIE['college'];

mysql_connect("localhost","udghogvc_mridul","Mri27dul")
or die("<h3>could not connect to MySQL</h3>\n");
mysql_select_db("udghogvc_a1")
or die("<h3>could not select database 'udghogvc_a1'</h3>\n");
 
if ($_REQUEST['sport']==1){ 
$result="INSERT INTO athletics (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==2){ 
$result="INSERT INTO badminton (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==3){ 
$result="INSERT INTO basketball (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==4){ 
$result="INSERT INTO carrom (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==5){ 
$result="INSERT INTO chess (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==6){ 
$result="INSERT INTO cricket (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==7){ 
$result="INSERT INTO football (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==8){ 
$result="INSERT INTO hockey (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==9){ 
$result="INSERT INTO lawntennis (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==10){ 
$result="INSERT INTO tabletennis (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==11){ 
$result="INSERT INTO volleyball (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==12){ 
$result="INSERT INTO taekwondo (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==13){ 
$result="INSERT INTO weight (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==14){ 
$result="INSERT INTO quiz (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==15){ 
$result="INSERT INTO kho (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==16){ 
$result="INSERT INTO swim (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}

if ($_REQUEST['sport']==17){ 
$result="INSERT INTO skate (college,captain,pla1,pla2,pla3,pla4,pla5,pla6,pla7,pla8,pla9,pla10,pla11,pla12,pla13,pla14,pla15,pla16,pla17,pla18,data) VALUES ('".$college."','".$captain."','".$player1."','".$player2."','".$player3."','".$player4."','".$player5."','".$player6."','".$player7."','".$player8."','".$player9."','".$player10."','".$player11."','".$player12."','".$player13."','".$player14."','".$player15."','".$player16."','".$player17."','".$player18."','".$desc."')";                                                          

mysql_query($result);
}
header("location: http://udghosh.org/portal/registration.php?arr=".$_REQUEST['arr']);
}
}
else{
header("location: http://udghosh.org/portal/index.php");
}
?>