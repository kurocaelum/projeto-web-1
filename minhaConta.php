
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
        <a href="sairLogged.php" action="lg" class="w3-button2 w3-block">Sair</a>
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

<div id="conteudocentral" style="margin-top: 50px; margin-bottom: 50px;">
  <form class="w3-container w3-card-4" style="margin-top: 0px; margin-bottom: 35px;">
    <pre><h2>Cadastramento  de  Produto</h2></pre>

    <p><label>*Titulo: </label>
      <input class="w3-input w3-border" name="nome" type="text"  size="50" required>
    </p>

    <p style="padding-top: 20px;"><label>*Categoria:</label>&ensp;
      <select name="categoria" style=" padding: 3px;">
        <option value="selecione">Selecione</option>
        <option value="eletronicos">Eletrônicos</option> 
        <option value="esporte">Esportes</option>
        <option value="lazer">Lazer</option>
        <option value="entretenimento">Entretenimento</option>
        <option value="musica">Música</option>
        <option value="casaJardim">Casa e Jardim</option>
        <option value="modaAcessorios">Moda e Acessórios</option>
      </select>
    </p>
    <div class="form-group row" style="padding-top: 20px;">
      <label for="inputPassword" class="col-sm-2 form-control-label">*Comprimento:</label>
        <div class="input-group">
          <input size="12" type="text" name="temp" class="form-control" aria-label="temperature" required="">
          <span class="input-group-addon">
          <select style="padding: 3px;">
              <option value="C"> m</option>
              <option value="F"> cm</option>
              <option value="K"> mm</option>
            </select></span>
        </div>
    </div>
    <div class="form-group row" style="margin-top: 20px;">
      <label for="inputPassword" class="col-sm-2 form-control-label">*Altura:</label>
        <div class="input-group">
          <input size="12" type="text" name="temp" class="form-control" aria-label="temperature" required="">
          <span class="input-group-addon">
          <select style="padding: 3px;">
              <option value="C"> m</option>
              <option value="F"> cm</option>
              <option value="K"> mm</option>
            </select></span>
        </div>
    </div>
    <div class="form-group row" style="margin-top: 20px;">
      <label for="inputPassword" class="col-sm-2 form-control-label">*Largura:</label>
        <div class="input-group">
          <input size="12" type="text" name="temp" class="form-control" aria-label="temperature" required="">
          <span class="input-group-addon">
          <select style="padding: 3px;">
              <option value="C"> m</option>
              <option value="F"> cm</option>
              <option value="K"> mm</option>
            </select></span>
        </div>
    </div>
    <div style="margin-top: 40px;">
      <p><label> Adicionar imagens: </label></p>
      <div style="width: 25%; border-style: ridge;">
        <input style="padding-top: 5px;" type="image" src="imagens/addImagem.png" width="60px"/>
        <input type="file" id="my_file"  style="display: none;"/>
        <input style="padding-top: 5px; margin-left: 20px;" type="image" src="imagens/addImagem.png" width="60px"/>
        <input type="file" style="display: none;"/>
        <input style="padding-top: 5px; margin-left: 20px;" type="image" src="imagens/addImagem.png" width="60px"/>
        <input type="file" style="display: none;"/>
      </div>
    </div>
    <div style="margin-top: 40px; width: 35%;">
      <p>Descrição: </p>
      <textarea style="width: 100%;" name="comentário" rows="10" cols="40">Descrição detalhada do produto....</textarea>
    </div>
    <button style="width: 170px; color:#000; background-color:#ccc;" class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Enviar</button>
  </form>
</div> 


<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Escambo - Site de trocas</h4>
  <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
</footer>

<script >
  $(document).ready(function() {
    $("#menu a").click(function(e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $("#conteudocentral").load( href +" #conteudocentral");
    });
  });
</script>

<script >
document.getElementById('MyImage').onchange = function(e) {
    var imageFile = this.files[0];
    var url = window.URL.createObjectURL(imageFile);
    someImageTag.src = url;
}; 
</script>

<script>
$("input[type='image']").click(function() {
    $("input[id='my_file']").click();
});
</script>