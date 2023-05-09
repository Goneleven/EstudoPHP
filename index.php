<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Teste</title>
    <style>
        body{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>Bem - Vindo legalLegal :)</h1>
    <form action="" method="post">
        <label>Digite um Valor</label>
        <input type="text" name="valor">
        <button type="submit">Enviar</button>
    </form>
    <?php
    echo "Hello World :)";

    echo "<br>";

    //Variavel:
    $numero1 = 111;
    $numero2 = 777;

    echo $numero1;

    echo "<br>";

    echo $numero2;

    echo "<br>";

    $soma = $numero1 + $numero2;
    echo "A Soma é: " . $soma;
    echo "<br>";

    echo "<br>";

    if ($soma >= 7) {
        echo "Aluno Aprovado";
    }else{
        echo "Aluno Reprovado";
    }

    echo "<br>";
    if(isset($_POST['valor'])) {
        $valorDigitado = $_POST['valor'];
    echo "O Valor digitado no input é: " . $valorDigitado;
}
    ?>
    
</body>
</html>