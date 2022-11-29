<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "3daw_acad_manha"; 
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `disciplina`";
        
        $result=$conn->query($sql);
        $vetDiscp[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetDiscp[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetDiscp);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
