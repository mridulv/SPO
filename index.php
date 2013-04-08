<?php
if (isset($_COOKIE['user'])){
setcookie("user","",time()-3600);
}
?>
<!DOCTYPE html>
<html>
    <head>
		<link rel="shortcut icon" href="favicon.png">
        <link rel="shortcut icon" href=""> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/style5.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<style type="text/css">
		</style>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Student Placement Office Database</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="user" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="pass" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p> 
                                    <label for="username" class="uname"> Login As :</label>
                                    <select name="role" id="username" required="required">
                                        <option value="student">Student</option>
                                        <option value="company">Company</option>
                                        <option value="alumni">Alumni</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </p>
								<?php
								if (isset($_REQUEST['password']) && $_REQUEST['password']=='incorrect'){
									echo "<p class='qwe'><label><h2>Wrong username or password</h2></label></p>";
								}
								?>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login"/> 
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="signin.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">CC Username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">CC Password</label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="user" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password</label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirm Password</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
								<?php
								if (isset($_REQUEST['connect']) && $_REQUEST['connect']=='not'){
									echo "<p class='qwe'><label><h2>Wrong CC Username and Password</h2></label></p>";
								}
								if (isset($_REQUEST['valid']) && $_REQUEST['valid']=='user'){
									echo "<p class='qwe'><label><h2>You Have Been Registered</h2></label></p>";
								}
								?>
                                <p class="signin button"> 
									<input type="submit" value="Signup" name="signup"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>