<?php
//inclus�o de dependencias
include_once 'lib/bcrypt.php';
include_once 'lib/bd.php';

//recebimento de vari�veis via post
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//hash da senha recebida via post
$hash = Bcrypt::hash($senha);
 

	//valida��o de post
 	if (!empty($usuario) && !empty($senha)) {

 	//'instancia' singleton
    $Conexao = Conexao::getInstance();

    //verifica se o usuario j� existe
    $sql = "select * from `tab_usuarios` where nome = '$usuario'";
    $result = $Conexao->query($sql);    
    if ($result->num_rows > 0) {
    	echo("<script language = 'javascript'> alert('Usu�rio $usuario j� existe no banco de dados!'); </script>");
   		echo("<script language = 'javascript'> location.href = 'index.html'; </script>");
 	
   		//sen�o existir
    } else {
    
    //insere registro
   	$sql2 = "INSERT INTO `tab_usuarios`(`nome`, `senha`) VALUES ('$usuario', '$hash')";
    $result2 = $Conexao->query($sql2);

    //confere se o registro foi inserido com �xito
  if ($result2 > 0) { 	 	
 	   	echo("<script language = 'javascript'> alert('Usu�rio $usuario cadastrado com sucesso'); </script>");
		echo("<script language = 'javascript'> location.href = 'index.html'; </script>");
	}
 	    
 	//fecha a conexao
    $Conexao->close();
    }   
    //caso n�o passe na valida��o por post
 	} else {
 		echo 'por gentileza, utilize o form para realizar o processo corretamente.';
 		echo("<script language = 'javascript'> location.href = 'index-login.html'; </script>");
 	}
 	
?>