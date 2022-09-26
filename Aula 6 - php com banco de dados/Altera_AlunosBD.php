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
</head>
<body>
    <h1> Alterar Alunos </h1>
    <h2>Preencha o dado antigo e o dado novo</h2>
    <form action="Altera_AlunosBD.php" method="POST">
        <fieldset>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="nomeNovo">Nome Novo: </label>
            <input type="text" id="nomeNovo" name="nomeNovo"><br><br>

            <label for="matricula">Matricula : </label>
            <input type="text" id="matricula" name="matricula"><br><br>

            <label for="matriculaNova">Matricula Nova: </label>
            <input type="text" id="matriculaNova" name="matriculaNova"><br><br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email"><br><br>

            <label for="emailNovo">Email Novo: </label>
            <input type="text" id="emailNovo" name="emailNovo"><br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</body>