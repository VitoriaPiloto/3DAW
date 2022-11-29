<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha"; 
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $cidade = $_GET["cidade"]; 

        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="SELECT * FROM `carros` WHERE `cidade` = '$cidade' ";
        
        $result=$conn->query($sql);
        $vetCarros[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetCarros[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetCarros);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    } else{
        $ehGET = false;
    }
echo $retorno;
?>
