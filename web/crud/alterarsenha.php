<?php
  if(isset($_POST['senha']) and isset($_POST['novasenha']) and isset($_POST['confirmnovasenha'])){	 
		require_once("conexao.php");
  }
?>
<?php
   session_start();
   if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"]) ){
	   header("Location: ../index.php");
	   exit;
   }   
?>

<html>
  <head>
    <title>Alterar Senha</title>
    <script type="text/javascript">
	   function successfully(){
		   setTimeout("window.location='../logout.php'",1);
	   }
	   function falhou(){
		   setTimeout("window.location='../administrador.php'",1);
	   }
	</script>
  </head>
  <body style="background-image: url('../img/fundo.png');">
  
  
      
		<?php	  
				  $senha = $_POST['senha'];
				  $novasenha = $_POST['novasenha'];
				  $confirmnovasenha = $_POST['confirmnovasenha'];
				  if($novasenha == $confirmnovasenha && $novasenha!= ''){
					 /*$senhacrip = md5($senha);*/
					  $usuario = $_SESSION["usuario"];
					  
					  $senhacrip = md5($senha);
					  
					  $sql = mysql_query("SELECT * FROM usuario where usuario = '$usuario' and senha = '$senha'") or die(mysql_error);
					  $row = mysql_num_rows($sql);
					  
					  
					  if($row > 0){
						    $senhacrip = md5($novasenha);				  
							$sql=mysql_query("UPDATE usuario SET senha = '$senhacrip' WHERE usuario = '$usuario'") or die(mysql_error);
							if($sql){
				               
							  echo "<script>alert('A senha foi alterada com sucesso, efetue o login novamente!')</script>" ;
							  
							  echo "<script> successfully() </script>";   
							}else{
								echo "<script>alert('ERRO: A senha não foi alterada!')</script>";
								echo "<script> falhou()</script>";
							}
								
					  }
					  else{
						 
						  echo "<script>alert('Senha inválida!!!')</script>";
						  echo "<script>falhou()</script>";
					  }
				}else{
					  echo "<script>alert('Confirme a senha!')</script>";
						  echo "<script>falhou()</script>";
				}
		?>
		
  </body>
</html>

