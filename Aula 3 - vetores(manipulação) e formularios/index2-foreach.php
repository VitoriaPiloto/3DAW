<?php
    $i;
    $listaNomes =  array("Vitória", "Tânia", "Vânia", "Lurdes");
    $listaNotas =  array(9.0, 9.5, 5.5, 4.0);
    $j = sizeof($listaNomes);
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista Alunos</title>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
      body{
        font-family:'Source Sans Pro', sans-serif;
        background-image: linear-gradient(45deg, rgba(194, 233, 221, 0.5) 1%, rgba(104, 119, 132, 0.5) 100%), linear-gradient(-45deg, #494d71 0%, rgba(217, 230, 185, 0.5) 80%); 
        text-align: center;
      }
      table{
        border: 3px solid darkgray;
        border-collapse: collapse; 
        margin: auto;
        width: 50%;
        text-align: center;
      }
      th{
	      background: #000;
        padding: 10px;
        color: white;
      }
      tr, td{
        border: 2px solid darkgray;
        border-collapse: collapse;
        background: lightgray;
      }
    </style>
</head>
<body>
    <h1>
      TABELA NOMES 
    </h1>
    <table>
    <tr>
    <th>Nome</th>
    </tr>
        <?php 
        foreach ($listaNomes as $nome) { 
        ?>
            <tr>
                <td><?php echo "$nome";?></td> 
                 
            </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>