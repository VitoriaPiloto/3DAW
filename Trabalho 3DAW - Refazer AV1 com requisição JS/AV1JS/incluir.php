<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "3daw_acad_manha"; 
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $preRequisito= $_GET["preRequisito"];
        $creditos= $_GET["creditos"];
        $periodo= $_GET["periodo"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="INSERT INTO `disciplina`(`nome`, `idPreRequisito`, `credito`, `periodo`) VALUES ('$nome', '$preRequisito', '$creditos', '$periodo')";
        
        $result=$conn->query($sql);
    }
?>
