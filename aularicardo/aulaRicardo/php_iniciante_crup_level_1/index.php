<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    </head>
    <body>
       
        <style>
            .m-r-1em{
                margin-right:1em;
            }
        .m-b-1em{
            margin-bottom:1em;
        }
        .m-1-1em{
            margin-left:1em;
        }
        .mt0{
            margin-top:0;
        }
        </style>
<div class="container">
   
    <?php
    include 'bancodedados.php';
    $query = "SELECT id,nome,descricao,preco FROM produtos ORDER BY id DESC";
    $stmt = $con->prepare($query);
   $stmt->execute();
   //"É assim que obtemos o número de linhas retornadas:"
   $num = $stmt-> rowCount();
   // "Link para o formulário de criação de registros."
   if($num>0){
   
   }
   else
   {
     echo "<div class='alert-danger'>Não achei o resgistro</div>";}
    ?>
     echo "<table class='table table-hover table-responsive table-bordered'>";

 
    
 
        
    
    <div class="page-header">
        <h1>Ler Produtos</h1>
        </div>
        </div>
       
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       
       
</body>
</html>
tem menu de contexto
Redigir