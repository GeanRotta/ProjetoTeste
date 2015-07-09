<?php
  require_once("crud/conexao.php");
?>

<?php
   session_start();
   if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"]) ){
	   header("Location: index.php");
	   exit;
   }   
?>

<html>
  <head>
    <script type="text/javascript">
     function excluirnoticia(codigo, titulo){
		 if(window.confirm("Deseja excluir a notícia: " + titulo))
			 window.location = 'crud/adm_del_noticia.php?cod=' + codigo;
	 }
  </script>
    <title>Administrador</title>
	
	  <link href='css/styleadm.css' rel='stylesheet'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

   
  </head>
  
   <body style="background-color:#000033;">
    <div class="tudo"> 
	       
		   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#elementoCollapse1">
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
								</button>
				
				          <a href="#"><img src="img/Logo1.png"></a>
						  
				</div>
				<div class="collapse navbar-collapse menu-navegacao" id="elementoCollapse1">
				  <ul class="nav navbar-nav navbar-right">				
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
			
			
			
			<div class="container" id="menu_cadastros" style="color:white;">
			  </br><h2><strong>Olá <?php echo $_SESSION['usuario'];?>,</strong>  gerencie seu site!</h2></br>
			  
			  <ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#menu_cadastro">Cadastros</a></li>
				<li><a data-toggle="pill" href="#menu_configuracoes">Configurações</a></li>
			  </ul>
			  
			  <div class="tab-content">
				<div id="menu_cadastro" class="tab-pane fade in active"></br>
				      <!--submenu-->
					  <div class="container">
							  
							  <ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#menu_cad_noticia">Notícia</a></li>								
								<li><a data-toggle="tab" href="#menu_cad_usuarios">Usuário</a></li>
								
							  </ul>

							  <div class="tab-content">
								<div id="menu_cad_noticia" class="tab-pane fade in active"></br>
								   
								        
										<div class="row" style="color:white;">
											
											<div class="col-md-6" >
												</br><h3 align="center">Nova Notícia</h3>
												</br>
											   <form class="form-horizontal" name="form_nova_noticia" 
											                                 style="margin:5px 5px 5px 5px;" 
											                                 action="crud/adm_cad_noticia.php" 
																			 method="POST" 
																			 role="cadastrar_noticia"
											   enctype="multipart/form-data">
												  
												  <div class="form-group">
													<input type="text" name="nome" id="Nome" class="form-control" placeholder="Nome da Notícia" required>
												  </div>
												  
												  <div class="form-group">
													<textarea class="form-control" name="descricao" rows="5" id="Descricao" placeholder="Descrição da Notícia" required></textarea>
												  </div>
												  
												  <div class="form-group">
												    IMAGEM: <input type="file" name="flFoto" required>
												  </div>		
												  
												  <button type="submit" value="cadastrar" class="btn btn-default">Cadastrar Notícia</button>
											  </form>
											  
											</div>
										
											
											<div class="col-md-6" >
										
										<!--Aqui lista-->
											    </br><h3 align="center">Excluir Notícia</h3>
												<?php
												  $SQL = "SELECT * FROM NOTICIA ORDER BY n_nome";
												  $result = mysql_query($SQL);
												 ?>  
												   <table class="table" style="color:white;"> 	
													<thead>
														  <tr>
															<th>Título</th>
															<th>Foto</th>
															<th>Deletar</th>
														  </tr>
														</thead>
													<tbody>	
												<?php	
													while($exibir = mysql_fetch_array($result)){
														
														
														echo '<tr style="background-color:#003366;">';
														
														echo '<td>'.$exibir["n_nome"].'</td>';
														
														echo '<td><img src="crud/'.$exibir["n_img"].'" width="40px" height="40px"></td>';	
													    
														$a = "'".$exibir["n_codigo"]."'";
														$b = "'".$exibir["n_nome"]."'";
															
														echo '<td><a href="#" onclick="excluirnoticia('.$a.','.$b.') " style="padding:10px 10px 10px 10px;" ><img src="img/del.png"></a></td>';
														
														echo  '</tr>';														
													}
												?>	
												</tbody>
												</table>
											    
											</div>
								       </div>
								   
								</div>
							
								<div id="menu_cad_usuarios" class="tab-pane fade"></br>
								  
								    <div class="row" style="color:white;">
											
											<div class="col-md-3">
											     </br><h3 align="center">Novo Usuário</h3></br>
												<form class="form-horizontal" name="form_novo_usuario" style="margin:5px 5px 5px 5px;" action="crud/cadastrarusuario.php" method="POST" role="cadastrar_usuario">
												  <div class="form-group">
													<input type="text" name="novousuario" class="form-control" placeholder="Usuário" required>
												  </div>
												  <div class="form-group">
													<input type="password" name="novasenha" class="form-control" placeholder="Senha" required>
												  </div>
												  <div class="form-group">
													<input type="password" name="confirmnovasenha" class="form-control" placeholder="Confirmar Senha" required>
												  </div>
															
												  <button type="submit" value="cadastrar" class="btn btn-default">Cadastrar</button>
											  </form>
											   
											  
											  
											</div>	
									</div>
								</div>						
							  </div>
						</div>       
				</div>
				
				<div id="menu_configuracoes" class="tab-pane fade"></br>
				      <!--submenu-->
					  <div class="container">
							  
							  <ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#menu_senha">Alterar Senha</a></li>
								
							  </ul>

							  <div class="tab-content">
								<div id="menu_senha" class="tab-pane fade in active"></br>
								   
								   <div class="row" style="color:white;">
											
											<div class="col-md-2">
											    
												<form class="form-horizontal" name="form_senha" style="margin:5px 5px 5px 5px;" action="crud/alterarsenha.php" method="POST" role="alterar_senha">
												  <div class="form-group">
													<input type="password" name="senha" class="form-control" placeholder="senha" required>
												  </div>
												  <div class="form-group">
													<input type="password" name="novasenha" class="form-control" placeholder="Nova Senha" required>
												  </div>
												  <div class="form-group">
													<input type="password" name="confirmnovasenha" class="form-control" placeholder="Confirmar nova Senha" required>
												  </div>
															
												  <button type="submit" value="alterar" class="btn btn-default">Salvar</button>
											  </form>
												
											</div>
											
										</div>
								   
								</div>
								
							  </div>
						</div>       				     
				</div>
			  </div>
		   </div>		
     </div>
   </body>
   
</html>