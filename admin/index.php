<?php
// A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION)) session_start();

// Verifica se n�o h� a vari�vel da sess�o que identifica o usu�rio
if (!isset($_SESSION['user'])) {
	// Destr�i a sess�o por seguran�a
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: ../"); exit;
} 
?>
<!doctype html>
 
<html lang="pt-br">
<head>
  <meta charset="ISO-8859-1" />
  <title>Mob2You & Hostnect</title>
	<!-- Carrega arquivos externos -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  	<!-- Carrega arquivos CSS e JS -->
      <link href="../bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../bootstrap/docs/assets/js/bootstrap-dropdown.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <script src="js/scripts.js"></script>
  
  <!-- Script Tabs JQuery -->
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
	<!-- Cabe�alho -->
 <div id="header">
 	<div class="logo"><a href="../admin"><img src="imagens/logo.png"></a></div>
 	<div class="sistema">
 	<b>Vers�o</b>: Web ERP v1.0<br>
 	<b>Usu�rio</b>: <?php echo $_SESSION['user']?> <br><a href="sair">Sair</a></div>
 </div>
 
 <!-- Sistema -->
<div id="tabs">

 <!-- Menu Principal -->
  <ul>
    <li><a href="#cadastro">Cadastro</a></li>
    <li><a href="#vendas">Vendas</a></li>
    <li><a href="#financeiro">Financeiro</a></li>
    <li><a href="#utilitarios">Utilit�rios</a></li>
    <li><a href="#ajuda">Ajuda</a></li>
  </ul>
  
  <!-- Conte�do Menu Cadastro -->
  <div id="cadastro">
	<!-- Menu Secunt�rio Cadastro -->  
	<ul class="nav nav-pills">
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="clientes">
	            Clientes
	           </a>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	            Fornecedores
	               <b class="caret"></b>
	           </a>
	      <ul class="dropdown-menu">
	            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>
	            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>
	            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
	            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
	
	      </ul>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	            Categorias
	               <b class="caret"></b>
	           </a>
	      <ul class="dropdown-menu">
	            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>
	            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>
	            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
	            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
	
	      </ul>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	            Produtos
	               <b class="caret"></b>
	           </a>
	      <ul class="dropdown-menu">
	            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>
	            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>
	            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
	            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
	
	      </ul>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	            �tens Estoque
	               <b class="caret"></b>
	           </a>
	      <ul class="dropdown-menu">
	            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>
	            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>
	            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
	            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
	
	      </ul>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	            Usu�rios
	               <b class="caret"></b>
	           </a>
	      <ul class="dropdown-menu">
	            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>
	            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>
	            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
	            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
	
	      </ul>
	    </li>
	</ul>
	
	<div id="cliente">
		<h3>HA!!!</h3>
	</div>
  </div>
  <!-- Final Menu Secund�rio Cadastro -->
 
  
  <!-- Menu Secunt�rio Vendas -->  
  <div id="vendas">
    <p>Vit�o, aqui ficar� a �rea de vendas (efetuar vendas, or�amentos, lan�amentos, movimenta��es no turno) e etc...</p>
  </div>
 
 
  <!-- Menu Secunt�rio Financeiro -->
  <div id="financeiro">
    <p>Vit�o, aqui ficar� a �rea do financeiro (consultar pagamentos/recebimentos, lan�amento financeiro, plano de contas, relatórios financeiro) e etc...</p>
    <p>Parte com complexidade m�dia.</p>
  </div>
 
 
  <!-- Menu Secunt�rio Utilit�rios -->
  <div id="utilitarios">
    <p>Vit�o, aqui ficar� a �rea de utilit�rios (calculadora, busca rapida de clientes, produtos e fornecedores, aviso de estoque baixo, aviso de O.S à vencer 90 dias, bakcup do banco de dados, etc)</p>
  </div>
 
 
  <!-- Menu Secunt�rio Ajuda -->
  <div id="ajuda">
    <p>Vit�o, aqui ficar� a �rea de ajuda aos usu�rios do WEB-ERP (manual de uso, central de d�vidas, atualiza��o de sistema)</p>
  </div>


<!-- Fim Menu Secunt�rio Vendas -->  
</div>
<!-- Fim Sistema -->

<!-- Rodap� -->
<div id="rodape">
<center><p>Mob2You <?php echo date(Y);?>. Todos os direitos reservados.</p></center>
</div>

</body>
</html>