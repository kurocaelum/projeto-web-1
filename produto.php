<!DOCTYPE html>
<html>
<title>Produto</title>
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
.demo {cursor:pointer}
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
<body>

<!-- Links (sit   on top) -->
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
        <a href="minhaConta.php" class="w3-button2 w3-block"> Acessar conta</a>
      </div>
      <div class="w3-col s3">
        <a href="sair.php" action="lg" class="w3-button2 w3-block"> Sair</a>
      </div>
    <?php } ?>
  </div>
</div>
 
 <div class="w3-panel" style="margin-top: 55px; margin-bottom: 0px; ">
    <h1><img src="imagens/logo.png" style="height: 70px; margin-top: 0px;"></h1>
</div>

<div class="w3-panel" style="width: 100%; margin: auto;">
  <div style="width: 54%; float: left;">
    <ul class="breadcrumb" style="margin-top: 0px; margin-bottom: 0px; margin-left: 27px;">
      <li><a href="home.php"><img style="width: 20px; height: 20px;" src="imagens/casa.jpg"></a></li>
      <li><a style="color:black;" href="">Esportes e Lazer</a></li>
      <li>Bicicleta</li>
    </ul>
    <div class="w3-content w3-display-container" style="max-height: 400px; max-width: 500px; margin-left: 40px; margin-bottom: 180px;">
      <div class="w3-content" style="max-width: 600px; max-height: 600px;">
        <div style="border-style: ridge;">
          <img class="mySlides" src="imagens/c1.jpg" style="width:100%; max-height: 420px;">
          <img class="mySlides" src="imagens/c2.jpg" style="width:100%; max-height: 420px;">
          <img class="mySlides" src="imagens/c3.jpg" style="width:100%; max-height: 420px;">
        </div>
        <div class="w3-row-padding w3-section">
          <div class="w3-col s4">
            <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/c1.jpg" style="width:100%;" onclick="currentDiv(1)">
          </div>
          <div class="w3-col s4">
            <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/c2.jpg" style="width:100%" onclick="currentDiv(2)">
          </div>
          <div class="w3-col s4">
            <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/c3.jpg" style="width:100%" onclick="currentDiv(3)">
          </div>
        </div>
      </div>
      <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <div style="padding-top: 30px; margin-left: 38px;">
      <h2> Descrição do produto </h2>
      <p>Bicicleta Mountain Bike Aro 29 Jaws V-Brake Mormaii - 2011857. Opção ideal<br> para quem quer sair por ai sem preocupação e de forma saudável.</p> 
    </div>
  </div>
  <div class=" w3-row-padding" style="width: 46%; float: right; margin-top: 0px;">
    <div style="margin-top: 30px;">
      <img src="imagens/user.png" style="width: 190px;">
      <p style="margin-left: 55px; margin-top: -5px;">Fulano de tal</p>
    </div>
    <div>
      <img src="imagens/estrelas.jpg" style="width: 180px; height: 30px; margin-top: 20px; margin-left: 10px;">
      <p style="margin-left: 58px; margin-top: -1px;">10 avaliações </p>
    </div>
     <div>
      <a href=""><img src="imagens/chat.png" style="width: 120px; height: 120px; margin-left: 35px; margin-top: 20px;"></a>
      <p style="margin-left: 85px; margin-top: -5px;">Chat</p>
    </div>
    <p style="margin-left: 5px; margin-top: -35px;" id="demo"></p>
  </div>
</div>
<div>
  <footer class="w3-container w3-padding-32 w3-light-grey w3-center">
    <h4>Escambo - Site de trocas</h4>
    <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
  </footer>
<div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<script async custom-element="amp-form" src="amp-form-0.1.js"></script>

</body>
</html>

