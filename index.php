

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2? família=Play&display=swap" rel="stylesheet">
    <title>Cyber Netz</title>
</head>

<body>
    
<div class="navbar-1">
        <img src="assets/img/robo.png" width="80px" height="90px">

        <ul>
            <li><a class="active" href="" data-toggle="modal" data-target="#exampleModal">Login</a></li>
            <li><a href="sobre.php" target="_blank">Sobre nós</a></li>
            <li><a href="#rodape">Contatos</a></li>
        </ul>
</div>


<section class="banner">
        <h1>Somos a Cyber Netz</h1>

        <div class="banner2">
            <h2>Ajudamos você a se atualizar no mundo digital</h2>
            <h3>Com segurança e facilidade</h3>
        </div>
    </section>


    <section class="linguagem">
        <div class="container">
            <div class="row formulario1">
                <div class="col">
                    <h1>Suas dificuldades</h1>
                    <form>
                     <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" Required>
                     </div>
                     <div class="form-group">
                        <label for="nome">Telefone</label> 
                        <input type="text" class="form-control" name="telefone" Required>
                     </div>
                     <div class="form-group">
                        <label for="nome">Email</label>
                        <input type="email" class="form-control" name="email" Required>
                     </div class="text-dificuldade">
                        <label for="nome">Nos fale sobre suas dificuldades!</label>
                        <textarea name="" id="" cols="130" rows="10"></textarea>
                     </div class=" btn-form">
                     <div class="form-group">
                         <input type="submit" class="btn btn-sucess">
                     </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

<?php include('footer.php'); ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="Cadastro">      
    <!--FORMULÁRIO DE LOGIN-->
    <div id="login">
      <form method="post" action=""> 
        <h1 class="modal-login">Login</h1> 
        <p> 
          <label for="nome_login">Seu nome</label>
          <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
        </p>
         
        <p> 
          <label for="email_login">Seu e-mail</label>
          <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
        </p>
         
        <p> 
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
          <label for="manterlogado">Manter-me logado</label>
        </p>
         
        <p> 
          <input type="submit" value="Logar" /> 
        </p>
         
        <p class="link">
          Ainda não tem conta?
          <a href="cadastro.php" target="_blank">Cadastre-se</a>
        </p>
      </form>
    </div>
  </div>
</div>  

  </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>

