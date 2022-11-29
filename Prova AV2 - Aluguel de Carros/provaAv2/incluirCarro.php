<?php
     $ehGET = true;
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $bancodeDados = "3daw_acad_manha";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $modelo = $_GET["modelo"];
        $marca= $_GET["marca"];
        $categoria= $_GET["categoria"];
        $cidade= $_GET["cidade"];
        $valor= $_GET["valor"];
        $disponivel= $_GET["disponivel"]; // 0 para disp e 1 para alugado!
        
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="INSERT INTO `carros`(`modelo`, `marca`, `categoria`, `cidade`, `valor`, `disponivel`) VALUES ('$modelo', '$marca', '$categoria', '$cidade', '$valor', 0)";
        $result=$conn->query($sql);
    } else {
        $ehGET = false;
    }
    echo $result;
?>
