<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PDO - Ler um regristro -Toturial PHP CRUD</title>
</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1>ler produto</h1>

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                // Realize ações ou recupere dados com base no valor do 'id'
                echo "O ID está definido e o seu valor é: " . $id;
            } else {
                // Trate o caso em que 'id' não está definido na URL
                echo "O ID não está definido na URL.";
            }
            include 'config/bancodedados.php';

            $host = "localhost";
            $nome_DB = "php_iniciante_crud_level_1";
            $Usuario = "root";
            $Senha = "";

            try {

                $query= 'SELECT nome, descricao, preco,criadoEm ,modificacao
                FROM produtos
                WHERE id =?
                LIMIT 1;';
            } 
            catch (PDOException $exception) {
                die('ERRO: ' . $exception->getMessage());
            }



            ?>


        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>