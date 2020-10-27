<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando Chamado</title>
</head>
<body>
    
<script src="js/sweetalert2.all.min.js"></script>

<?php
session_start();
//escrevendo o texto
$titulo = str_replace('#', '-',$_POST['titulo'] );
$categoria = str_replace('#', '-',$_POST['categoria'] );
$descricao = str_replace('#', '-',$_POST['descricao'] );

$texto = $_SESSION['id'] .'#'. $titulo . ' # '. $categoria . '#' . $descricao . PHP_EOL;
//abrindo o arquivo
$arquivo = fopen('arquivo.txt', 'a');
//escrevendo o arquivo
fwrite($arquivo, $texto);
//fechando o arquivo
fclose($arquivo);

echo "<script type='text/javascript'>
        Swal.fire({
          icon: 'info',
          title: 'Chamado Registrado',
          text: 'Chamado Registrado logo entraremos em contato',
          showConfirmButton: false,
          timer: 3000
        });
        setTimeout(function(){ window.location.replace('abrir_chamado.php'); }, 3000);
        

        </script>";  

?>
