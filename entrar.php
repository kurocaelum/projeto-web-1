<!DOCTYPE html>
<html>
<title>Entrar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="searchbox.css">
<!-- <link rel="stylesheet" href="w3.css"> -->
<link rel="stylesheet" type="text/css" href="w3-1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="jquery.mask.min.js"></script>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="jquery.maskedinput.min.js"></script>

<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.column {float: left; margin-top: 0;}
.alert {padding: 20px; background-color: #f44336; color: white;}
.closebtn {margin-left: 15px; color: white;
    font-weight: bold; float: right;
    font-size: 22px; line-height: 20px;
    cursor: pointer; transition: 0.3s;
}
.closebtn:hover {color: black;}
ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: white;
}
ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: ">\00a0";
}
ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}
ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}
</style>
</style>
<body>
<div class="w3-top">
	<?php session_start();
    	if (!isset($_SESSION['logado'])) { ?>
  	<div class="w3-row w3-large w3-light-grey">
    	<div class="w3-col s3">
      		<a href="home.php" class="w3-button2 w3-block">Início</a>
    	</div>
    	<div class="w3-col s3">
      		<a href="categorias.php" class="w3-button2 w3-block">Categorias</a>
    	</div>
	    <div class="w3-col s3">
	      <a href="sobre.php" class="w3-button2 w3-block">Sobre</a>
	    </div>
      <div class="w3-col s3"> 
          <a href="cadastroUsuario.php" class="w3-button2 w3-block">Cadastre-se</a>
      </div>
    	<div class="w3-col s3">
    	<a href="entrar.php" class="w3-button2 w3-block">Entrar</a>
    	</div>
    </div>
    <?php } else { ?>
    <div class="w3-row w3-large w3-light-grey">
      <div class="w3-col s3">
        <a href="home.php" class="w3-button w3-block">Início</a>
      </div>
      <div class="w3-col s3">
        <a href="categorias.php" class="w3-button w3-block">Categorias</a>
      </div>
      <div class="w3-col s3">
        <a href="sobre.php" class="w3-button w3-block">Sobre</a>
      </div>
      <div class="w3-col s3">
        <a href="minhaConta.php" class="w3-button w3-block">Acessar conta</a>
      </div>
      <div class="w3-col s3">
        <a href="sair.php" action="lg" class="w3-button w3-block">Sair</a>
      </div>
    <?php } ?>
	</div>
</div>


<div class="w3-panel" style="margin-top: 55px; margin-bottom: 0px;">
    <h1><img src="imagens/logo.png" style="height: 70px; margin-top: 0px;"></h1>
</div>


<ul class="breadcrumb" style="margin-top: 10px; margin-bottom: 0px;">
  <li><a href="home.php"><img style="width: 20px; height: 20px;" src="imagens/casa.jpg"></a></li>
  <li>Entrar</li>
</ul>

<div class="w3-container w3-card-4" style="width: 100%; margin-bottom: 30px; ">
  <div class="w3-center" style="width: 30%; height: 30%; margin: auto;">
    <form class="w3-container" action="login.php" method="post" style="margin-top: 30px; margin-bottom: 20px;">
      <div class="w3-section">
          <label style="font-size: 20px;" for="username" > Usuário </label>
          <input id="username" class="w3-input w3-border w3-margin-bottom" style="width: 100%; padding:8px;" type="text" placeholder="Usuário" name="username" required>
          <label style="font-size: 20px;" for="password"> Senha </label>
          <input id="password" class="w3-input w3-border" style="width: 100%; padding:8px;" type="password" placeholder="Senha" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Entrar</button>
          <?php  if(isset($_SESSION['falha'])){ ?>
                <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Usuário ou senha incorreta.</strong>
                </div>
            <?php unset($_SESSION['falha']); } ?>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Lembre-se de mim
      </div>
    </form>
  </div>
</div>

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Escambo - Site de trocas</h4>
  <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
</footer>
