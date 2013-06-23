<?php
//Receber POST aqui...
?>
<!doctype html>
 
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <title>Web ERP v1.0 by Mob2You & Hostnect</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Cadastro</a></li>
    <li><a href="#tabs-2">Vendas</a></li>
    <li><a href="#tabs-3">Financeiro</a></li>
    <li><a href="#tabs-4">Utilitários</a></li>
    <li><a href="#tabs-5">Ajuda</a></li>
    <li><a href="#tabs-6">Sair</a></li>
  </ul>
  <div id="tabs-1">
    <p>Vitão, aqui ficará a área de cadastro. Cadastro de usuários, produtos, fornecedores, clientes, adicionar itens ao estoque, cadastro da empresa que utilizará o WEB-ERP e etc...</p>
  </div>
  <div id="tabs-2">
    <p>Vitão, aqui ficará a área de vendas (efetuar vendas, orçamentos, lançamentos, movimentações no turno) e etc...</p>
  </div>
  <div id="tabs-3">
    <p>Vitão, aqui ficará a área do financeiro (consultar pagamentos/recebimentos, lançamento financeiro, plano de contas, relatórios financeiro) e etc...</p>
    <p>Parte com complexidade média.</p>
  </div>
  <div id="tabs-4">
    <p>Vitão, aqui ficará a área de utilitários (calculadora, busca rapida de clientes, produtos e fornecedores, aviso de estoque baixo, aviso de O.S à vencer 90 dias, bakcup do banco de dados, etc)</p>
  </div>
  <div id="tabs-5">
    <p>Vitão, aqui ficará a área de ajuda aos usuários do WEB-ERP (manual de uso, central de dúvidas, atualização de sistema)</p>
  </div>
  <div id="tabs-6">
    <p>Exibe um alert e finaliza todas as sessões.</p>
  </div>
</div>
</body>
</html>