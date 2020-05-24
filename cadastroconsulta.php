<?php include "conexao.php";  ?>


<!DOCTYPE html>
<html>
  <head>
    
    <meta http-equiv="Content-Type" content="text/html; />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>Cadatro Consulta</title>
<link rel="shortcut icon" href="favicon.ico" >


  <!-- Core CSS File. The CSS code needed to make eventCalendar works -->

<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="jquery-1.10.2.js"></script>

<link rel="stylesheet" href="ui.css">
<script src="jquery-ui.js"></script>

<style type="text/css">
body{

  background: #CC0033;
}

</style>

<script src="jquery.maskMoney.0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="../maskedinput.js" ></script>


<script src="jquery.autocomplete.js" type="text/javascript"></script>

<script type="text/javascript" src="gera.js"></script>


    
    <meta content="pt-br" http-equiv="Content-Language"/>
    <!--Para chamar a personalização-->
    

    
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
  <!-- TODO add manifest here -->
  <!--<link rel="manifest" href="/assets/manifest.json">-->
  <!-- Add to home screen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
  <meta name="msapplication-TileColor" content="#FF6E00">
    <meta name="apple-mobile-web-app-title" content="S.O.S">
    <script>
      if(/Android/i.test(navigator.userAgent) ) {
        $('title').text("S.O.S");
      }
    </script>
   
<script type="text/javascript">

      $(function() {
    $('#telefone').mask('(00) 90000-0000');

$("#datepicker").datepicker();


         });

</script>
        


     <script>
      if (!window.navigator.standalone) {
        $('head').append("<meta name='smartbanner:title' content='S.O.S'>");
        $('head').append("<meta name='smartbanner:author' content='Eletromecânica'>");
        $('head').append("<meta name='smartbanner:icon-apple' content='IMG-20180419-WA0035.jpg'>");
        $('head').append("<meta name='smartbanner:icon-google' content='IMG-20180419-WA0035.jpg'>");
        $('head').append("<meta name='smartbanner:button' content='Ver'>");
        $('head').append("<meta name='smartbanner:button-url-apple' content=''>");
                $('head').append("<meta name='smartbanner:enabled-platforms' content='android'>");
        $('head').append("<meta name='smartbanner:hide-ttl' content='86400000'>");
      }
    </script>
   
  
  


    <meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="white"/>
<meta name="apple-mobile-web-app-title" content="Ordem de Serviço"/>

<link rel="apple-touch-icon" href="MG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="57x57" href="IMG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="72x72" href="IMG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="76x76" href="IMG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="114x114" href="IMG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="120x120" href="IMG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="144x144" href="IMG-20180419-WA0035.jpg" />
<link rel="apple-touch-icon" sizes="152x152" href="IMG-20180419-WA0035.jpg" />
    
</head>

<body>

 <div  align="center" style="background:#fff;padding-top: 15px; "><img src="logo2.jpg" width="90"></div>

<section>
    
      <div><h1>Cadastro de Perfil de Usuário para Consulta <?=$_GET[id]?></h1></div>
    

      <form id="form-contact" action="cadastrordo.php" method="post" enctype="multipart/form-data" name="ff">
        <div class="input">
          <label for="name">Nome</label>
          <input type="text" id="name" name="nome" placeholder="Nome" required>
        </div>

         <form id="form-contact" action="cadastrordo.php" method="post" enctype="multipart/form-data" name="ff">
        <div class="input">
          <label for="name">Tipo Sangue</label>
          <input type="text" id="name" name="nome" placeholder="Tipo Sangue" required>
        </div>


 <form id="form-contact" action="cadastrordo.php" method="post" enctype="multipart/form-data" name="ff">
        <div class="input">
          <label for="name">Email</label>
          <input type="text" id="name" name="nome" placeholder="Email" required>
        </div>

 <div class="input">
          <label for="telefone">Telefone</label>
          <input type="text" id="telefone" name="telefone"  placeholder="Telefone" required>
        </div>

         <div class="input">
          <label for="telefone">Nome Login</label>
          <input type="text" id="telefone" name="telefone"  placeholder="Nome Login" required>
        </div>

        <div class="input">
          <label for="telefone">Senha</label>
          <input type="password" id="telefone" name="telefone"  placeholder="Senha" required>
        </div>


 
<div style="clear: both;"></div>



 <div class="input txt">
          <label for="placa">Endereço</label>
          <input type="text" name="placa" id="placa" placeholder="Endereço" required>
        <div style="clear: both;"></div>
        </div> 

<div style="clear: both;"></div>




<div class="input">
          <label for="name">Fumante?</label>
          
         
<label class="container">Sim
  <input type="radio" name="localfalha" value="Em campo" required>
  <span class="checkmark"></span>
</label>

<label class="container">Não
  <input type="radio" name="localfalha" value="Checklist"required>
  <span class="checkmark"></span>
</label>




        </div>



        <div class="input">
          <label for="name">Pratica esportes?</label>
          
         
<label class="container">Sim
  <input type="radio" name="localfalha" value="Em campo" required>
  <span class="checkmark"></span>
</label>

<label class="container">Não
  <input type="radio" name="localfalha" value="Checklist"required>
  <span class="checkmark"></span>
</label>




        </div>

       


       

        
      </form>
    </section>
    




</body>


</html>
