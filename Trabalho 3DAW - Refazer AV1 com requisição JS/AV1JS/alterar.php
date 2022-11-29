<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "3daw_acad_manha"; 
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $id = $_GET["id"]; 
        $nome = $_GET["nome"]; 
        $preRequisito = $_GET["preRequisito"]; 
        $periodo = $_GET["periodo"]; 
        $credito = $_GET["credito"]; 
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="UPDATE `disciplina` SET `nome`='$nome',`periodo`='$periodo',`idPreRequisito`='$preRequisito',`credito`='$credito' WHERE `id` = $id";
        
        $result=$conn->query($sql);
        
    }
?>