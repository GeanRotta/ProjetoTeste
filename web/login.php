<?php
  if(isset($_POST['usuario']) and isset($_POST['senha'])){	 
		require_once("crud/conexao.php");
  }
?>
<html>
  <head>
    <title>Autenticando usuário</title>
    <script type="text/javascript">
	   function loginsuccessfully(){
		   setTimeout("window.location='administrador.php'",1);
	   }
	   function loginfalhou(){
		   setTimeout("window.location='index.php'",1);
	   }
	</script>
  </head>
  <body style="background-image: url('../img/fundo.png');">
  
  
      
		<?php	  
				  $usuario = $_POST['usuario'];
				  $senha = $_POST['senha'];
				   $senhacrip = md5($senha);
				  
				  $sql = mysql_query("SELECT * FROM usuario where usuario = '$usuario' and senha = '$senhacrip'") or die(mysql_error);
				  $row = mysql_num_rows($sql);
				  
				  if($row > 0){
					  
					  session_start();
					  $_SESSION['usuario'] = $_POST['usuario'];
					  $_SESSION['senha'] = $_POST['senha'];
					  						
				      echo "<script>  loginsuccessfully() </script>";
				  }
				  else{
					 
					  echo "<script>alert('Nome de usuario ou senha invalido!')</script>";
				      echo "<script> loginfalhou()</script>";
				  }
		?>
		
  </body>
</html>