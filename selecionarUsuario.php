<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<title>BrunSker Tecnologia - Listagem</title>
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
    <!--Barra de navegação mobile-->
    <div id="mySidenav" class="d-lg-none sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="divPerfilMobile">
            <img src="<?php echo "fotosPerfil/".$_SESSION["arquivo"];?>" class="rounded-circle z-depth-0"
                alt="avatar image" height="100" width="100">
        </div>
        <a><?php echo $_SESSION["nomeCompleto"];?></a>

        </a>
        <hr>
        <form class="form-inline formBuscarMobile" method="POST" action="pesquisar.php">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2 inputBuscarMobile placeBuscarMobile" type="text" name="pesquisar"
                    placeholder="Buscar usuário" aria-label="Search">
            </div>
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 rounded-pill" type="submit"><i
                    class="fas fa-search"></i></button>
        </form>
        <hr>
        <a href="inserirUsuario.php"><i class="fas fa-plus-circle"></i> Cadastrar</a>
        <hr>
        <a href="index.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
        <hr>
        <div class="footer-copyright text-center py-3 copyrightNavMobile">© 2020 BrunSker Tecnologia.</div>
    </div>
    <div class="divHamburger d-lg-none">
        <span class="hamburgerMenu" onclick="openNav()">&#9776;</span>
        <a class="logoMobile" href="#">
            <img src="resources/brunSkerLogo.png" class="brunSkerLogoMobile">
        </a>
    </div>
    <!--Barra de navegação desktop-->
    <div class="d-none d-lg-block">
        <nav class="mb-1 navbar scrolling-navbar fixed-top navbar-expand-lg navbar-dark lighten-1">
            <a class="navbar-brand" href="#"><img src="resources/brunSkerLogo.png" class="brunSkerLogo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <form class="form-inline" method="POST" action="pesquisar.php">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" name="pesquisar"
                                placeholder="Buscar usuário" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 rounded-pill" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>
                    <li class="nav-item">
                        <a class="nav-link btMaisCad" href="inserirUsuario.php"><i class="fas fa-plus-circle"></i>
                            Cadastrar<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown perfilDesktop rounded-pill">
                        <a class="nav-link dropdown-toggle nomePerfilDesktop" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["nomeCompleto"];?>
                            <img src="<?php echo "fotosPerfil/".$_SESSION["arquivo"];?>"
                                class="rounded-circle z-depth-0" alt="avatar image" height="35" width="35">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="index.php"><i class="fas fa-sign-out-alt iconSairDesktop"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--Fim da barra de navegação desktop-->
    <!--/.Navbar -->
    <div class="container containerListagem" id="selecionarDados">
        <div class="listagemSize z-depth-4 rounded mb-0 border-top-0 border-dark">
            <div class="divListagem border-top-0 border-dark">
                <h2 class="tituloListagem text-center ">Listagem</h2>
            </div>
            <div class="quadroResposta border ">
                <?php
                    require_once('class/classUsuario.php');
                    $objUsuario = new classUsuario();

                    $tableUsuario = $objUsuario->retUsuario();

                    if ($tableUsuario != "erro")
                    {
                        $max = sizeof($tableUsuario);

                        echo "<hr class='border border-dark'>";
                        for ($i = 0; $i < $max; $i++) {
                            echo"<h2 class='titulo tituloListagem text-center'> Usuário </h2> <hr class='border border-dark'>";
                            echo"<div class='perfilPesquisar'><img src= 'fotosPerfil/" .$tableUsuario[$i]["arquivo"]."'class='rounded-circle z-depth-0' alt='avatar image' height='100' width='100'></div><hr class='border borderTable'>";
                            echo"Nome completo: " . $tableUsuario[$i]["nomeCompleto"];
                            echo"<hr class='border borderTable'> Apelido: " . $tableUsuario[$i]["apelido"];
                            echo"<hr class='border borderTable'> CPF: " . $tableUsuario[$i]["cpf"];
                            echo"<hr class='border borderTable'> Sexo: " . $tableUsuario[$i]["sexo"];
                            echo"<hr class='border borderTable'> Data de nascimento: " . $tableUsuario[$i]["nascimento"];
                            echo"<hr class='border borderTable'> Estado: " . $tableUsuario[$i]["estado"];
                            echo"<hr class='border borderTable'> E-mail: " . $tableUsuario[$i]["email"];
                            echo"<hr class='border borderTable'> Cidade: " . $tableUsuario[$i]["cidade"];
                            echo"<hr class='border borderTable'> CEP: " . $tableUsuario[$i]["cep"];
                            echo"<hr class='border borderTable'> Telefone: " . $tableUsuario[$i]["telefone"];
                            echo"<hr class='border borderTable'> Celualar: " . $tableUsuario[$i]["celular"];
                            echo"<hr class='border borderTable'> Usuário: " . $tableUsuario[$i]["usuario"];
                            echo"<hr class='border borderTable'> Senha: " . $tableUsuario[$i]["senha"] ."<hr class='border border-dark'>";
                            
                 
                        }
                        echo '';
                    }
                    
                    ?>
            </div>
        </div>
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