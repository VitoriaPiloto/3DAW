<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "3daw_acad_manha"; 
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $id = $_GET["id"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `disciplina` WHERE `id` = $id";
        $result=$conn->query($sql);
        
        $discp = $result->fetch_assoc();

        if ($result=true){
            $retorno=json_encode($discp);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
