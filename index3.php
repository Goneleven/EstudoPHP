<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POST - Banco de Dados</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        header {
            max-width: 100%;
            height: 5rem;
            margin: 0 auto;
            background: #232b2b;
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: 1fr 3fr;
            grid-template-rows: 100%;
        }

        #bodyIndex {
            background: no-repeat center/cover url(imagens/apertureScience.jpg);
            background-position-y: 80%;

        }

        #bodyIndex2 {
            background: no-repeat center/cover url(imagens/glad0s.jpg);
            background-position-y: 10%;

        }

        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .brand h1 {
            color: blue;
        }

        .brand span {
            color: orange;
        }

        .menuContainer {
            margin-left: 4%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .first a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-size: 1rem;
            font-weight: bold;
            transition: 0.1s;
        }

        .first a:hover {
            color: rgb(110, 110, 255);
        }

        .second button {
            font-weight: bold;
            cursor: pointer;
            padding: 10px 15px;
            margin: 5px;
            border: none;
        }

        .second .sign {
            color: white;
        }

        .second button:first-child {
            background-color: transparent;
        }

        .second button:last-child {
            border-radius: 10%;
            transition: 0.2s;
        }

        .second button:last-child:hover {
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.1);
            background: white;
        }




        footer {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-flow: row wrap;
            padding: 50px;
            color: #fff;
            background-color: #0e1111;
        }

        .footer {
            margin-top: 10%;
        }

        .footer>* {
            flex: 1 100%;
        }

        .footerLeft {
            margin-right: 1.25em;
            margin-bottom: 2em;
        }

        .footerLeft img {
            width: 20%;
            margin-bottom: 30px;
        }

        h2 {
            font-weight: 600;
            font-size: 17px;
        }

        .footer ul {
            list-style: none;
            padding-left: 0;
        }

        .footer li {
            line-height: 2em;
        }

        .footer a {
            text-decoration: none;
        }

        .footerRight {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-flow: row wrap;
        }

        .footerRight>* {
            float: 1 50%;
            margin-right: 1.25em;
        }

        .boxF a {
            color: #999;
        }

        .footerBottom {
            text-align: center;
            color: #999;
            padding-top: 50px;
        }

        .footerLeft p {
            padding-right: 20%;
            color: #999;
        }

        .socials a {
            /* background: no-repeat center/cover url(!imagens/instagram.png); */
            width: 40px;
            height: 40px;
            display: inline-block;
            margin-right: 10px;
        }

        .socials a i {
            color: #e7f2f4;
            padding: 10px 12px;
            font-size: 20px;
        }




        .container {
            width: 100%;
            height: 100%;
            position: inherit;
            top: 0;
            left: 0;
            display: flex;
            padding-top: 10%;

        }

        .elemento {
            height: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        fieldset {
            width: 300px;
            height: 350px;
            border-radius: 10px;
            backdrop-filter: blur(4px);
            border: 1px solid black;
        }

        fieldset p {
            color: black;
        }

        input {
            padding-top: 5px;
        }

        .container {
            width: 100%;
            height: 100%;
            position: inherit;
            top: 0;
            left: 0;
            display: flex;

        }

        .elemento {
            height: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        fieldset {
            width: 300px;
            height: 350px;
            border-radius: 10px;
            backdrop-filter: blur(4px);
            border: 1px solid black;
        }

        fieldset p {
            color: black;
        }

        input {
            padding-top: 5px;
        }

        form{
            margin-left: 60px;
        }
    </style>
</head>

<body id="bodyIndex">

    <!-- HEADER -->

    <header>
        <div class="brand">
            <img src="imagens/apertureScienceLogo.png" width="45%" alt="">
        </div>
        <div class="menuContainer">
            <div class="div first">
                <a href="#"> </a>
                <a href="#"> </a>
            </div>

            <div class="second">
                <button class="sign">Entrar</button>
                <button>Comece!</button>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br><br>

    <!-- HEADER -->

    <!-- MAIN -->

    <main id="mainIndex">
        <div class="container">
            <div class="elemento">
                <fieldset>
                    <form action="" method="post">
                        <br><br><br>
                        <label>Nome</label>
                        <br>
                        <input type="text" name="campo1">
                        <br><br>
                        <label>Sobrenome</label>
                        <br>
                        <input type="text" name="campo2">

                        <br><br><br>

                        <input type="submit" value="Enviar">
                    </form>
                </fieldset>
            </div>
        </div>
    </main>

    <!-- MAIN -->

    <!-- FOOTER -->

    <br><br><br><br><br><br><br><br>
    <footer class="footer">

        <div class="footerLeft">
            <img src="imagens/apertureScienceLogo.png">
            <p>Bem-vindos, senhores, à Aperture Science. Astronautas, heróis de guerra, atletas olímpicos - você está<br>
                aqui porque queremos o melhor, e você é o melhor. Então: quem está pronto para fazer ciência?<br><br>
                - Cave Johnson, fundador da Aperture Science Innovators, 1950</p>
        </div>


        <div class="footerBottom">
            <p>Todos os Direitos Reservador por &copy;apertureScience 2023</p>
        </div>
    </footer>

    <!-- FOOTER -->


    <?php

    //Conectar com o Banco De Dados
    $conn = mysqli_connect("localhost", "root", "", "bdphp");

    //Verificar se o formulario foi enviado pelo metodo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];

        //Criar os valores que foram digitados no input e insere o registro na tabela
        $sql = "INSERT INTO a (Nome, Sobrenome) VALUES ('$campo1', '$campo2')";

        //Verifica se foi encontrado ou ocorreu erro
        if (mysqli_query($conn, $sql)) {
            echo "Registro inserido com sucesso";
        } else {
            echo "Erro ao inserir Registro";
        }
    }

    ?>

</body>

</html>