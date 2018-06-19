<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $users = fopen("users.txt","a+") or die("unable to open file!");
        $fileline = $username.":".$password.":\n";
        fwrite($users, $fileline);
        fclose($users);
        header('Location: login.php');
    } 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">
    <!-- [banner] -->
    <header id="banner">
        <hgroup>
            <h1>Sign Up</h1>
        </hgroup>        
    </header>
    <!-- [content] -->
    <section id="content">
        <form id="login" method="post">
            <label for="username">Username:</label>
            <input id="username" name="username" type="text" required>
            <label for="password">Password:</label>
            <input id="password" name="password" type="password" required>                    
            <label for="password">Confirm Password:</label>
            <input id="cpassword" name="cpassword" type="password" required>                    
            <br />
            <input type="submit" value="Sign in">
        </form>
    </section>
    <!-- [/content] -->
    
    <footer id="footer">
        <details>
            <summary>Copyright 2013</summary>
            <p>All Rights Reserved.</p>
        </details>
    </footer>
</div>
<!-- [/page] -->
</body>
</html>
<?php  ?>  