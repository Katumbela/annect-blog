
<?php
include('header.php');

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Enviada Com Sucesso</title>
    <script src="jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
    <style>

        
.concluido:hover{
    opacity: 0.8;
}
.concluido{
    text-decoration: none;
    color: rgb(183, 214, 255);
}
    </style>
</head>
<body class="bg-light">
    
<nav class="navbar navbar-expand-lg  navbar-light bg-dark"> 
        <a class="navbar-brand" href="index.html" style="color: #f1f1f1;"><b> ANNECT</b></a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span style="color: #f1f1f1;" class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul  class="navbar-nav mr-auto"> 
                <li class="nav-item active"> 
                    <a style="color: #f1f1f1;" class="nav-link" href="http://annect.ga">Home <span class="sr-only">(current)</span>
                    </a> </li> 
                    <li class="nav-item"> <a style="color: #f1f1f1;" class="nav-link" href="https://mobile.annect.ga">Carteira</a> </li> 
                    <li class="nav-item dropdown"> <a style="color: #f1f1f1;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Redes Sociais </a> 
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="https://www.facebook.com/joao.afonso.katombela">Facebook</a>
                            <a class="dropdown-item" href="https://twitter.com/joao_katumbela">Twitter</a> 
                            <div class="dropdown-divider"></div> 
                            <a  class="dropdown-item" href="https://linkedin.com/joao-afonso-katombela">LinkedIn</a> 
                        </div> 
                    </li> <li class="nav-item"> <a style="color: #f1f1f1;" class="nav-link disabled" href="#">Annect Wallet</a> </li> 
                    </ul>
                     <form class="form-inline my-2 my-lg-0"> 
                         <input class="form-control mr-sm-2" type="search" placeholder="Escreva algum feed" aria-label="Search"> 
                         <button class="btn btn-outline-success my-2 my-sm-0" type="Enviar">Enviar</button>
                         </form>
                         </div> 
    </nav>
  
    <main class="container">
<?php
if(isset($_POST['msg'])){

$email=$_POST['email'];
$msg=$_POST['msg'];
$consulta = "INSERT INTO cadastro( email, datas, obs) VALUE( '$email',now(), '$msg') "; 
$resultados =  $conexao ->query($consulta ); 

echo"
<center> 
<img src='img/sucess_annect.png' class='banner' width='25%' height='25%' alt='success action'>
</center>
<br><br><br><br><br><h5 class='sucess'>Olá, muito obrigado pela sua mensagem $email, pois ela foi bem recebida por nós na qual mereceu a nossa maior atenção, !<br><br> <a class='concluido' href='index.html'><center> Voltar </center></a></h5>
";
}

elseif(isset($_POST['anonimo'])){
    
    $msg_anonimo=$_POST['msg_anonimo'];
    $consulta_anonimo = "INSERT INTO cadastro( obs) VALUE( '$msg_anonimo') "; 
    $resultados_anonimo =  $conexao ->query($consulta_anonimo ); 
    
echo"
<center> 
<img src='img/sucess_annect.png' class='banner' width='25%' height='25%' alt='success action'>
</center>
<br><br><br><br><br><h5 class='sucess'>Olá, muito obrigado pela sua mensagem anonima, pois ela foi bem recebida por nós na qual mereceu a nossa maior atenção, e não serão divulgados quaisquer dados seus !<br><br> <a class='concluido' href='index.html'><center> Voltar </center></a></h5>
";
}

elseif(isset($_POST['insc'])){
    
    $msg_insc=$_POST['email_insc'];
    $consulta_insc = "INSERT INTO cadastro( email, datas, obs) VALUE( '$msg_insc', now(), 'Inscrição para o curso gratuito' ') "; 
    $resultados_isnc =  $conexao ->query($consulta_insc ); 
    
echo"
 <center> 
 <img src='img/sucess_annect.png' class='banner' width='25%' height='25%' alt='success action'>
</center>
 <br><br><br><br><br><h5 class='sucess'>Olá, Seja bem vindo, seu cadastro para o curso gratuito de crypto activos foi feito com sucesso, os cursos serão enviados por email ou whatsapp depois do dia de hoje. Passará a receber os cursos e mentorias semanalente!<br><br><center> <a class='btn btn-outline-success' href='index.html'> O K </a></center></h5>
";
}
    else{
        echo'Desculpa, ocorreu um erro ao fazer esta operação, tente mais tarde. Obrigado!';
    }
?>
</main>
<br><br><br><br><br><br><br><br><br><br>
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