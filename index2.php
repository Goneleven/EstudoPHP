<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Banco de Dados</title>
</head>
<body>
    <h1>Cadastro de Alunos</h1>
    <?php

    //Definir as Informações de conexão do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bdphp";
    

    //Criar a conexão com o Banco De Dados
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    //Define a consulta SQL para selecionar todos os registros da tabela "alunos"
    $result_tabela = "SELECT * FROM a";

    //Executa a consulta SQL e armazenar o resultado em uma variavel
    $resultado_tabela = mysqli_query($conn, $result_tabela);

    //imprimir os valores na pagina

    while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
        echo "ID - " . $row_usuario['iD'] . "<br>";

        echo "Nome - " . $row_usuario['Nome'] . "<br>";

        echo "Sobrenome - " . $row_usuario['Sobrenome'] . "<br><hr>";

    }
    ?>
    
</body>
</html>