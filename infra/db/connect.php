// Essa parte é onde as funções de conexão com o banco de dados são definidas. A função session_start() é usada para iniciar uma sessão, que é necessária para armazenar informações do usuário durante a navegação. As variáveis $host, $user, $pass e $db são usadas para definir as credenciais de conexão com o banco de dados. A variável $conn é criada usando a classe mysqli, que é usada para estabelecer a conexão com o banco de dados. O código comentado serve para verificar se a conexão foi bem-sucedida ou se ocorreu um erro.
<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    
    $conn = new mysqli($host,$user,$pass,$db);

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>