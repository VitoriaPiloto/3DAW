<?php
$ehPost = true;
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "3daw_acad_manha";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];

    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error)
    {
        die ("Conexão não funcionou!");
    }

    $sql = "Insert into `alunos` ( `nome`, `matricula`, `email`) VALUES ( '$nome', '$matricula', '$email')";
    echo $sql;
    $result = $conn->query($sql);
    echo "result?: " . $result;
}
else
{
    $ehPost = false;
}

echo "aluno incluido";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="aa.php" method="POST">
        <fieldset>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"><br><br>
            <label for="matricula">Matricula: </label>
            <input type="text" id="matricula" name="matricula"><br><br>
            <label for="email">Email: </label>
            <input type="text" id="email" name="email"><br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>