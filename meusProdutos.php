
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
        <a href="home.php" class="w3-button2 w3-block">Início</a>
      </div>
      <div class="w3-col s3">
        <a href="categorias.php" class="w3-button2 w3-block">Categorias</a>
      </div>
      <div class="w3-col s3">
        <a href="sobre.php" class="w3-button2 w3-block">Sobre</a>
      </div>
      <div class="w3-col s3">
        <a href="minhaConta.php" class="w3-button2 w3-block">Acessar conta</a>
      </div>
      <div class="w3-col s3">
        <a href="sair.php" action="lg" class="w3-button2 w3-block">Sair</a>
      </div>
    <?php } ?>
	</div>
</div>

<div class="w3-panel" style="margin-top: 55px; margin-bottom: 0px;">
    <h1><img src="imagens/logo.png" style="height: 70px; margin-top: 0px;"></h1>
</div>

<ul class="breadcrumb" style="margin-top: 10px; margin-bottom: 0px;">
  <li><a href="home.php"><img style="width: 20px; height: 20px;" src="imagens/casa.jpg"></a></li>
  <li>Minha Conta</li>
</ul>

<div id="menu" class="w3-row w3-large w3-light-grey" style="margin-bottom: 30px;">
	<div class="w3-col s4">
		<a href="minhaConta.php" class="w3-button2 w3-block">Cadastrar Produto</a>
	</div>
	<div class="w3-col s4">
		<a href="meusProdutos.php" class="w3-button2 w3-block">Meus Produtos</a>
	</div>
	<div class="w3-col s4">
	  	<a href="chat.php" class="w3-button2 w3-block">Mensagens de Chat</a>
	</div>
</div>

<div class="w3-center" id="conteudocentral" style="margin-top: 50px; margin-bottom: 50px;">
  <h2> Não há produtos cadastrados <h2>
  <img src="imagens/carinho.jpg" style="width: 250px; height: 300px;">
</div> 


<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Escambo - Site de trocas</h4>
  <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
</footer>
