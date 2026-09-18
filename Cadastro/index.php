<?php
include "conexao.php";
$nome = "";
$email = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';

    if($nome === "" || $email === ""){
            $mensagem = "Preencha todos os campos";
            echo "$mensagem";
    }else{
        $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
        $conexao-> query($sql);

        echo "<br>Cadastro Realizado com sucesso <br>";

        $nome="";
        $email="";
    }
}
        
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body style="Background-color: #252352; color: #ffffff; text-align: center">
    <h1>Cadastro</h1>
    <img src="imagens/jeorge_escrevendo.jpg_large" alt="macaco escrevendo" width="200px" height="200px"><br>

    <form method="POST">
        <h2>Preencha as Informações:</h2>
       <input type="text" name="nome" placeholder="Digite o nome" value="<?php echo $nome; ?>"><br><br>
       <input type="email" name="email" placeholder="Digite o email" value="<?php echo $email; ?>"><br><br>
       <input type="submit" value="Cadastrar">
    </form>

    
</body>
</html>



