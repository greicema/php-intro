<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulário de inscrição</title>
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>    
    <form action="script.php" method="post">
    <?php
        $errorMessage = isset($_SESSION['error-message']) ? $_SESSION['error-message'] : '';
        if(!empty($errorMessage)){
            echo $errorMessage;
        }

        $successMessage = isset($_SESSION['success-message']) ? $_SESSION['success-message'] : '';
        if(!empty($successMessage)){
            echo $successMessage;
        }
    ?>
        <p>Seu nome: <input type="text" name="name"/></p>
        <p>Sua idade: <input type="text" name="age"/></p>        
        <p><input type="submit"/></p>        
    </form>

</body>

</html>