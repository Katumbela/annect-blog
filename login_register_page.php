
<?php
session_start();


if(isset($_GET['logout']) && $_GET['logout']=1){
    session_destroy();
    echo "sessão quebrada!";
}
?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cadastro </title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="cadastro.css">
</head>
<style>
    *{
    font-family: Century Gothic;
   font-size: 8pt;
}

.notaaa{
    width: 80%;
    margin-left:5%;
}
.form-container{
    background: #fff;
    width: 220px;
    border-radius: 20px;
    height: 400px;
    position: relative;
    text-align: center;
    padding: 20px ;
    margin: auto;
    box-shadow: 0 0 30px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.form-container span{
    font-weight: bold;
    padding: 0 10px;
    color: #555;
    cursor: pointer;
    width: 100px;
    display: inline-block;
}

.form-btn{
    display: inline-block;
}

.form-container form{
    max-width: 100%;
    padding: 0 20px;
    position: absolute;
    top: 130px;
    transition: transform 1s;
}


form input{
    width: 80%;
    height: 30px;
    margin: 10px 0 ;
    padding: 0 10px;
    border:  1px solid #ccc;
    border-color: rgb(23, 146, 194);
    border-radius: 6px;
}

form .btn{
    width: 80%;
    border: none;
    cursor: pointer;
    margin: 10px 0;
    background: rgb(5, 119, 94);
padding: 2%;
border-radius: 9px;
color: #fff;
letter-spacing: 2px;
text-transform: uppercase;

transition: 0.3s;
}

form .btn:hover{
    opacity: 0.8;
    transition: 0.3s;
}

form .btn:focus{
    outline: none;
}

#loginform{
    left: -450px;
    margin-right: 300px;
}

#registerform{
    left: 10px;
    margin-top: -17%;
}

form a{
   font-size: 8px; 
}

#indicator{
    width: 50%;
    border: none;
    background: rgb(23, 146, 194);
    height: 4px;
    left: 2px;
    margin-top: 9px;
    transform: translate(50px);
   transition: 1s;
}

#loginform input{
    width: 45%;
    border-color: rgb(23, 146, 194);
}

#loginform input:focus{
    border-color: rgb(23, 146, 194);
}

#loginform .btn{
width: 45%;
}

#registerform input{
    height: 18px;
    margin-top: 5px;
}

#registerform input[type="radio"]:first-child{
    margin-top: 2px;
}

#registerform input[type="radio"]{
    height: 15px;
    margin-top: 0;
}

select{
    border-radius: 5px;
    border-color: rgb(23, 146, 194);
}


.link{
    color: rgb(61, 180, 228);
    font-size: 8px;
    list-style: none;
}

input:focus {
    width: 250px;
    height: 30px;
}
</style>
<body>
    <main class="container">
<div class="col-2">
    <div class="form-container">
        <div class="form-btn">
            <span onclick="register()">Solicitar criação de uma conta</span>
        </div>

<form action="registro.php" method="post" id="registerform">
<input type="text" name="nome" placeholder="Nome Completo" id="" required>
<input type="email" name="email" placeholder="Seu email" id="" required>
<input type="password" name="senha" placeholder="Senha a colocar" id="" required>
<input type="text" name="facebook" placeholder="Link do facebook " id="" required>
<input type="tel" name="telefone" placeholder="telefone (+244)" id="" required>
<input type="text" name="msg" placeholder="mensagem (Opcional)" id="" required>
<select name="conta" id="" required>
    <option value="NULL">Tipo de conta</option>
    <option value="PayPal">PayPal</option>
    <option value="Payoneer">Payoneer</option>
    <option value="Wise Transfer">Wise Transfer</option>
    <option value="Advanced Cash">Advanced Cash</option>
    <option value="Payeer">Payeer</option>
    <option value="Multicarteira">Multicarteira (Cryptos)</option>
</select>
<br><br>
<input type="radio" name="sexo" value="Masculino" id="radio"> Masculino 
<input type="radio" name="sexo" value="Feminino" id="radio"> Feminino
<br>
<button type="submit" class="btn">Solicitar</button>
</form>
    </div>
</div>
<div class="notaaa">
<h5>Nota:</h5><p>Ao clicares em solicitar o seu pedido entrará na linha dos pedidos diários, e o seu oedido levará no máximo um dia até ser entregue à sí. e esta será entregue por mensagem em seu facebook. Usufrua da AnnectWallet gratuitamente</p>
</div>
<br>
<center>
    &copy; Annect 2021 - 2022 <a href="https://mobile.annect.ga">Annect Wallet</a> | <a href="politicas_de_privacidade.html">Politicas de Privacidade</a>
</center>

</main>
<script>
    

var loginform = document.getElementById("loginform");
var registerform = document.getElementById("registerform");
var indicador = document.getElementById("indicator");

function login(){
    loginform.style.transform = "translateX(400px)";
    registerform.style.transform = "translateX(400px)";
    indicador.style.transform = "translateX(-90px)";
}
function register(){
    loginform.style.transform = "translateX(0px)";
    registerform.style.transform = "translateX(0px)";
    indicador.style.transform = "translateX(90px)";
}

</script>
</body>
</html>