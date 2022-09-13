<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST ["nome"]; 
    $matricula= $_POST["matricula"];
    if($nome == NULL  || $matricula== NULL)
    {
        echo "Nao foi <br>";
    }
    else if(!file_exists("Dojo.json")) {
       $arquivo = fopen ("Dojo.json", "w");
       fclose($arquivo);

    }
    else {
        $arquivo = fopen ("Dojo.json", "r");
        $x=0;
        while (!feof($arquivo)) {
            $temp = fopen ("tmp.json", "w");
            $linha = fgets($temp);
            $cabecalho = "{ \"Aluno\": [\n";
            $footer = ""
            fwrite($temp, $cabecalho);
            if ($linha == "]") {
                $txt = 
            } else {
                fwrite($temp, $linha);
            }
            fclose($temp);
        }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dojo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="dojo.php" method="POST">
        <fieldset>
            <label>Nome:</label> 
            <input type="text" name="nome">
            <label>Matricula:</label> 
            <input type="text" name="matricula"> <br>
            <input type="submit" value="incluir">
        </fieldset>
    </form>
    
</body>
</html>