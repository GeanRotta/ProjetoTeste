<?php
  require_once("crud/conexao.php");
?>

<html>
  <head>
   <title>JL Desenvolvimento Web</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet'>
	 
     
	  <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
		  
	
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		

      <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
     
       <script src="js/main.js"></script>
  </head>
   <body data-spy="scroll" data-target=".menu-navegacao" data-offset="100" style="overflow-x: hidden;"> 
   
   <div class="tudo">
			  	     
		 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			 <div class="container">							          
					<div class="navbar-header" >             
									          
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#elementoCollapse1">
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
								</button>
								<a href="#"><img src="img/Logo1.png"></a> 								
					</div>					
									   
					<div class="collapse navbar-collapse menu-navegacao" id="elementoCollapse1">
						<ul class="nav navbar-nav "  >
							 <li class="active"><a href="#inicio">Início</a></li> 
							 <li><a href="#sobre">Sobre</a></li> 
							 <li><a href="#noticias">Notícias</a></li> 
							 <li><a href="#contato">Contato</a></li> 
 						</ul>
   						 <ul class="nav navbar-nav navbar-right">
					        
					        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Acesso Restrito<span class="glyphicon glyphicon-lock" style="margin-left:5px;"></span></a>
					          <ul class="dropdown-menu">
					            
					          		<!--FORM LOGIN-->
									
  									  <form class="form-vertical" name="login_form" style="margin:5px 5px 5px 5px; " action="login.php" method="POST" role="login">
										  <div class="form-group">
											<input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
										  </div>
										  <div class="form-group">
											<input type="password" name="senha" class="form-control" placeholder="Senha" required>
										  </div>
										  			
										  <button type="submit" value="logar" class="btn btn-default">Logar</button>
									  </form>
					          </ul>
					        </li>					       
					      </ul>

					</div>
			 </div>
		 </nav>
 
			<!-- banner-->              
				<div class="container" id="inicio">
				  <br>
				  <div class="row">
				  <div class="col-xs-12">
				  
				  <div id="myCarousel" style=" margin-bottom:20px; margin-top:50px;" class="carousel slide" data-ride="carousel" data-interval="3000">
					
					
					<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">

					  <div  class="item active" >
						  <img  src="img/slide1.jpg"  alt="JL Web" >
					  </div>

					  <div class="item " >
						<img src="img/slide2.jpg"  alt="JL Web">
					  </div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" ></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" ></span>
					</a>
				  </div>
				  </div>
		     </div>
		</div>
	       <!--banner-->
	 
     <section id="sobre" > 
	    <div class="container-hiddenSobre" style="overflow-x: hidden;">	
	           <div class="sobre" style="overflow-x: hidden; margin:30px 30px 60px 30px;">
					 <div class="col-md-4">
						 <div class="sobreEmpresa"  style="text-align:center; ">
								<h1>Sobre</h1></br>	               				
								<em><h4>A JL Desenvolvimento Web é uma empresa de desenvolvimento</h4>
								<h4>de web sites de publicidade.</h4></br>
								<h4>Estamos sempre em busca de parceiros interessados em web sites.</h4></br>
								<h4>Nossa equipe trabalha juntamente com nossos clientes,</h4>
								<h4>buscando sempre utilizar novas tecnologias </h4>
								<h4>assim produzindo sites de qualidade com resultados satisfatórios.</h4>
								<h4>Nosso objetivo é conquistar empresas,</h4>
								<h4>e futuramente ampliar nossa sede e equipe.</h4>
								
								</em>
												
						</div>
					</div>
					<div class="col-md-4">
						 <div class="sobreEmpresa" style="text-align:center;margin:30px 30px 30px 30px;">
							   <h1>Missão</h1></br>
							   <em><p>Nossa missão é desenvolver sites de qualidade e que atendam as necessidades dos clientes.</p></em>
							   </br><h1>Visão</h1>
							   <em><p>A visão da JL WEB é tornar-se a empresa reconhecida mundialmente em desenvolvimento web.</p></em>
							   </br><h1>Valores</h1>
							   <em><p>Inovação</p><p>Ética</p><p>Compromisso</p><p>Respeito</p></em>
						 </br>
						 </div>
					</div>
					<div class="col-md-4">  				
						 <div class="container" style="text-align:center; margin:30px 30px 30px 30px;" >
									</br>
									<img src="img/logo.png" class="img-responsive" alt="logo" style="margin-bottom:70px;">
						</div>     
						
					 </div>					
                </div>
	
				</br>
			</div>	
	 </section>

     <section id="noticias">
	   <div class="container-hiddenNoticia">
			
	            <div class="diagonal_Noticia_B"></div>       
			    <div class="galeria">  
				  </br></br><h2>Galeria de Notícias</h2></br>
						<p>As ultimas notícias da atualidade você encontra aqui!</p></br>            
		           <div class="row">
							<div class="col-md-4">
							  <a href="http://www.unoesc.edu.br" class="thumbnail">
								<p>Alunos da UNOESC de chapecó abrem uma empresa de desenvolvimento web!</p>    
								<img src="img/logo.png" alt="Pulpit Rock" style="width:150px;height:150px">
							  </a>
							</div>
							<div class="col-md-4">
							  <a href="moustiers-sainte-marie.jpg" class="thumbnail">
								<p>Moustiers-Sainte-Marie: Considered as one of the "most beautiful villages of France".</p>
								<img src="moustiers-sainte-marie.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
							  </a>
							</div>
							<div class="col-md-4">
							  <a href="cinqueterre.jpg" class="thumbnail">
								<p>The Cinque Terre: A rugged portion of coast in the Liguria region of Italy.</p>      
								<img src="cinqueterre.jpg" alt="Cinque Terre" style="width:150px;height:150px">
							  </a>
							</div>
							<div class="col-md-4">
							  <a href="cinqueterre.jpg" class="thumbnail">
								<p>The Cinque Terre: A rugged portion of coast in the Liguria region of Italy.</p>      
								<img src="cinqueterre.jpg" alt="Cinque Terre" style="width:150px;height:150px">
							  </a>
							</div>
							<div class="col-md-4">
							  <a href="cinqueterre.jpg" class="thumbnail">
								<p>The Cinque Terre: A rugged portion of coast in the Liguria region of Italy.</p>      
								<img src="cinqueterre.jpg" alt="Cinque Terre" style="width:150px;height:150px">
							  </a>
							</div>
							<div class="col-md-4">
							  <a href="cinqueterre.jpg" class="thumbnail">
								<p>The Cinque Terre: A rugged portion of coast in the Liguria region of Italy.</p>      
								<img src="cinqueterre.jpg" alt="Cinque Terre" style="width:150px;height:150px">
							  </a>
							</div>
							
					</div>
	
		     </div></br></br></br></br>
		   </div>
	 </section>
	 
	 
	 
	 
	 <section id="contato">
	    <div class="container-hiddenContato">	
		
		 <div id="diagonal_contato_B"></div>
		   <div  class="contatoconteudo">
				  
					
						<div class="contacto">
						   <h2>Entre em contato conosco!</h2></br>
							  <form class="form-horizontal" name="contato_form" action="crud/contato.php" method="POST" role="email">
								  <div class="form-group">
									<input type="text" name="nome" class="form-control" placeholder="Nome">
								  </div>
								  <div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Email">
								  </div>
								  <div class="form-group">
									<input type="text" name="assunto" class="form-control" placeholder="Assunto">
								  </div>
								  <div class="form-group">
									<textarea class="form-control" name="mensagem" rows="5" id="comment" placeholder="Mensagem"></textarea>
								  </div>			
								  <button type="submit" name="submit" value="enviar" class="btn btn-default">Enviar</button>
							  </form>
				
						</div>
					
					
						 <div class="informacao_contato" >
							   </br></br><h3>Fone:</h3>
							   <h4>(49) 3335 0102  -  (49) 3335 0102</h4>
							   <h4></h4>
							   <h3>Email:</h3>
							   <h4>jlwebpublicidade@gmail.com</h4>				   
						</div>
					
					
						 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 div-mapa-rodape no-transition div-rodape-divisoes" align="center" style="margin-top:90px;">
						   <div id="mapa" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center"> 
							 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d770.9339407903078!2d-52.5996097!3d-27.1346274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b1441d724b4b%3A0xf0ff8f9f1a9c844e!2sUnoesc+Unidade+de+Chapec%C3%B3!5e1!3m2!1spt-BR!2sbr!4v1435625388540" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					
					
						<div class="container" style="">
						   <a href="http://www.facebook.com"><img src="img/incon_face.png" class="img-circle" alt="Facebook" style="background-color:#3366FF; margin: 30px 30px 30px 30px;"></a>
						</div>
					
                        

                    					
				</div>
				
						
		     </div></br>
		    <div class="diagonal_footer"></div>
		    <div class="diagonal_footer_A"></div>		 
          </div> 		 
     </section>	
    
		 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</body>
</html>