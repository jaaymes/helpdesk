<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logoff</title>
</head>
<body>
    
<script src="js/sweetalert2.all.min.js"></script>
<?php

session_start();

session_destroy();

echo "<script type='text/javascript'>
        Swal.fire({
          icon: 'warning',
          title: 'Sessão Encerrada',
          text: 'redirecionando para a pagina inicial',
          showConfirmButton: false,
          timer: 3000
        });
        setTimeout(function(){ window.location.replace('index.php'); }, 3000);
        

        </script>"; 

?>
</body>
</html>

