<?php
     $ehGET = true;
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $bancodeDados = "3daw_acad_manha";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $idCliente = $_GET["idCliente"];
        $idCarro= $_GET["idCarro"];
        $periodo= $_GET["periodo"];
        
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="INSERT INTO `aluguel`(`id_cliente`, `id_carro `, `periodo`) VALUES ('$idCliente', '$idCarro', '$periodo')";
        $sql2="UPDATE `carros` SET `disponivel`= 1 WHERE `id` = '$idCarro'";
    
        $result=$conn->query($sql);
        $result2=$conn->query($sql2);

    } else {
        $ehGET = false;
    }
?>
