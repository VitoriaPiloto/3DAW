<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $grupo = $_GET["grupo"];
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="SELECT `nome` FROM `selecao` WHERE `grupo` = '$grupo'";
        $result=$conn->query($sql);
        $vetJogos[] = array();
        $i = 0;
        While ($linha = $result->fetch_assoc()){
            foreach ($linha as $l) {
                $sqlJogo= "SELECT * FROM `jogo` WHERE `selecao1` = '$l' OR `selecao2` = '$l'";
                $resultJogo= $conn->query($sqlJogo);
                while($linha2 = $resultJogo->fetch_assoc()){
                        $vetJogos[$i]=$linha2;
                        $i++;
                    }
                }
                
            }
            $vetJogos=array_unique($vetJogos, SORT_REGULAR);
        
            $retorno=json_encode(array_values($vetJogos));
            echo $retorno;
    } else {
        $ehGET = false;
    }
?>
