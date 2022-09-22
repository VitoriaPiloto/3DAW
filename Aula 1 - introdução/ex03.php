<?php
	$nome = $_POST["nome"];
    $idade = $_POST["idade"];

//echo $nome;
//echo $idade;
?>
<!Doctype html>
<html>
<head>
    <title>Ex03 form</title>
</head>
<body>
    <h1>ex03 form</h1>
<form action="ex03.php" method="POST">
nome: <input type="text" name="nome"> <br>
idade: <input type="text" name="idade"> <br>
<input type="submit" value="enviar">
</form>
<br><br>
nome = <?php echo $nome ?>
<br>
idade = <?php echo $idade ?>
</body>
</html>