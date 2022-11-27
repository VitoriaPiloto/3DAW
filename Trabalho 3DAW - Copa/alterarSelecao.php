<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $nome = $_GET["nome"];
        $nomeAlt = $_GET["nomeAlt"];
        $tecnico = $_GET["tecnico"]; 
        $grupo = $_GET["grupo"]; 
        $pontos = $_GET["pontos"]; 

        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="UPDATE `selecao` SET `nome`='$nomeAlt',`grupo`='$grupo',`tecnico`='$tecnico',`pontos`=$pontos WHERE `nome` = '$nome'";
        
        $result=$conn->query($sql);
        echo $sql;
    } else {
        $ehGET = false;
    }
?>