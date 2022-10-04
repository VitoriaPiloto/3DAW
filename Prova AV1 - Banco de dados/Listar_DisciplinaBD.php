<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3dawacademicomanha";
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error)
    {
        die ("Conexão não funcionou!");
    }
    // cria a instrução SQL que vai selecionar os dados
    $sql = sprintf("SELECT `nome`, `id` ,`periodo`,`idPreRequisito`,`creditos` FROM `disciplina`");
    // executa a query
    $result = $conn->query($sql);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($result);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar todas as disciplinas</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            padding-right:25%;
            padding-left:25%;
            padding-top: 10%;
            text-transform: capitalize;
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
            color: #5C1000;  
        }

        table {
        width: 100%;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Lista de disciplinas</h1>
    <table>
        <th>nome</th>
        <th>id</th>
        <th>periodo</th>
        <th>ID Pre-requisito</th>
        <th>creditos</th>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			
                <tr>
                <td>
                        <?=$linha['nome']?>
                    </td>
                    <td>
                        <?=$linha['id']?>
                    </td>                
                    <td>
                        <?=$linha['periodo']?>
                    </td>
                    <td>
                        <?=$linha['idPreRequisito']?>
                    </td>
                    <td>
                        <?=$linha['creditos']?>
                    </td>
                </tr>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($result));
	// fim do if
	}
?>
</table> 
</body>
</html>
