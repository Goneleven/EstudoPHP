<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POST - Banco de Dados</title>
</head>
<body>
    <form action="" method="post">
        <label>Nome</label>
        <input type="text" name="campo1">
        <label>Sobrenome</label>
        <input type="text" name="campo2">

        <input type="submit" value = "Enviar">
    </form>    

    <?php

    //Conectar com o Banco De Dados
    $conn = mysqli_connect("localhost", "root", "", "bdphp");

    //Verificar se o formulario foi enviado pelo metodo POST
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];

        //Criar os valores que foram digitados no input e insere o registro na tabela
        $sql = "INSERT INTO a (Nome, Sobrenome) VALUES ('$campo1', '$campo2')";

        //Verifica se foi encontrado ou ocorreu erro
        if(mysqli_query($conn, $sql)) {
            echo "Registro inserido com sucesso";

        }else{
            echo "Erro ao inserir Registro";
        }

    }
    
    ?>

</body>
</html>