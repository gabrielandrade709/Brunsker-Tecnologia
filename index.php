<!DOCTYPE html>
<html lang="pt-br">
<title>BrunSker Tecnologia</title>
<meta charset="UTF-8">
<!--Adaptação para mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.55, user-scalable=0">
<!--Ícone do site-->
<link rel="shortcut icon" href="resources/icoBrunSker.ico">
<!--Ícones do fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
<!-- Style page -->
<link href="css/style.css" rel="stylesheet">
<!--Font Montserrat-->
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<!--Jquery-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<body>

    <nav class="mb-1 navbar scrolling-navbar fixed-top navbar-expand-lg navbar-dark lighten-1">
        <a class="navbar-brand" href="#"><img src="resources/brunSkerLogo.png" class="brunSkerLogo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav ml-auto nav-flex-icons">
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <div class="container containerLogin">
        <div class="row loginSize z-depth-4 rounded mb-0">
            <div class="formLogin">
                <h1 class="titulo text-center">Login</h1>
                <?php
                if(!empty($erros)):
                    foreach($erros as $erro):
                        echo $erro;
                    endforeach;
                endif;
                ?>
                <form action="connectLogin.php" method="POST">
                    <div class="md-form">
                        <i class="fas fa-user prefix iconColor shadowIcon"></i>
                        <input type="text" name="usuario" class="form-control" spellcheck="false" required="required"
                            data-error="É informar o usuário!">
                        <div class="help-block with-errors" required title="Informe usuário!"></div>
                        <label for="usuario">Usuário</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-key prefix iconColor shadowIcon"></i>
                        <input type="password" name="senha" class="form-control" spellcheck="false" required="required"
                            data-error="É informar a senha!">
                        <div class="help-block with-errors" required title="Informe usuário!"></div>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded-pill botaoEntrar" id='botao' name="enviar">
                            <i class="fas fa-sign-in-alt icoButton"></i>Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small darken-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center"> <a class="fb-ic"
                            href="https://www.facebook.com/pg/BrunSker/posts/?ref=page_internal" target="_blank"> <i
                                class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a>
                        <a class="tw-ic"
                            href="https://www.linkedin.com/company/brunsker-tecnologia/?originalSubdomain=br"
                            target="_blank"> <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a>
                        <a class="ins-ic" href="https://www.instagram.com/brunsker/?hl=pt-br" target="_blank"> <i
                                class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a> </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright py-3">© 2020 BrunSker Tecnologia.</div>
    </footer>
    <!--Script da biblioteca bootstrap-->
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!--Style.js-->
    <script type="text/javascript " src="js/style.js"></script>
</body>

</html>