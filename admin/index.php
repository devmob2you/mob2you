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
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="../css/style.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
 <div id="header">
 	<div class="logo"><img src="imagens/logo.png"></div>
 	<div class="sistema">
 	<b>Vers�o</b>: Web ERP v1.0<br>
 	<b>Usu�rio</b>: <?php echo $_SESSION['user']?> <br><a href="sair">Sair</div>
 </div>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Cadastro</a></li>
    <li><a href="#tabs-2">Vendas</a></li>
    <li><a href="#tabs-3">Financeiro</a></li>
    <li><a href="#tabs-4">Utilit�rios</a></li>
    <li><a href="#tabs-5">Ajuda</a></li>
  </ul>
  <div id="tabs-1">
    <p>Vit�o, aqui ficar� a �rea de cadastro. Cadastro de usu�rios, produtos, fornecedores, clientes, adicionar itens ao estoque, cadastro da empresa que utilizar� o WEB-ERP e etc...</p>
  </div>
  <div id="tabs-2">
    <p>Vit�o, aqui ficar� a �rea de vendas (efetuar vendas, or�amentos, lan�amentos, movimenta��es no turno) e etc...</p>
  </div>
  <div id="tabs-3">
    <p>Vit�o, aqui ficar� a �rea do financeiro (consultar pagamentos/recebimentos, lan�amento financeiro, plano de contas, relatórios financeiro) e etc...</p>
    <p>Parte com complexidade m�dia.</p>
  </div>
  <div id="tabs-4">
    <p>Vit�o, aqui ficar� a �rea de utilit�rios (calculadora, busca rapida de clientes, produtos e fornecedores, aviso de estoque baixo, aviso de O.S à vencer 90 dias, bakcup do banco de dados, etc)</p>
  </div>
  <div id="tabs-5">
    <p>Vit�o, aqui ficar� a �rea de ajuda aos usu�rios do WEB-ERP (manual de uso, central de d�vidas, atualiza��o de sistema)</p>
  </div>
  
</div>

<div id="rodape">
<center><p>Mob2You <?php echo date(Y);?>. Todos os direitos reservados.</p></center>
</div>

</body>
</html>