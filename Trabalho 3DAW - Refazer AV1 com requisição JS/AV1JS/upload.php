<?php
$ehPost=true;
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "3daw_acad_manha"; 
$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);

if ($conn->connect_error) {
    die ("Conexão não funcionou!");
}

 
if ($ehPost==true){
 
    // Tipos permitidos de separadores
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validar se o arquivo selecionado é um arquivo CSV
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {
 
            // Abrir arquivo CSV somente no modo leitura
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
 
            // Analisar linha a linha do arquivo
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Pega o dado do índice da liha (ou seja, o que está antes da vírgula)
                $nome = $getData[0];
                $email = $getData[1];
                $senha = $getData[2];
                $tipo = $getData[3];
                $perfil = $getData[4];
                //Insere o usuário com o comando sql
                mysqli_query($conn, "INSERT INTO usuario (nome, email, senha, tipo, perfil) VALUES ('$nome', '$email', '$senha', '$tipo', '$perfil')");
                 
            }
            // Fechar arquivo
            fclose($csvFile);
            echo "usuário adicionado";
    } else{
        echo "Arquivo inválido";
    }
} else {
    $ehPost=false;
}
?>