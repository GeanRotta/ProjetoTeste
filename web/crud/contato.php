<?php
  if($_POST['submit']=="1"){ 
 
      
  $para = "jldesenvolvimentoweb@gmail.com";
      
  $nome = $_POST['nome'];
      
  $assunto = $_POST['assunto'];
	
  $de =  $_POST['email'];
	
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];


		  $headers =  "Content-Type:text/html; charset=UTF-8\n";
		  $headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
		  $headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
		  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
		  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
		  $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
		  $headers .= "MIME-Version: 1.0\n";
	
     mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
  }
  
  ?>
 
  
 



