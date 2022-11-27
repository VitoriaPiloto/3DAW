<?php
     $ehGET = true;
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $bancodeDados = "3daw_acad_manha";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $tecnico= $_GET["tecnico"];
        $grupo= $_GET["grupo"];
        
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="INSERT INTO `selecao`(`nome`, `tecnico`, `grupo`, `pontos`) VALUES ('$nome', '$tecnico', '$grupo', 0)";
        $result=$conn->query($sql);
    } else {
        $ehGET = false;
    }
?>
