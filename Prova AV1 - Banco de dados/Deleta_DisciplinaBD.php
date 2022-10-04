<?php
    $ehPost=true;
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3dawacademicomanha";

       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["id"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
        if($conn->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "DELETE FROM `disciplina` WHERE `disciplina`.`id` = $id";
        $result = $conn->query($sql);
    } else {
           $ehPost=false;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Deletar disciplina</title>
        <style>
            body{
            padding-right:25%;
            padding-left:25%;
            padding-top: 2%;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            background-color: beige;
        }
        h1{
            color: #E82901;
            text-align: center;
        }
        input{
            background-color: beige;
            padding: 5px;
            border: 1px solid black;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            margin-top: 5px;
            width: 70%;
        }

        label, input{
            margin-left: 5vw;
        }
        label{
            margin-top: 5vh;
        }
        fieldset{
            display: grid;
            border: 1px solid #5C1000;
        }

        legend{
            margin-left: 2.5vw;
            margin-right: 2.5vw;
            font-size: large;
            color:#5C1000;
        }

        #button{
            width: 30%;
            margin-top: 5vh;
            padding: 10px;
            background-color: #E82901;
            border:none;
            color:beige;
        }
        #button:hover{
            cursor: pointer;
            background-color: #5C1000;
        }
        </style>
</head>
<body>
    <h1>Deletar disciplina</h1>
        <form action="Deleta_DisciplinaBD.php" method="POST">
            <fieldset>
                <legend>Insira o ID da disciplina que deseja deletar</legend>
                <label for="id">ID da disciplina</label><br>
                <input type="text" name="id"><br>
                <input type="submit" value="Enviar" id="button">
            </fieldset>
            
        </form>
    </body>
</body>
