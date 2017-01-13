<?php
$vNome = $_POST['vNome'];
?>

<html>

<head>

<!-- Configurar página --> 
<!-- <meta name="viewport" content="width=device-width, initial-scale=1" charset="iso-8859-1"> -->
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<!-- Importa bibliotecas --> 
<link rel="stylesheet" href="jquery/jquery.mobile-1.4.5.min.css">
<script src="jquery/jquery-1.11.3.min.js"></script>
<script src="jquery/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>


<!-- PÁGINA DO MENU-->   
<div data-role="page" id="pg_menu">

  <!-- Cabeçalho -->   
  <div data-theme="a" data-role="header">
   <a href="index.html" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Início</a>
   <h3>CHIMARRÃO</h3>
  </div>
  
  <!-- Corpo -->   
  <div data-role="content">
  <?php 
  //Verifica se o nome foi informado
  if ($vNome<>null) 
     {
     //Exibe imagem e mensagem para o usuário identificado 
     echo '
           <div style="text-align:center;">
             <img src="imagens/icone_alegre.jpg" alt="Rosto sorrindo" width="42" height="42">
             <br>
           </div>
           Olá <b>'.$vNome.'</b>! Seja bem-vindo.
           <br><br>
           Abra o menu e descubra a história, conheça os utensílios e aprenda a preparar a bebida tradicional do Rio Grande do Sul, o chimarrão.
           <br><br>
           <div style="text-align:center;">
             <div data-role="navbar" data-iconpos="right">
               <a href="#pn_menu" data-icon="bars" class="ui-btn ui-btn-b ui-btn-inline ui-corner-all ui-shadow">Abrir Menu</a>
             </div>
           </div>';
     }
  else
     {
     //Exibe imagem e mensagem solicitadndo identificação do usuário 
     echo '<div style="text-align:center;">
             <img src="imagens/icone_triste.jpg" alt="Rosto sorrindo" width="42" height="42">
             <br>
             Por favor, informe seu nome.
             <div data-role="navbar" data-iconpos="left">
               <a href="index.html" data-icon="carat-l" class="ui-btn ui-btn-b ui-btn-inline ui-corner-all ui-shadow">Voltar</a>
             </div>
          </div>';
     }
  ?>
  </div>

  <!-- Rodapé --> 
  <div data-role="footer">
    <h3>Versão 1.0</h3>
  </div>

  <!-- Painel do Menu -->   
  <div data-role="panel" id="pn_menu" data-position="right" style="text-align:center;"> 
    <div data-role="controlgroup" data-type="vertical">
      <a href="historia.html" class="ui-btn">A história do mate</a>
      <a href="preparar.html" class="ui-btn">Como preparar e servir</a>
      <a href="encontrar.html" class="ui-btn">Onde encontrar</a>
      <a href="#pn_popup" data-rel="popup" id="bt_creditos" class="ui-btn" data-position-to="#bt_creditos">Créditos</a>
    </div>
    <div data-role="navbar" data-iconpos="left">
      <a href="#pg_mensagem" data-icon="carat-l" data-rel="close" class="ui-btn ui-btn-b ui-btn-inline ui-corner-all ui-shadow">Fechar Menu</a>
    </div>
  </div>

  <!-- Painel do Popup --> 
  <div data-role="popup" id="pn_popup" data-arrow="t" style="text-align:center;">
    <p><b>CHIMARRÃO</b></p>
    <p>Versão 1.0</p>
    <p>Aplicativo para dispositivos móveis desenvolvido em jQuery Mobile, para aulas do curso Técnico em Informática do SENAC Tramandaí.</p>
  </div>

</div>


<!-- PÁGINA DE MENSAGEM -->  
<div data-role="page" data-dialog="true" id="pn_mensagem">

<!-- Cabeçalho da caixa de diálogo --> 
  <div data-role="header">
    <h1>Mensagem</h1>
  </div>
<!-- Mensagem da caixa de diálogo -->   
  <div data-role="main" class="ui-content">
    <p>Este recurso está em desenvolvimento. Clique em "Fechar" para voltar a tela anterior."</p>
    <center><a href="#pg_menu" class="ui-btn ui-btn-b ui-btn-inline ui-corner-all ui-shadow">Fechar</a></center>
  </div>
<!-- Rodapé da caixa de diálogo -->   
  <div data-role="footer">
    <h1></h1>
  </div> 

</div>


</body>

</html>
