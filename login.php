<?php
session_start();  
$_SESSION["user"] = "noname";
$username = null;
$password = null;
$getuser = null;
$getpass = null;
$auth = FALSE;
$errormsg = "";
$pagina  = $_SERVER['HTTP_REFERER'];
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $users=fopen("users.txt",r) or die("unable to open file!");
        while(!feof($users) and !$auth) {
            $usersline = fgets($users);
            $getuser = strtok($usersline, ":");
            $getpass = strtok(":");
            $getpass = rtrim($getpass,"\n");
            
            if (($username == $getuser) && ($password == $getpass)) {
                $auth = TRUE;
           }
        } //end while
        if ($auth) {
            $_SESSION["user"] = $username; 
            $_SESSION['logado'] = "Sucesso!!";
            header("Location: home.php");
        }
        else {
            $errormsg = "Invalir username or password";
            $_SESSION['falha'] = "senha ou nome do usuário incorreto!!";
            header("Location: ". $pagina);
            echo $errormsg;
        }
    } else {
       $errormsg = "Username or password cannot be empty";
        echo $errormsg;
    }
} 
?>