<?php
    error_reporting(E_ERROR | E_PARSE);
    $ehPost = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3daw_acad_manha";
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $matricula = $_POST["matricula"];
    if ($conn->connect_error) {
        die ("Conexão não funcionou!");
    }
    // cria a instrução SQL que vai selecionar os dados
    $sql = sprintf("SELECT `nome`, `matricula` ,`email` FROM `alunos` WHERE `matricula` = $matricula");
    // executa a query
    $result = $conn->query($sql);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($result);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($result);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            padding-right:25%;
            padding-left:25%;
            padding-top: 10%;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            background-color: beige;
        }
        table, td, tr, th {
        border: 1px solid;
        }

        th{
            background-color: burlywood;
        }

        h1{
            color: #E82901;  
        }

        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 7vh;
        }
        input{
            background-color: beige;
            padding: 5px;
            border: 1px solid black;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            width: 70%;
        }

        label, input{
            margin-left: 5vw;
        }

        label{
            margin-bottom: -4vh;
        }
        
        fieldset{
            display: grid;
            border: 1px solid #5C1000;
        }

        legend{
            margin-left: 2.5vw;
            margin-right: 2.5vw;
            font-size: large;
            color:#5C1000;
        }
        #button{
            width: 30%;
            margin-top: 1vh;
            padding: 10px;
            background-color: #E82901;
            border:none;
            color:beige;
            text-transform: uppercase;
        }
        #button:hover{
            cursor: pointer;
            background-color: #5C1000;
        }
    </style>
</head>
<body>
    <h1>BUSCA ALUNO ESPECÍFICO</h1>
    <form action="ListaEspecifico_AlunosBD.php" method="POST">
        <fieldset>
            <legend>Insira a matrícula do aluno que deseja deletar</legend>
            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>
            <input type="submit" value="Enviar" id="button">
        </fieldset>
        <table>
        <th>nome</th>
        <th>matricula</th>
        <th>email</th>
    </form>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
?>
                <tr>
                    <td>
                        <?=$linha['nome']?>
                    </td>
                    <td>
                        <?=$linha['matricula']?>
                    </td>                
                    <td>
                        <?=$linha['email']?>
                    </td>
                </tr>
<?php
	// fim do if
	} 
?>   
</table> 
</body>
</html>
