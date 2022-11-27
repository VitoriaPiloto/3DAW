<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $data = $_GET["data"];
        $hora= $_GET["hora"];
        $local = $_GET["local"];
        $selecao1= $_GET["selecao1"];
        $selecao2= $_GET["selecao2"];
        $gols1= $_GET["gols1"];
        $gols2= $_GET["gols2"];
        

        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="INSERT INTO `jogo`(`data`, `hora`,`local`, `selecao1`, `selecao2`, `gols1`, `gols2`) 
            VALUES ('$data', '$hora','$local', '$selecao1', '$selecao2', '$gols1', '$gols2')";
        $result=$conn->query($sql);

        if($gols1>$gols2){
            $sqlPonto = "UPDATE `selecao` SET `pontos` = `pontos`+3 WHERE `nome` = '$selecao1'";
            $resultPonto=$conn->query($sqlPonto);
        }
        else {
            if ($gols1<$gols2) {
                $sqlPonto = "UPDATE `selecao` SET `pontos` = `pontos`+3 WHERE `nome` = '$selecao2'";
                $resultPonto=$conn->query($sqlPonto);
            } else{
                $sqlPonto = "UPDATE `selecao` SET `pontos` = `pontos`+1 WHERE `nome`  = '$selecao1' or `nome` = '$selecao2'";
                $resultPonto=$conn->query($sqlPonto);
            }
        }
    }
?>
