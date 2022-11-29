<?php
     $ehGET = true;
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $bancodeDados = "3daw_acad_manha";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $telefone= $_GET["telefone"];
        $cidade= $_GET["cidade"];
        
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="INSERT INTO `clientes`(`nome`, `telefone`, `cidade`) VALUES ('$nome', '$telefone', '$cidade')";
        $result=$conn->query($sql);
    } else {
        $ehGET = false;
    }
?>
