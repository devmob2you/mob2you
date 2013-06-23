<?php
//inclusão de dependencias
include_once 'lib/bcrypt.php';
include_once 'lib/bd.php';

//recebimento de variáveis via post
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//hash da senha recebida via post
$hash = Bcrypt::hash($senha);

echo $usuario;
echo '<br>';
echo $senha;
	//validação de post
	if (!empty($usuario) && !empty($senha)) {

		//cria conexão ao bd
		$Conexao = Conexao::getInstance();
		//submete a consulta ao banco
		$sql = "SELECT `senha` from `tab_usuarios` where `nome` = '$usuario'";
		$result = $Conexao->query($sql);

			//recebe valor do bd
			while($row = $result->fetch_array(MYSQLI_ASSOC)) { 
			$hash = $row['senha'];
					
			//valida usuário
			if (Bcrypt::check($senha, $hash)) {
				session_start();
				$_SESSION['user'] = $usuario; 
				$usuario_session = $_SESSION['user'];
				echo("<script language = 'javascript'> alert('Olá $usuario_session, você será redirecionado para a área administrativa'); </script>");
				echo("<script language = 'javascript'> location.href = 'admin/'; </script>");
				
			//senao validar redireciona para a página de erro
			} else {
		//	  	echo("<script language = 'javascript'> location.href = 'index-login.html'; </script>");
			}//fim validacao usuário 
					        
			}//fim while
			
//se o post não foi validado redireciona para a página de erro		
 } else {
//	echo("<script language = 'javascript'> location.href = 'index-login.html'; </script>");
}//fim else
 
?>