<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<title>BrunSker Tecnologia - Cadastro</title>
<meta charset="UTF-8">
<!--Adaptação para mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.55, user-scalable=0">
<!--Ícone do site-->
<link rel="shortcut icon" href="resources/icoBrunSker.ico">
<!--Ícones do fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!--Ícone do site-->
<link rel="shortcut icon" href="resources/icoBrunSker.ico">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
<!-- Style page -->
<link href="css/style.css" rel="stylesheet">
<!--Font Montserrat-->
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<!--Jquery-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!--Alertifyjs-->
<script src="alertifyjs/alertify.min.js"></script>
<!--JQuery Mask-->
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<!--Mascaras-->
<script type="text/javascript">
$(document).ready(function() {
    $("#cpf").mask("000.000.000-00")
    $("#cnpj").mask("00.000.000/0000-00")
    $("#telefone").mask("(00) 0000-0000")
    $("#salario").mask("999.999.990,00", {
        reverse: true
    })
    $("#cep").mask("00.000-000")
    $("#dataNascimento").mask("00/00/0000")

    $("#rg").mask("999.999.999-W", {
        translation: {
            'W': {
                pattern: /[X0-9]/
            }
        },
        reverse: true
    })

    var options = {
        translation: {
            'A': {
                pattern: /[A-Z]/
            },
            'a': {
                pattern: /[a-zA-Z]/
            },
            'S': {
                pattern: /[a-zA-Z0-9]/
            },
            'L': {
                pattern: /[a-z]/
            },
        }
    }

    $("#placa").mask("AAA-0000", options)

    $("#codigo").mask("AA.LLL.0000", options)

    $("#celular").mask("(00) 00000-0000")

    $("#celular").blur(function(event) {
        if ($(this).val().length == 15) {
            $("#celular").mask("(00) 00000-0009")
        } else {
            $("#celular").mask("(00) 0000-00009")
        }
    })
})
</script>

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
                <input class="form-control mr-sm-2 inputBuscarMobile" type="text" name="pesquisar"
                    placeholder="Buscar usuário" aria-label="Search">
            </div>
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 rounded-pill" type="submit"><i
                    class="fas fa-search"></i></button>
        </form>
        <hr>
        <a href="selecionarUsuario.php"><i class="fas fa-clipboard-list"></i> Listagem</a>
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
                        <a class="nav-link btMaisCad" href="selecionarUsuario.php"><i class="fas fa-clipboard-list"></i>
                            Listagem<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown perfilDesktop rounded-pill">
                        <a class="nav-link dropdown-toggle nomePerfilDesktop" id="navbarDropdownMenuLink-333"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><?php echo $_SESSION["nomeCompleto"];?>
                            <img src="<?php echo "fotosPerfil/".$_SESSION["arquivo"];?>"
                                class="rounded-circle z-depth-0" alt="avatar image" height="35" width="35">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="index.php"><i
                                    class="fas fa-sign-out-alt iconSairDesktop"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container containerCadastro" id="inserirUsuario">
        <div class="cadastroSize z-depth-4 rounded mb-0">
            <div class="divCadastro">
                <h2 class="tituloCadastro text-center">Cadastrar</h2>
            </div>
            <br>
            <div class="formulario quadroCadastro">
                <form method="post" action="salvaUsuario.php" enctype="multipart/form-data">
                    <div class="input-group">
                        <i class="fas fa-images prefix iconColor genderIcon shadowIcon"></i>
                        <div class="custom-file">
                            <input type="file" name="arquivo" required class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01" accept="image/png, image/jpeg">
                            <label class="custom-file-label" for="inputGroupFile01">Escolha uma foto para o seu
                                perfil</label>
                        </div>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-signature prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptNomeCompleto" id="iptNomeCompleto" name="nomeCompleto"
                            spellcheck="false" required="required" data-error="Informe o seu nome completo!"
                            placeholder="Nome completo">
                        <div class="help-block with-errors" required title="Informe o seu nome completo!"></div>
                        <label for="lblNomeCompleto"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-mask prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptApelido" id="iptApelido" name="apelido"
                            spellcheck="false" required="required" data-error="Informe o seu apelido!"
                            placeholder="Apelido">
                        <div class="help-block with-errors" required title="Informe o seu apelido!"></div>
                        <label for="lblApelido"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-id-card prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptCpf" id="cpf" name="cpf" spellcheck="false"
                            required="required" data-error="Informe o seu CPF!" placeholder="CPF">
                        <div class="help-block with-errors" required title="Informe o seu CPF!"></div>
                        <label for="lblCpf"></label>
                    </div>
                    <div class="input-group mb-form">
                        <i class="fas fa-venus-mars prefix iconColor genderIcon shadowIcon"></i>
                        <select class="custom-select rounded-pill" id="sexo" name="sexo">
                            <option selected>Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-birthday-cake prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptNascimento" id="dataNascimento" name="nascimento"
                            spellcheck="false" required="required" data-error="Informe data do seu nascimento!"
                            placeholder="Data de nascimento">
                        <div class="help-block with-errors" required title="Informe a sua data de nascimento!">
                        </div>
                        <label for="lblNascimento"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-flag prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptNascimento" id="estado" name="estado"
                            spellcheck="false" required="required" data-error="Informe o seu estado!"
                            placeholder="Estado">
                        <div class="help-block with-errors" required title="Informe o seu estado!"></div>
                        <label for="lblEstado"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix iconColor shadowIcon"></i>
                        <input type="email" class="form-control iptEmail" id="email" name="email" spellcheck="false"
                            required="required" data-error="Informe o seu e-mail!" placeholder="E-mail">
                        <div class="help-block with-errors" required title="Informe o seu e-mail!"></div>
                        <label for="lblEmail"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-city prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptCidade" id="cidade" name="cidade" spellcheck="false"
                            required="required" data-error="Informe a sua cidade!" placeholder="Cidade">
                        <div class="help-block with-errors" required title="Informe a sua cidade!"></div>
                        <label for="lblCidade"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptCep" id="cep" name="cep" spellcheck="false"
                            required="required" data-error="Informe o seu CEP!" placeholder="CEP">
                        <div class="help-block with-errors" required title="Informe o seu CEP!"></div>
                        <label for="lblCep"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-phone prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptTelefone" id="telefone" name="telefone"
                            spellcheck="false" required="required" data-error="Informe o seu telefone!"
                            placeholder="Telefone">
                        <div class="help-block with-errors" required title="Informe o seu telefone!"></div>
                        <label for="lblTelefone"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-mobile-alt prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptCelular" id="celular" name="celular"
                            spellcheck="false" required="required" data-error="Informe o seu celular!"
                            placeholder="Celular">
                        <div class="help-block with-errors" required title="Informe o seu celular!"></div>
                        <label for="lblCelular"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-user-circle prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptUsuario" id="usuario" name="usuario"
                            spellcheck="false" required="required" data-error="Informe o seu usuario!"
                            placeholder="Usuário">
                        <div class="help-block with-errors" required title="Informe o seu usuário!"></div>
                        <label for="lblUsuario"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-key prefix iconColor shadowIcon"></i>
                        <input type="text" class="form-control iptSenha" id="senha" name="senha" spellcheck="false"
                            required="required" data-error="Informe a sua senha!" placeholder="Senha">
                        <div class="help-block with-errors" required title="Informe a sua senha!"></div>
                        <label for="lblSenha"></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded-pill botaoEntrar" id='botao' name="enviar">
                            <i class="fas fa-save icoButton"></i>Salvar</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="container">
        </div>
    </div>




    <!-- Image of location/map -->

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
                            target="_blank"> <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="ins-ic" href="https://www.instagram.com/brunsker/?hl=pt-br" target="_blank"> <i
                                class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a> </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright py-3">© 2020 BrunSker Tecnologia.</div>
    </footer>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!--Style.js-->
    <script type="text/javascript " src="js/style.js "></script>

</body>

</html>