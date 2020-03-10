<?php
include_once('connectCadastrar.php');

$nomeCompleto = $_POST['nomeCompleto'];
$apelido = $_POST['apelido'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$arquivo = $_FILES['arquivo']['name'];

$_UP['pasta'] = 'fotosPerfil/';

$_UP['tamanho'] = 1024*1024*100; 

$_UP['extensoes'] = array('png', 'jpeg', 'jpg','gif');

$_UP['renomeia'] = false;

$_UP['errors'][0] = 'Não houve erro';
$_UP['errors'][1] = 'O arquivo no upload é maior que o limite do PHP';
$_UP['errors'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['errors'][3] = 'O upload so arquivo foi feito parcialmente';
$_UP['errors'][4] = 'Não foi feito o upload do arquivo';

if($_FILES['arquivo']['error'] != 0){
    die("Não foi possivel fazer o upload, erro: <br />". $_UP['errors'][$_FILES['arquivo']['error']]);
    exit;
}

$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if(array_search($extensao, $_UP['extensoes']) === false){
    echo "<META HTTP-ENQUIV=REFRESH CONTENT = '0; URL=http://localhost/xampp/brunSkerTeste/inserirUsuario.php'>
    <script type=\"text/javascript\">
        alert(\"A imagem não foi cadastrada, extensão inválida.\");
        </script>";
}else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
    echo "<META HTTP-ENQUIV=REFRESH CONTENT = '0; URL=http://localhost/xampp/brunSkerTeste/inserirUsuario.php'>
    <script type=\"text/javascript\">
        alert(\"Arquivo muito grande.\");
        </script>";
}else{
    if($_UP['renomeia'] == true){
        $nome_final = time().'.jpg';

    }else{
        $nome_final = $_FILES['arquivo']['name'];
    }

    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
        $query = mysqli_query ($connect, "INSERT INTO Usuario (nomeCompleto, apelido, cpf, sexo, nascimento, estado, email, cidade, cep, telefone, celular, usuario, senha, arquivo)
                VALUES ('$nomeCompleto', '$apelido', '$cpf', '$sexo', '$nascimento', '$estado', '$email', '$cidade', '$cep', '$telefone', '$celular', '$usuario', '$senha', '$nome_final')");



        echo "<script>
	        alert('Usuário cadastrado com sucesso!');
            window.location.href='selecionarUsuario.php';
	        </script>";
   exit;
    }else{
        echo "<META HTTP-ENQUIV=REFRESH CONTENT = '0; URL=http://localhost/xampp/brunSkerTeste/inserirUsuario.php'>
    <script type=\"text/javascript\">
        alert(\"Usuário não foi cadastrado.\");
        </script>";
    }
}



?>