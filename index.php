<?php

$classes = [];
$classes[] = 'infantil';
$classes[] = 'adolescente';
$classes[] = 'adulto';
$classes[] = 'idoso';
$classes[] = 'nao-compete';

//print_r($classes);

$name = 'Eduardo';
$age = 2;

//var_dump($name); o var_dump exibe infomações das variáveis
//var_dump($age);

if($age >= 6 && $age <= 12){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'infantil'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria infantil';
        }
    }
}

else if($age >= 13 && $age <= 18){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'adolescente'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria adolescente';
        }
    }
}

else if($age >= 60){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'idoso'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria idoso';
        }
    }
}

else if($age >=19 && $age <= 59){
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'adulto'){
            echo 'O(a) nadador(a) ', $name, ' compete na categoria adulto';
        }
    }
}

else{
    for ($i = 0; $i <= count($classes); $i++){
        if($classes[$i] == 'nao-compete'){
            echo 'O(a) nadador(a) ', $name, ' não tem idade para competir';
        }
    }
}

//para exibir -> http://localhost/php-training/