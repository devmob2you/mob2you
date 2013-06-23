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
 	<b>Versão</b>: Web ERP v1.0<br>
 	<b>Usuário</b>: <?php echo $_SESSION['user']?> <br><a href="sair">Sair</div>
 </div>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Cadastro</a></li>
    <li><a href="#tabs-2">Vendas</a></li>
    <li><a href="#tabs-3">Financeiro</a></li>
    <li><a href="#tabs-4">Utilitários</a></li>
    <li><a href="#tabs-5">Ajuda</a></li>
  </ul>
  <div id="tabs-1">
    <p>Vitão, aqui ficará a área de cadastro. Cadastro de usuários, produtos, fornecedores, clientes, adicionar itens ao estoque, cadastro da empresa que utilizará o WEB-ERP e etc...</p>
  </div>
  <div id="tabs-2">
    <p>Vitão, aqui ficará a área de vendas (efetuar vendas, orçamentos, lançamentos, movimentações no turno) e etc...</p>
  </div>
  <div id="tabs-3">
    <p>Vitão, aqui ficará a área do financeiro (consultar pagamentos/recebimentos, lançamento financeiro, plano de contas, relatÃ³rios financeiro) e etc...</p>
    <p>Parte com complexidade média.</p>
  </div>
  <div id="tabs-4">
    <p>Vitão, aqui ficará a área de utilitários (calculadora, busca rapida de clientes, produtos e fornecedores, aviso de estoque baixo, aviso de O.S Ã  vencer 90 dias, bakcup do banco de dados, etc)</p>
  </div>
  <div id="tabs-5">
    <p>Vitão, aqui ficará a área de ajuda aos usuários do WEB-ERP (manual de uso, central de dúvidas, atualização de sistema)</p>
  </div>
  
</div>

<div id="rodape">
<center><p>Mob2You <?php echo date(Y);?>. Todos os direitos reservados.</p></center>
</div>

</body>
</html>