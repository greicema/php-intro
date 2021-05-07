<?php

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
if(empty($name) || empty($age)){
    echo 'Nenhum campo pode estar vazio.';
    return;
}

//strlen conta o número de caracteres em uma string
if(strlen($name) <3 ){
    echo 'O nome deve conter mais de 3 caracteres.';
    return;
}

if(strlen($name) >40 ){
    echo 'O nome é muito extenso';
    return;
}

if(strlen($age) >2){
    echo 'Digite a idade corretamente.';
    return;
}

//is_numeric serve para identificar números
if(is_numeric($name)){
    echo 'O nome não pode conter números';
    return;
}

if(!is_numeric($age)){
    echo 'A idade não poder letras.';
    return;
}

/*var_dump($name); o var_dump exibe infomações das variáveis
var_dump($age);*/

if($age >= 6 && $age <= 12){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'child'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria infantil';
        }
    }
}

else if($age >= 13 && $age <= 18){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'tee'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria adolescente';
        }
    }
}

else if($age >=19 && $age <= 59){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'adult'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria adulto';
        }
    }
}

else if($age >= 60){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'senior'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria idoso';
        }
    }
}


else{
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'not-applicable'){
            echo 'O(a) nadador(a) ', $name, ' não tem idade para competir';
        }
    }
}

//para exibir -> http://localhost/php-training/