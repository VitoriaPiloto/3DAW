<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $nome = $_GET["nome"]; 
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="SELECT * FROM `selecao` WHERE `nome` = '$nome'";
        $result=$conn->query($sql);
        
        $discp = $result->fetch_assoc();
        
        if ($result=true){
            $retorno=json_encode($discp);

        } else {
            $retorno=json_encode("Erro");
        }
    } else {
        $ehGET = false;
    }
    
    echo $retorno;
?>