<?php
include("conexao.php");

$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$senha= $_POST['senha'];
$conta= $_POST['conta'];
$msg= $_POST['msg'];
$link= $_POST['facebook'];
$sexo =$_POST['sexo'];




$inserir = "INSERT INTO pedidos (nome, email, senha, telefone, pais, banco, sexo, datas) VALUES ('$nome', '$email', '$senha', '$telefone', '$pais',' $banco', '$sexo', now())";
$consultar =  $conexao->query($inserir);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido bem sucedido</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <h1 class="sucess">Seu pedido está a ser processado, aguarde até 24h, conheça a nossa cateira annect <a href="index.php">aqui</a></h1>
    <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br>

    
  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
   
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <a href="http://facebook.com/joao.afonso.katombela">Facebook</a><br>
                <a href="http://twitter.com/joao_katumbela">Twitter</a><br>
                <a href="contacto.html">Contacto</a><br>
                <a href="sobre.html">Sobre Nós</a><br>
            </div>

            <div class="col-lg-6 col-sm-6">
                <a href="http://linkedin.com/joao-afonso-katombela">LinkedIn</a><br>
                <a href="http://github.com/katumbela">GitHub</a><br>
                <a href="mailto:annectwallet@gmail.com">annectwallet@gmail.com</a><br>
                <a href="politicas_de_privacidade.html">Politicas de Privacidade</a>
            
            </div>
        </div>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="https://www.annect.ga/"> www.annect.ga </a> <a href="politicas_de_privacidade.html">Politicas de Privacidade</a> | Made By: <a href="http://facebook.com/joao.afonso.katumbela">Joao Afonso Katombela</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</body>
</html>