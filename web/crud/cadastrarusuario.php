<?php
  if(isset($_POST['novousuario']) and isset($_POST['novasenha']) and isset($_POST['confirmnovasenha'])){	 
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
    <title>Cadastrar Usuario</title>
    <script type="text/javascript">
	   function successfully(){
		   setTimeout("window.location='../administrador.php'",1);
	   }
	   function falhou(){
		   setTimeout("window.location='../administrador.php'",1);
	   }
	</script>
  </head>
  <body style="background-image: url('../img/fundo.png');">
  
  
      
		<?php	  
				  $novousuario = $_POST['novousuario'];
				  $novasenha = $_POST['novasenha'];
				  $confirmnovasenha = $_POST['confirmnovasenha'];
				  if($novasenha == $confirmnovasenha && $novasenha!= '' && $novousuario != ''){
					 $senhacrip = md5($novasenha);
					  $usuario = $_SESSION["usuario"];
					  
					  
										  
							$inserir = "insert into usuario ".
														"(usuario, senha) values ".
																		 "('$novousuario', '$senhacrip')";
										  $resultado = mysql_query($inserir, $conexao);
							if($resultado){
				               
							  echo "<script>alert('Cadastrado com sucesso!')</script>" ;
							  
							  echo "<script> successfully() </script>";   
							}else{
								echo "<script>alert('ERRO: Usuario ja existe!!!')</script>";
								echo "<script> falhou()</script>";
							}
								
				}
				else{
					  echo "<script>alert('Confirme a senha e preencha todos os campos!')</script>";
						  echo "<script>falhou()</script>";
				}
		?>
		
  </body>
</html>
