<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";
    $retorno = "";    
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="SELECT * FROM `jogo`";
        
        $result=$conn->query($sql);
        $vetJogos[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetJogos[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetJogos);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    } else {
        $ehGET = false;
    }
echo $retorno;
?>
