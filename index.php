<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/1531/PNG/512/3253482-flag-spain-icon_106784.png">
    <title>Cadastramento</title>
    <style>
        body{
            background-image: url(https://wallpapercave.com/wp/wp2040769.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }
    
        h1{
            text-align: center;
            font-family: sans-serif;
            border-radius: 18px;
            font-size: 50px;
            color: white;
            padding: 10px;

            
            
        }
        form{
            text-align: center;
            margin-top: 100px;
            padding: 15px;
            background-color:  rgba(255, 0, 0, 0.363);
            border-radius: 15px
            
            
        }
        input{
            font-size: 24px;
            padding: 10px;
            
            
            
        }
        footer{
            text-align: center;
            font-size: 23px;
            margin-top: 315px;
            color: white;
        }
       
    </style>
    
    
</head>

<body>
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastramento";

//criar a conexão//

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuariosg (nome, email, senha) VALUES ('$nome', '$email', '$senha')";


    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;

        }
    }

    $conn->close();



?>

<h1 >Registro de torcedores para REAL X BARÇA</h1>


<form action="" method="post">

Nome: <input type="text" name="nome" id="" required autocomplete="off">
E-mail: <input type="email" name="email" id="" required autocomplete="off">
Senha: <input type="password" name="senha" id="" required>


<input type="submit" value="Cadastrar">




</form>

<footer>
    Criado por Gustavo Soares
</footer>

<script>
        AOS.init();
      </script>

</body>
</html>