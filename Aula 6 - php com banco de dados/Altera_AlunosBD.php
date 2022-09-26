<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";

       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $email = $_POST["email"];

        $nomeNovo = $_POST["nomeNovo"];
        $matriculaNova = $_POST["matriculaNova"];
        $emailNovo = $_POST["emailNovo"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
        if($conn->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        if ($matriculaNova != "" || $matriculaNova != NULL){
            $sql = "UPDATE `alunos` SET `matricula` = $matriculaNova WHERE `matricula` = $matricula";
            $result = $conn->query($sql);
        } else {
            if ($nomeNovo != "" || $nomeNovo != NULL){
                $sql = "UPDATE `alunos` SET `nome` = '$nomeNovo'  WHERE `nome` = '$nome'";
                $result = $conn->query($sql);
            } else {
                if ($emailNovo != "" || $emailNovo != NULL){
                    $sql = "UPDATE `alunos` SET `email` = '$emailNovo'  WHERE `email` = '$email'";
                    $result = $conn->query($sql);
                } 
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
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
        h2{
            color: #5C1000;  
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
    <h1> Alterar Alunos </h1>
    <form action="Altera_AlunosBD.php" method="POST">
        <fieldset>
            <legend>Preencha o dado antigo e o dado novo</legend>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">

            <label for="nomeNovo">Nome Novo: </label>
            
            <input type="text" id="nomeNovo" name="nomeNovo">

            <label for="matricula">Matricula : </label>
            <input type="text" id="matricula" name="matricula">

            <label for="matriculaNova">Matricula Nova: </label>
            <input type="text" id="matriculaNova" name="matriculaNova">

            <label for="email">Email : </label>
            <input type="text" id="email" name="email">

            <label for="emailNovo">Email Novo: </label>
            <input type="text" id="emailNovo" name="emailNovo">

            <input type="submit" value="Enviar" id="button">
        </fieldset>
    </form>
</body>
</body>