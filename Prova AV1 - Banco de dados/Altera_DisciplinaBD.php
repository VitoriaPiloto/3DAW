<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3dawacademicomanha";

       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $periodo = $_POST["periodo"];
        $idPreRequisito = $_POST["idPreRequisito"];
        $creditos = $_POST["creditos"];

        $nomeNovo = $_POST["nomeNovo"];
        $periodoNovo = $_POST["periodoNovo"];
        $idPreRequisitoNovo = $_POST["idPreRequisitoNovo"];
        $creditosNovo = $_POST["creditosNovo"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
        if($conn->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        if ($periodoNovo != "" || $periodoNovo != NULL){
            $sql = "UPDATE `disciplina` SET `periodo` = $periodoNovo WHERE `periodo` = $periodo";
            $result = $conn->query($sql);
        } 
        if ($nomeNovo != "" || $nomeNovo != NULL){
            $sql = "UPDATE `disciplina` SET `nome` = '$nomeNovo'  WHERE `nome` = '$nome'";
            $result = $conn->query($sql);
        } 
        if ($idPreRequisitoNovo != "" || $idPreRequisitoNovo != NULL){
            $sql = "UPDATE `disciplina` SET `idPreRequisito` = '$idPreRequisitoNovo'  WHERE `idPreRequisito` = '$idPreRequisito'";
            $result = $conn->query($sql);
        } 
        if ($creditosNovo != "" || $creditosNovo != NULL){
            $sql = "UPDATE `disciplina` SET `creditos` = '$creditosNovo'  WHERE `creditos` = '$creditos'";
            $result = $conn->query($sql);
        }
                
            
        }
        
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Alterar disiplina</title>
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
    <h1> Alterar disciplina </h1>
    <form action="Altera_DisciplinaBD.php" method="POST">
        <fieldset>
            <legend>Preencha o dado antigo e o dado novo</legend>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">

            <label for="nomeNovo">Nome Novo: </label>
            
            <input type="text" id="nomeNovo" name="nomeNovo">

            <label for="periodo">Período : </label>
            <input type="text" id="periodo" name="periodo">

            <label for="periodoNovo">Período novo: </label>
            <input type="text" id="periodoNovo" name="periodoNovo">

            <label for="idPreRequisito">ID Pré-requisito: </label>
            <input type="text" id="idPreRequisito" name="idPreRequisito">

            <label for="idPreRequisitoNovo">ID Pré-requisito Nova: </label>
            <input type="text" id="idPreRequisitoNovo" name="idPreRequisitoNovo">

            <label for="creditos">Créditos : </label>
            <input type="text" id="creditos" name="creditos">

            <label for="creditosNovo">Créditos novo: </label>
            <input type="text" id="creditosNovo" name="creditosNovo">

            <input type="submit" value="Enviar" id="button">
        </fieldset>
    </form>
</body>
</html>