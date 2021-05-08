<?php

//declare(strict_types = 1); -> checagem mais rígida dos valores apresentados

function nameValidation(string $name) : bool {

    //empty() verifica se o campo se resposta está vazio
    if(empty($name)){
        getErrorMessage('O campo de nome não pode estar vazio.');
        return false;
    }

    //strlen conta o número de caracteres em uma string
    else if(strlen($name) < 3 ){
        getErrorMessage('O nome deve conter mais de 3 caracteres.');
        return false;
    }

    else if(strlen($name) > 40 ){
        getErrorMessage('O nome é muito extenso');
        return false;
    }

    //is_numeric serve para identificar números
    else if(is_numeric($name)){
        getErrorMessage('O nome não pode conter números');
        return false;
    }
    return true;
}

function ageValidation(string $age) : bool {
    
    if(empty($age)){
        getErrorMessage('O campo de idade não pode estar vazio.');
        return false;
    }   
    return true;
}



