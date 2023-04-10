<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style type="text/css">
    body, html{
        height: 100%;
    }

    *{
        font-family: 'Poppins', sans-serif;
        color:black;
        text-align:center;
        justify-content: center;
        font-size:40px;
    }
    

    #caixa{
        height: 100%;
        display:flex;
        align-items: center;
        justify-content: center;
    }

</style>
<body>
   
        <div id="caixa">
            <?php
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];

            if ($idade >= 18) {
                echo "$nome é maior de 18 e tem $idade anos.";
            } else {
                echo "$nome não é maior de 18 e tem $idade anos.";
            }
            ?>
        </div>
    
</body>
</html>

