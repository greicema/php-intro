<?php
session_start();

$classes = [];
$classes[] = 'child';
$classes[] = 'teen';
$classes[] = 'adult';
$classes[] = 'senior';
$classes[] = 'not-applicable';

//print_r($classes);

$name = $_POST['name'];
$age = $_POST['age'];

//empty() verifica se o campo se resposta está vazio
if(empty($name)){
    $_SESSION['error-message'] = 'O campo de nome pode estar vazio.';
    header('location: index.php');
    return;
}

else if(empty($age)){
    $_SESSION['error-message'] = 'O campo de idade pode estar vazio.';
    header('location: index.php');
    return;
}

//strlen conta o número de caracteres em uma string
else if(strlen($name) <3 ){
    $_SESSION['error-message'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php');
    return;
}

else if(strlen($name) >40 ){
    $_SESSION['error-message'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}

else if(strlen($age) >2){
    $_SESSION['error-message'] = 'Digite a idade corretamente.';
    header('location: index.php');
    return;
}

//is_numeric serve para identificar números
else if(is_numeric($name)){
    $_SESSION['error-message'] = 'O nome não pode conter números';
    header('location: index.php');
    return;
}

else if(!is_numeric($age)){
    $_SESSION['error-message'] = 'A idade não poder letras.';
    header('location: index.php');
    return;
}

/*var_dump($name); o var_dump exibe infomações das variáveis
var_dump($age);*/

if($age >= 6 && $age <= 12){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'child'){
            $_SESSION['success-message'] = 'O(a) nadador(a)';  $name;  'compete na categoria infantil'; //o vscode não está aceitando a vírgula e compromete o funcionamento de tudo
            header('location: index.php');
            return;
        }
    }
}

else if($age >= 13 && $age <= 18){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'tee'){
            $_SESSION['success-message'] = 'O(a) nadador(a) '; $name; ' compete na categoria adolescente';
            header('location: index.php');
            return;
        }
    }
}

else if($age >=19 && $age <= 59){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'adult'){
            $_SESSION['success-message'] = 'O(a) nadador(a) '; $name; ' compete na categoria adulto';
            header('location: index.php');
            return;            
        }
    }
}

else if($age >= 60){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'senior'){
            $_SESSION['success-message'] = 'O(a) nadador(a) '; $name; ' compete na categoria idoso';
            header('location: index.php');
            return;            
        }
    }
}


else{
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'not-applicable'){
            $_SESSION['success-message'] = 'O(a) nadador(a) '; $name; ' não tem idade para competir';
            header('location: index.php');
            return;
        }
    }
}

//para exibir -> http://localhost/php-training/