<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";

       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mat = $_POST["matricula"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
        if($conn->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "DELETE FROM `alunos` WHERE `matricula` = $mat";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Document</title>
</head>
<body>
    <h1>Deletar Alunos</h1>
        <form action="Deleta_AlunosBD.php" method="POST">
            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</body>