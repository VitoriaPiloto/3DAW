<?php
$ehPost=true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $mat = $_POST["matricula"];
    $av1 = $_POST["av1"];
    $av2 = $_POST["av2"];
    $media = ($av1 + $av2) / 2;
    

    $arquivoAluno = fopen("Alunos.txt", "a");
    $txt = "nome;matricula;av1;av2;media\n";
    fwrite($arquivoAluno, $txt);
    $txt = $nome . ";" . $mat . ";" . $av1 . ";"  . $av2 . ";" . $media . ";" . "\n";
    fwrite($arquivoAluno, $txt);
    fclose($arquivoAluno);
} else {
    $ehPost = false;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Média</title>
</head>
<body>
    <form method="POST" action="index5-arquivo.php">
        <fieldset>
            <p> Nome </p>
            <input type="text" name="nome" >
            <p> Matricula </p>
            <input type="text" name="matricula" >
            <p> AV1 </p>
            <input type="text" name="av1" id="av1">
            <p> AV2 </p>
            <input type="text" name="av2" id="av2">
            <button type="submit">ENVIAR</button>
        </fieldset>
    </form>
    <!---<script>
        var med = document.getElementById("med");
        var
    </script>--->
</body>
</html>