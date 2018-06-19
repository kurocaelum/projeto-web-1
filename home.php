<!DOCTYPE html>
<html>
<title>Escambo</title>
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
</style>
<body>

<!-- Links (sit 	on top) -->
<div class="w3-top">
  <?php session_start();
      if (!isset($_SESSION['logado'])) { ?>
    <div class="w3-row w3-large w3-light-grey">
      <div class="w3-col s3">
          <a href="#home.php" class="w3-button2 w3-block">Início</a>
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
<!-- Content -->
<div class="w3-content" style="max-width:1100px; margin-top:60px ;margin-bottom:80px;">

  <div class="w3-panel column">
    <h1><img src="imagens/logo.png" style="height: 70px;"></a></h1>
  </div>
  <form class="form-wrapper" style="max-height: 47px; max-width: 50%; margin-top:20px; margin-bottom: 10px; float: right; margin-right: 15px;"> 
    <input class="fonte" type="text" id="search" placeholder="Buscar produtos..." required style="height: 30px; max-width: 74%;">
    <input type="submit" value="Buscar" id="submit" style="max-height: 30px; max-width: 20%;">
  </form>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides" style="max-height: 460px;"">
      <img src="imagens/escambo.jpg" style="width:100%; max-height: 460px;">
    </div>
    <div class="w3-display-container mySlides" style="max-height: 460px;">
      <img src="imagens/carinho3.jpg" style="width: 100%; max-height:460px;">
    </div>
    <div class="w3-display-container mySlides" style="max-height: 460px;">
      <img src="imagens/your-handshake2.jpg" style="width:100%; max-height: 460px;">
    </div>

    <!-- Slideshow next/previous button2s -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
      
      <div class="w3-center">
        <span style="border-color:#a9a9a9 !important;" class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span style="border-color:#a9a9a9 !important;" class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span style="border-color:#a9a9a9 !important;" class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>

  <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Produtos em destaque</span>
  </div>

  <!-- Produtos que estão em destaque -->
  <div class="w3-row-padding" id="about" style="display: flex; flex-wrap: wrap;">
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="imagens/camera.png" alt="John" style="width:100%;">
        <div class="w3-container">
          <h3>JNikon Coolpix L810</h3>
          <p>Câmera Digital Semiprofissional seminova. Sensor CCD de 16.1 megapixels, lente de cristal NIKKOR ED com zoom de 26xTela LCD de 3.</p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom" >
      <div class="w3-card-4">
        <a href="produto.php"><img src="imagens/c1.jpg" alt="Mike" style="width:100%;"></a>	
        <div class="w3-container"> 
          <h3>Bicicleta</h3>       
          <p>Bicicleta Mountain Bike Aro 29 Jaws V-Brake Mormaii - 2011857. Opção ideal para quem quer sair por ai sem preocupação e de forma saudável.</p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="imagens/relogio.jpg" alt="Jane" style="width: 100%;">
        <div class="w3-container">
          <h3>Relógio Geneva</h3>
          <p>Relógio Masculino Geneva Pulseira De Couro, Este modelo é ideal para quem procura um relógio versátil, que combina com qualquer ocasião.</p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="imagens/tenis.jpg" alt="Mike" style="width: 100%">
        <div class="w3-container">
          <h3>Tênis branco/cinza</h3>
          <p>Sapatênis em couro branco e em tecido cinza (tweed), cadarço branco e detalhe em velcro com logo bordado. tamanho 7 us, 38 br.</p>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- Buscar produtos -->

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Escambo - Site de trocas</h4>
  <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
</footer>


<script>
// Slideshow
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
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
