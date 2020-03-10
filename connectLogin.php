<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bdBrunSker";

$connect = mysqli_connect($servername, $username, $password, $db_name);

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;


if(isset($_POST['enviar'])):
    $erros = array();
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $sql = mysqli_query($connect, "SELECT nomeCompleto, usuario, senha, arquivo FROM Usuario WHERE usuario = '$usuario' AND senha = '$senha'");
    $bd = mysqli_fetch_assoc($sql);

    $_SESSION["nomeCompleto"]  = $bd["nomeCompleto"];
    $_SESSION["arquivo"]  = $bd["arquivo"];

    if(empty($usuario) or empty($senha)):
      $erros[] = "<li style ='padding-top: 15px;'> O Campo usuario/senha precisa ser preenchido! </li>";  
    else:
        $sql = "SELECT usuario, senha FROM Usuario WHERE usuario = '$usuario' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);
        
            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                header('Location: selecionarUsuario.php');
            else:
                $erros[] = "<li style ='padding-top: 15px;'> Usuário e senha não conferem! </li>";
            endif;

        if(mysqli_num_rows($resultado) > 0):

            $sql = "SELECT * FROM Usuario WHERE usuario = '$usuario' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

        else:
            $erros[] = "<li style ='padding-top: 15px;'> Usuário inexistente! </li>";
        endif;
    endif;
    if($erros){
        echo "<script>
	        alert('Usuário ou senha incorreto, ou usuário inexistente!');
            window.location.href='index.php';
	        </script>";
    }
endif;