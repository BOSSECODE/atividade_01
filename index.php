<?php
// O include serve para conectar o nosso arquivo a outro. Neste caso, estamos conectando o nosso arquivo index.php ao connect.php, que é onde está a conexão com o banco de dados. Assim, podemos usar a variável $conn para fazer consultas ao banco de dados.
include("infra/db/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //Serve para artribur o conteúdo ou identificar a variável.
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Irá buscar os valores na tabela users, onde o username seja igual ao valor do campo usuario e a senha seja igual ao valor do campo senha. Se encontrar um resultado, irá criar uma sessão com o nome do usuário e redirecionar para a página home.php. Caso contrário, irá exibir uma mensagem de erro.
    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";

    // Ele irá consultar o banco de dados usando a variável $conn, que é a conexão com o banco de dados, e a variável $sql, que é a consulta SQL. O resultado da consulta será armazenado na variável $resultado.
    $resultado = $conn -> query($sql);

    // Verifica se houve resultado na consulta
    if($resultado -> num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
        <?php
            include("public/component/navbar.php");
        ?>
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>