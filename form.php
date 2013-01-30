<?php
if (isset($_COOKIE['college'])){
session_start();
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.png">
<title>Registration Portal</title>
<style type="text/css">
img{
height:100px;
width:100px;
margin-left:10px;
margin-top:10px;
}
#login{
position:absolute;
top:100px;
left:400px;
height:500px;
background-color:#000000;
overflow:scroll;
}
#as{
display:none;
}
#as2{
display:none;
}
#k2{
position:fixed;
top:10px;
right:10px;
width:30%;
}
</style>
<script  type="text/javascript" src="jquery.js"></script>
<script  type="text/javascript" src="jquery-ui.min.js"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<link rel="stylesheet" type="text/css" href="css/default.css"/>
<link rel="stylesheet" type="text/css" href="css/demo2.css" />	
</head>
<body>
<div class="container">
            <header>
                <h1>Registration Portal</h1>
            </header>
<div id="login" class="animate form">
<div class="container2">
            <header>
                <h1>Team Details</h1>
            </header>
</div>
<hr/>
        <form action="fill.php" class="register" method="post">
            <fieldset class="row1">
                <legend><h1>Captain Information</h1>
                </legend>
                <p>
                    <label>Name *</h2>
                    </label>
                    <input type="text" name="cap1"/>
				</p>
				<p>
                    <label>Email *
                    </label>
                    <input type="text" name="cap2"/>
				</p>
				<p>
					<label>Phone *
                    </label>
                    <input type="text" name="cap3"/>
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
			<fieldset class="row1">
                <legend><h1>Player's Information</h1>
                </legend>
                <p>
                    <label>Name
                    </label>
                    <input type="text" name="pla11"/>
					<label>Name
                    </label>
                    <input type="text" name="pla21"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla12"/>
					<label>Email
                    </label>
                    <input type="text" name="pla22"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla13"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla23"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla31"/>
					<label>Name
                    </label>
                    <input type="text" name="pla41"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla32"/>
					<label>Email
                    </label>
                    <input type="text" name="pla42"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla33"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla43"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla51"/>
					<label>Name
                    </label>
                    <input type="text" name="pla61"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla52"/>
					<label>Email
                    </label>
                    <input type="text" name="pla62"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla53"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla63"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla71"/>
					<label>Name
                    </label>
                    <input type="text" name="pla81"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla72"/>
					<label>Email
                    </label>
                    <input type="text" name="pla82"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla73"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla83"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla91"/>
					<label>Name
                    </label>
                    <input type="text" name="pla101"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla92"/>
					<label>Email
                    </label>
                    <input type="text" name="pla102"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla93"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla103"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla111"/>
					<label>Name
                    </label>
                    <input type="text" name="pla121"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla112"/>
					<label>Email
                    </label>
                    <input type="text" name="pla122"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla113"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla123"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla131"/>
					<label>Name
                    </label>
                    <input type="text" name="pla141"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla132"/>
					<label>Email
                    </label>
                    <input type="text" name="pla142"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla133"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla143"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla151"/>
					<label>Name
                    </label>
                    <input type="text" name="pla161"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla152"/>
					<label>Email
                    </label>
                    <input type="text" name="pla162"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla153"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla163"/>
                </p>
				</br>
				</br></br>
				</br>
				<p>
                    <label>Name
                    </label>
                    <input type="text" name="pla171"/>
					<label>Name
                    </label>
                    <input type="text" name="pla181"/>
				</p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name="pla172"/>
					<label>Email
                    </label>
                    <input type="text" name="pla182"/>
				</p>
				<p>
					<label>Phone
                    </label>
                    <input type="text" name="pla173"/>
					<label>Phone
                    </label>
                    <input type="text" name="pla183"/>
                </p>
				</br>
				</br>
            </fieldset>
			<div id="as"><input type="text" name="sport" value="<?php echo $_REQUEST['name']; ?>"/> </div>
            <div id="as2"><input type="text" name="arr" value="<?php echo $_REQUEST['arr']; ?>"/> </div>
			<fieldset class="row1">
                <legend><h1>Description</h1>
                </legend>
				<p>
					<label>Credentials
                    </label>
                    <textarea rows="10" cols="70" name="desc">
					</textarea>
                </p>
            </fieldset>
			<div><input type="submit" name="submit" value="submit"/></div>
        </form>
</div>
</div>
<div id="k2">
<p class="signin button" onclick="window.location ='logout.php';"> 
	<input type="button" value="Logout"/> 
</p>
</div>
</body>
</html>
<?php
}
else{
header("location: index.php");
}
?>