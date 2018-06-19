<!DOCTYPE html>
<html>
<title>Categorias</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="searchbox.css">
<!-- <link rel="stylesheet" href="w3.css"> -->
<link rel="stylesheet" type="text/css" href="w3-1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vertical-menu2.css">
<script type="text/javascript" src="jquery.mask.min.js"></script>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.column {float: left; margin-top: 0;}
a {text-decoration: none;}

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
<body>

<!-- Links (sit on top) -->
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

<!-- Menu vertical -->
<div id="menu" class="vertical-menu" style="margin-top: 30px; margin-bottom: 30px; margin-left: 10px">
  <a href="categorias.php" class="header">Categorias</a>
  <a href="categorias.php" class="identificador active">Eletrônicos</a>
  <a href="esportes.php" class="identificador">Esportes</a>
  <a href="lazer.php" class="identificador">Lazer</a>
  <a href="entretenimento.php" class="identificador">Entretenimento</a>
  <a href="musica.php" class="identificador">Música</a>
  <a href="domesticos.php" class="identificador">Domésticos</a>
  <a href="modaAcessorios.php" class="identificador">Moda e acessórios</a>
</div>

<!-- Content -->
<div id="conteudocentral" class="w3-content" style="max-width:1100px; margin-top:0px ;margin-bottom:80px;">
  <ul class="breadcrumb" style="margin-left: 140px; margin-bottom: 0px;">
    <li><a href="home.php"><img style="width: 20px; height: 20px;" src="imagens/casa.jpg"></a></li>
     <li>Categorias</li>
  </ul> <br>

	<div class="w3-row-padding" id="categorias" style="display: flex; flex-wrap: wrap;">
		  <div class="w3-third w3-margin-bottom">
	      <div class="w3-card-4">
      		<img src="imagens/produtos/violao.jpeg" alt="produto" style="width:100%; height:180px;">
	        <div class="w3-container">
      			<h3>Violão</h3>
            <p class="produto"></p>
	        </div>
	      </div>
	    </div>
	</div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center" style="clear: both;">
  <h4>Escambo - Site de trocas</h4>
  <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
</footer>

<script>
  // Seletor do menu vertical
	var header = document.getElementById("menu");
	var btns = header.getElementsByClassName("identificador");
	for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function() {
			var current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace(" active", "");
			this.className += " active";
		});
	}

</script>
</body>
</html>

