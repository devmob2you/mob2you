<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['user'])) {
	// Destrói a sessão por segurança
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
	<!-- Cabeçalho -->
 <div id="header">
 	<div class="logo"><a href="../admin"><img src="imagens/logo.png"></a></div>
 	<div class="sistema">
 	<b>Versão</b>: Web ERP v1.0<br>
 	<b>Usuário</b>: <?php echo $_SESSION['user']?> <br><a href="sair">Sair</a></div>
 </div>
 
 <!-- Sistema -->
<div id="tabs">

 <!-- Menu Principal -->
  <ul>
    <li><a href="#cadastro">Cadastro</a></li>
    <li><a href="#vendas">Vendas</a></li>
    <li><a href="#financeiro">Financeiro</a></li>
    <li><a href="#utilitarios">Utilitários</a></li>
    <li><a href="#ajuda">Ajuda</a></li>
  </ul>
  
  <!-- Conteúdo Menu Cadastro -->
  <div id="cadastro">
	<!-- Menu Secuntário Cadastro -->  
	<ul class="nav nav-pills">
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="clientes">
	            Clientes
	           </a>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="fornecedores">
	            Fornecedores
	            <!--    <b class="caret"></b> -->
	           </a>
	 <!--      <ul class="dropdown-menu">
	            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>
	            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>
	            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
	            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
	
	      </ul> -->
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="categorias">
	            Categorias
	           </a>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="produtos">
	            Produtos
	           </a>
	    </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="itensestoque">
	            Ítens Estoque
	           </a>
	      </li>
	    <li class="dropdown all-camera-dropdown">
	           <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="usuarios">
	            Usuários
	           </a>
	      </li>
	</ul>
	
	<!-- Aba cliente -->
	<div id="cliente">
		<h3>CLIENTE</h3>
	</div>
	
	<!-- Aba fornecedor -->
	<div id="fornecedor">
		<h3>FORNECEDOR</h3>
	</div>
	
		<!-- Aba categoria -->
	<div id="categoria">
		<h3>CATEGORIA</h3>
	</div>
	
	<!-- Aba produto -->
	<div id="produto">
		<h3>PRODUTOS</h3>
	</div>
	
	<!-- Aba usuario -->
	<div id="usuario">
		<h3>USUÁRIO</h3>
	</div>
	
	
	
	
  </div>
  <!-- Final Menu Secundário Cadastro -->
 
  
  <!-- Menu Secuntário Vendas -->  
  <div id="vendas">
    <p>Vitão, aqui ficará a área de vendas (efetuar vendas, orçamentos, lançamentos, movimentações no turno) e etc...</p>
  </div>
 
 
  <!-- Menu Secuntário Financeiro -->
  <div id="financeiro">
    <p>Vitão, aqui ficará a área do financeiro (consultar pagamentos/recebimentos, lançamento financeiro, plano de contas, relatÃ³rios financeiro) e etc...</p>
    <p>Parte com complexidade média.</p>
  </div>
 
 
  <!-- Menu Secuntário Utilitários -->
  <div id="utilitarios">
    <p>Vitão, aqui ficará a área de utilitários (calculadora, busca rapida de clientes, produtos e fornecedores, aviso de estoque baixo, aviso de O.S Ã  vencer 90 dias, bakcup do banco de dados, etc)</p>
  </div>
 
 
  <!-- Menu Secuntário Ajuda -->
  <div id="ajuda">
    <p>Vitão, aqui ficará a área de ajuda aos usuários do WEB-ERP (manual de uso, central de dúvidas, atualização de sistema)</p>
  </div>


<!-- Fim Menu Secuntário Vendas -->  
</div>
<!-- Fim Sistema -->

<!-- Rodapé -->
<div id="rodape">
<center><p>Mob2You <?php echo date(Y);?>. Todos os direitos reservados.</p></center>
</div>

</body>
</html>