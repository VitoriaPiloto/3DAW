<?php
$ehPost = true;
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "3dawacademicomanha";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $nome = $_POST["nome"];
    $periodo = $_POST["periodo"];
    $idPreRequisito = $_POST["idPreRequisito"];
    $creditos = $_POST["creditos"];

    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error)
    {
        die ("Conexão não funcionou!");
    }

    $sql = "Insert into `disciplina` ( `nome`, `periodo`, `idPreRequisito`, `creditos`) VALUES ( '$nome', '$periodo', '$idPreRequisito', '$creditos')";
    echo $sql;
    $result = $conn->query($sql);
    echo "result?: " . $result;
}
else
{
    $ehPost = false;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir disciplina</title>
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
        
        fieldset{
            display: grid;
            border: 1px solid #5C1000;
        }

        legend{
            margin-left: 2.5vw;
            margin-right: 2.5vw;
            margin-bottom: 2.5vh;
            font-size: large;
            color:#5C1000;
        }

        #button{
            width: 30%;
            margin-top: 1vh;
            padding: 10px;
            background-color: #E82901;
            border:none;
            color:beige;
            text-transform: uppercase;
        }
        #button:hover{
            cursor: pointer;
            background-color: #5C1000;
        }
        </style>
</head>
<body>
    <form action="Insere_DisciplinaBD.php" method="POST">
        <h1>Insere disciplina</h1>
        <fieldset>
            <legend>Insira os dados da nova disciplina</legend>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"><br><br>
            <label for="periodo">Periodo: </label>
            <input type="text" id="periodo" name="periodo"><br><br>
            <label for="idPreRequisito">ID Pré-Requisito: </label>
            <input type="text" id="idPreRequisito" name="idPreRequisito"><br><br>
            <label for="creditos">Creditos: </label>
            <input type="text" id="creditos" name="creditos"><br><br>
            <input type="submit" value="Enviar" id="button">
        </fieldset>
    </form>
</body>
</html>
