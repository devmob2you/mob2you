<?php
//Configuração do banco de dados
 $con = mysql_connect("mob2you.com.br","mob2you_erp","2wsx@dr5");
 if (!$con) {
 die('Impossível conectar no banco de dados: ' . mysql_error());
 }
 mysql_select_db("mob2you_erp", $con);
 //Pega os dados via post da index.php
 $idCliente=$_POST['idCliente'];
 $nome=$_POST['nome'];
 $cpf_cnpj=$_POST['cpf_cnpj'];
 $rg_ie=$_POST['rg_ie'];
 $telefone=$_POST['telefone'];
 $celular=$_POST['celular'];
 $rua=$_POST['rua'];
 $numero=$_POST['numero'];
 $bairro=$_POST['bairro'];
 $cidade=$_POST['cidade'];
 $uf=$_POST['uf'];
 $cep=$_POST['cep'];
 $email=$_POST['email'];
 $observacao=$_POST['observacao'];
 
 //Inserindo dados dentro da tabela tab_clientes
$query=mysql_query("INSERT INTO tab_clientes(idCliente, nome, cpf_cnpj, rg_ie, 
    telefone, celular, rua, numero, bairro, cidade, uf, cep, email, observacao) 
    VALUES('$idCliente','$nome','$cpf_cnpj', '$rg_ie', '$telefone', '$celular', '$rua', 
        '$numero', '$bairro', '$cidade', '$uf', '$cep', '$email', '$observacao')");
if($query){
echo "Cadastro de $nome inserido com sucesso!";
}
else{ echo "Erro ao cadastrar!"; }
?>