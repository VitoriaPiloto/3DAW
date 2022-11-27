<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha"; 
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome1 = $_GET["nome1"]; 
        $nome2 = $_GET["nome2"];

        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="SELECT * FROM `jogo` WHERE `selecao1` = '$nome1' AND `selecao2` = '$nome2' OR `selecao1` = '$nome2' AND `selecao2` = '$nome1'";
        
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
    } else{
        $ehGET = false;
    }
echo $retorno;
?>
