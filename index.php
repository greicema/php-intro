<?php
    include "services/messageServiceSession.php";
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
        $successMessage = getSuccessMessage();
        if(!empty($successMessage)){
            echo $successMessage;
        }
        
        $errorMessage = getErrorMessage();
        if(!empty($errorMessage)){
            echo $errorMessage;
        }        
    ?>
        <p>Seu nome: <input type="text" name="name"/></p>
        <p>Sua idade: <input type="text" name="age"/></p>        
        <p><input type="submit"/></p>        
    </form>

</body>

</html>