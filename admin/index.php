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
  <meta charset="UTF-8" />
  <title>Mob2You & Hostnect</title>
	<!-- Carrega arquivos externos -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="js/ajax_cep.js"></script> <!-- FUNÇÃO AJAX AUTOCOMPLETAR ENDEREÇOS -->
  
  <script type="text/javascript">
        $(document).ready(function(){
        //Obtem dados via POST
        $("#insert").click(function(){
        
        //Obter os valores dos campos de entrada e armazena em variáveis.
        var idCliente=$("#idCliente").val();
        var nome=$("#nome").val();
        var cpf_cnpj=$("#cpf_cnpj").val();
        var rg_ie=$("#rg_ie").val();
        var telefone=$("#telefone").val();
        var celular=$("#celular").val();
        var rua=$("#rua").val();
        var numero=$("#numero").val();
        var bairro=$("#bairro").val();
        var cidade=$("#cidade").val();
        var uf=$("#uf").val();
        var cep=$("#cep").val();
        var email=$("#email").val();
        var observacao=$("#observacao").val();
        
        //Usei o método $.post() pra chamar o arquivo insert.php. Isso é uma requisição AJAX Vitão!
        $.post('control/insert.php', {nome: nome, cpf_cnpj: cpf_cnpj, rg_ie: rg_ie, telefone: telefone, celular: celular, 
            rua: rua, numero: numero, bairro: bairro, cidade: cidade, uf: uf, cep: cep, email: email, observacao: observacao},
        function(data){
        $("#message").html(data);
        $("#message").hide();
        $("#message").fadeIn(1500); //Fade in the data given by the insert.php file
        });
        return false;
        });
        });
    </script>
  
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
	            ítens Estoque
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
            <!-- <form class="well" method="post" action="op_clientes.php"> -->
		<div class="esquerdo" style="float:left;">
                    <label>Nome Completo</label><input type="text" id="nome" name="nome" class="span3" autofocus required>
                    <label>CPF/CNPJ</label><input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="xxxxxxx - apenas número" class="span3">
                    <label>IE/RG</label><input type="text" id="rg_ie" name="rg_ie" class="span3">
                    <label>Telefone</label><input type="text" id="telefone" name="telefone" placeholder="(DDD)+número" class="span3" required>
                    <label>Celular</label><input type="text" id="celular" name="celular" placeholder="(DDD)+número" class="span3" required>
                    <br><br>
                            <button class="btn btn-primary" id="insert" href="#">Cadastrar</button>
                            <!-- <a id="insert" title="Inserir Dados" href="#">Clique para inserir!</a> -->
                            <button class="btn">Cancelar</button><br />
                            <div id="message"></div>
		</div>
               <form id="form1" name="form1" method="get" action="">
		<div class="centro" style="float:left; margin-left: 5%;">
                <label>CEP</label><input type="text" name="cep" id="cep" placeholder="1400000 (apenas número)" class="span3"  required pattern="\d{5}-?\d{3}">    
		<label>Bairro</label><input type="text" name="bairro" id="bairro" class="span3">
		<label>Cidade</label><input type="text" name="cidade" id="cidade" class="span3">
		<label>Estado</label><input type="text" name="uf" id="uf" class="span3">    
		</div>
		<div class="direito" style="float:left; margin-left: 5%;">
                        <label>Endereço</label><input type="text" name="rua" id="rua" class="span3">
                </form> 
                        <label>Número</label><input type="text" id="numero" name="numero" class="span3">
                        <label>Email</label><input type="email" id="email" name="email" class="span3">
			<label>Observação</label><textarea type="text" id="observacao" name="observacao" class="span3"></textarea>
		</div>
		</form>
        <!-- </form> -->
	</div>
        
	<!-- Aba fornecedor -->
	<div id="fornecedor">
		<form class="well">
		<div class="esquerdo" style="float:left;">
			<label>Fornecedor</label><input type="text" class="span3" autofocus required>
			<label>CPF/CNPJ</label><input type="text" placeholder="xxxxxxx - apenas número" class="span3">
			<label>IE/RG</label><input type="text" class="span3">
			<label>Celular</label><input type="text" placeholder="(DDD)+número" class="span3" required>
                        <label>Telefone</label><input type="text" placeholder="(DDD)+número" class="span3" required>
			<br><br><button class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-primary">Pesquisar</button>
                                <button class="btn">Cancelar</button>
		</div>
		<div class="centro" style="float:left; margin-left: 5%;">
		<label>Rádio/Nextel</label><input type="text" class="span3">
                <label>Endereço</label><input type="text" class="span3">
		<label>Bairro</label><input type="text" class="span3">
		<label>Cidade</label><input type="text" class="span3">
                <label>Estado</label><select name="uf">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AM">Amazonas</option>
                    <option value="AP">Amapá</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="PR">Paraná</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SE">Sergipe</option>
                    <option value="SP">São Paulo</option>
                    <option value="TO">Tocantins</option>
                </select>
		</div>
		<div class="direito" style="float:left; margin-left: 5%;">
			<label>CEP</label><input type="text" placeholder="1400000 (apenas número)" class="span3" required pattern="\d{5}-?\d{3}">
                        <label>Email</label><input type="email" class="span3">
                        <label>Site</label><input type="text" class="span3">
                        <label>Contato</label><input type="text" class="span3">
			<label>Observação</label><textarea type="text" class="span3"></textarea>
		</div>
		
		</form>
	</div>
	
        <!-- Aba categoria -->
	<div id="categoria">
		<form class="well">
		<div class="esquerdo" style="float:left;">
			<label>Categoria</label><input type="text" class="span3" autofocus required>
			<br><br><button class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-primary">Pesquisar</button>
                                <button class="btn">Cancelar</button>
		</div>
		</form>
	</div>
	
	<!-- Aba produto -->
	<div id="produto">
		<form class="well">
		<div class="esquerdo" style="float:left;">
                    <label>Descrição</label><input type="text" class="span3" autofocus required>
                    <label>Valor de Compra</label><input type="text"  class="span3">
                        <label>Valor de Venda</label><input type="text"  class="span3" required>
			<label>Medida</label>
                        <select id = "medida" name="medida">
                          <option value = "UN">UN</option>
                          <option value = "PC">PC</option>
                          <option value = "HR">HR</option>
                        </select>
			<br><br><button class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-primary">Pesquisar</button>
                                <button class="btn">Cancelar</button>
		</div>
		<div class="centro" style="float:left; margin-left: 5%;">
		<label>Fornecedor</label>
                        <select id = "fornecedor" name="fornecedor">
                          <option value = "1">MegaCell Celulares</option>
                          <option value = "2">Raí Acessórios</option>
                          <option value = "3">Roxinha Peças</option>
                        </select>
                <label>Categoria</label>
                        <select id = "categoria" name="categoria">
                          <option value = "1">Acessórios</option>
                          <option value = "2">Peças</option>
                          <option value = "3">Hardware</option>
                        </select>
		<label>Cód. Barras</label><input type="text" class="span3">
		<label>Observação</label><textarea type="text" class="span3"></textarea>
		</div>
                </form>
	</div>
	
	<!-- Aba usuario -->
	<div id="usuario">
		<form class="well">
		<div class="esquerdo" style="float:left;">
			<label>Usuário</label><input type="text" class="span3" placeholder="nome@servidor.com.br" autofocus required>
                        <label>Senha</label><input type="text" class="span3" required>
                        <label>Selecione o nível</label>
                        <select id = "nivel" name="nivel">
                          <option value = "0">Vendedor</option>
                          <option value = "1">Administrador</option>
                        </select>
			<br><br><button class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-primary">Pesquisar</button>
                                <button class="btn">Cancelar</button>
		</div>
		</form>
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