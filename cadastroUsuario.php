<!DOCTYPE html>
<html>
<title>Cadastro</title>
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

<!-- TODO 
* Searchbox
** CSS (cor, largura, etc)
** (Comentados)
* Link para suporte
-->

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
      <div class="w3-col s2">
        <a href="home.php" class="w3-button w3-block">Início</a>
      </div>
      <div class="w3-col s2">
        <a href="categorias.php" class="w3-button w3-block">Categorias</a>
      </div>
      <div class="w3-col s2"> 
        <a href="cadastroUsuario.php" class="w3-button w3-block">Cadastre-se</a>
      </div>
      <div class="w3-col s2">
        <a href="sobre.php" class="w3-button w3-block">Sobre</a>
      </div>
      <div class="w3-col s2">
        <a href="minhaConta.php" class="w3-button w3-block">Acessar conta</a>
      </div>
      <div class="w3-col s2">
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
    <li>Cadastre-se</li>
</ul>

<!-- Formulário de cadastro -->
<form class="w3-container w3-card-4" style="margin-top: 0px; margin-bottom: 35px;">
	<h2>Formulário de cadastramento</h2>
	<h4>Dados Pessoais</h4>

	<p><label>*Nome completo: </label>
		<input class="w3-input w3-border" name="nome" type="text"  size="61" required>
	</p>

	<p><label>*Data de Nascimento:</label><br>
		<input class="w3-input w3-border" type="date" name="dataNascimento" style="padding: 4px; display: inline;" required>
		<label style="margin-left: 50px;">*Sexo:</label>&emsp;<input type="radio" name="sex" value="m" required>&ensp;Feminino
		<input type="radio" name="sex" value="f" required>&ensp;Masculino
	</p>
	<br>
	<h4>Endereço&ensp;e&ensp;contato</h4>

	<p><label>*CEP:</label>
		<input type="text" id="cep-mask" placeholder="Ex.: 00000-000" size="19" style="display: block; padding: 4px;"></p>

	<p><label>*UF:</label>&ensp;
	  <select name="uf" style=" padding: 3px;">
	  	<option value="selecione">Selecione</option>
	    <option value="ac">AC</option> <option value="al">AL</option>
	    <option value="am">AM</option><option value="ba">BA</option>
	    <option value="ce">CE</option><option value="df">DF</option>
		<option value="es">ES</option><option value="go">GO</option>
	    <option value="ma">MA</option><option value="mg">MG</option>
	    <option value="ms">MS</option><option value="mt">MT</option>
	    <option value="pa">PA</option><option value="pb">PB</option>
	    <option value="pe">PE</option><option value="pi">PI</option>
	  	<option value="pr">PR</option><option value="rj">RJ</option>
	    <option value="rn">RN</option><option value="ro">RO</option>
	    <option value="rr">RR</option><option value="rs">RS</option>
	    <option value="sc">MA</option><option value="se">SE</option>
	    <option value="sp">SP</option><option value="to">TO</option>
	  </select>
	  <label style="margin-left: 90px;">*Município:</label>&ensp;
	  <select name="uf" style="padding: 3px;">
	  	<option value="selecione">Selecione</option>
	  </select>
	</p>
	<p><label>*Endereço: </label>
		<input class="w3-input w3-border" name="Endereço" type="text"  size="61"required>
	</p>
	<p><label>*Nº: </label>
		<input class="w3-input w3-border" name="numero" type="text"  size="5" style="display: inline;" required>
		<label style="margin-left: 90px;">Complemento:</label>
		<input class="w3-input w3-border" name="completo" type="text"  size="26" style="display: inline;">
	</p>
	<p>	
		<label>*Bairro:</label>
		<input class="w3-input w3-border" name="bairro" type="text"  size="19" style="display: inline;" required>
		<label style="margin-left: 45px;">*Celular: </label>
		<input class="w3-input w3-border" name="telefone" id="telefone" type="text" placeholder="Ex.: (000) 00000-0000" size="19" style="display: inline;" required="">
	</p>
	<br>
	<h4>Dados&ensp;da&ensp;conta</h4>
	<p><label>*E-mail: </label>
		<input class="w3-input w3-border" name="Endereço" type="text"  size="50" required>
	</p>
	<p><label>*Login: </label>
		<input class="w3-input w3-border" name="Endereço" type="text"  size="19" required>
	</p>
	<p><label>*Senha: </label>
		<input class="w3-input w3-border" name="Endereço" type="text"  size="19" required>
	</p>
	<p><label>*Confirme sua senha: </label>
		<input class="w3-input w3-border" name="Endereço" type="text"  size="19" required>
	</p>
	<button style="width: 170px; color:#000; background-color:#ccc;" class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Enviar</button>
</form>

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Escambo - Site de trocas</h4>
  <a href="#" class="w3-button3 w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar para o topo</a> 
</footer>

<script>
jQuery(function($){
$("#cep-mask").mask("99999-999");
$("#telefone").mask("(999) 99999-9999");
$("#campoSenha").mask("***-****");
});
</script>

</body>
</html>

