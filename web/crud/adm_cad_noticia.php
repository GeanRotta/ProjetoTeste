<?php
  require_once("conexao.php");
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
    <script type="text/javascript">
	   
	   function Direciona(){
		   setTimeout("window.location='../administrador.php'",1);
	   }
	</script>
  </head>
  <body> 
		<?php
		   if(!isset($_POST["nome"]) || !isset($_POST["descricao"])){
			    echo "<script> alert('Nao foi possivel efetuar o cadastro!'); </script>";
		        echo "<script> Direciona(); </script>";
		   }
		   else{
			    
				$nome = $_POST["nome"];
				$descricao = $_POST["descricao"];
				$origem = $_FILES["flFoto"]["tmp_name"];				
				$destino = "imgnoticia/".md5(time()*6).".jpg";
				
				$SQL = "INSERT INTO noticia(n_nome,n_descricao,n_img) VALUES('".$nome."','".$descricao."','".$destino."')";
                
                
				$query = mysql_query($SQL);
				if($query){
					 
					 move_uploaded_file($origem, $destino);
					 
					echo "<script> alert('Cadastrado com sucesso!'); </script>";
					echo "<script> Direciona();</script>";
					mysql_close();
				}
				else{
					echo "<script> alert('ERRO: Nao foi possivel cadastrar!'); </script>";
					echo "<script> Direciona();</script>";
				}	
		   }			   
		?>
	</body>
</html>