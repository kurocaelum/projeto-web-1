<?php
$username = null;
$password = null;
$getuser = null;
$getpass = null;
$auth = FALSE;
$errormsg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username.":".$password;
        
        $users=fopen("users.txt",r) or die("unable to open file!");
        while(!feof($users)) {
            $usersline = fgets($users);
            echo $usersline."<br>"; 
            $getuser = strtok($usersline, ":");
            $getpass = strtok(":");
            $getpass = rtrim($getpass,"\n");
            echo $getuser;
            echo $getpass;
            
            if (($username == $getuser) && ($password == $getpass)) {
                $auth = TRUE;
                 $errormsg = "\nhi, you are authenticated\n";
                echo $errormsg;
            }
        } //end while
        if ($auth) {
            //session_start();  
            //$_SESSION ["authenticated"] = 'true';
            $errormsg = "hi, you are logged in";
            echo $errormsg;
           //header('Location: loggedin.php');
        }
        else {
           $errormsg = "Invalir username or password";
           echo $errormsg;
        }
    } else {
       $errormsg = "Username or password cannot be empty";
        echo $errormsg;
    }
} 
//else {    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Creating a simple application </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">
    <!-- [banner] -->
    <header id="banner">
        <hgroup>
            <h1>Login</h1>
        </hgroup>        
    </header>
    <!-- [content] -->
    <section id="content">
        <?php echo $errormsg; ?>
        <form id="login" method="post">
            <label for="username">Username:</label>
            <input id="username" name="username" type="text" required>
            <label for="password">Password:</label>
            <input id="password" name="password" type="password" required>                    
            <br />
            <input type="submit" value="Login">
        </form>
        <p>or</p>
        <a href="signin.php">Sign in</a>
    </section>
    <!-- [/content] -->
    
    <footer id="footer">
        <details>
            <summary>Copyright 2013</summary>
            <p>Jonathan Schnittger. All Rights Reserved.</p>
        </details>
    </footer>
</div>
<!-- [/page] -->
</body>
</html>
