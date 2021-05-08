<?php

function competitorCategoryDefine(string $name, string $age) : ?string {

    $classes = [];
    $classes[] = 'child';
    $classes[] = 'teen';
    $classes[] = 'adult';
    $classes[] = 'senior';
    $classes[] = 'not-applicable';

    if(nameValidation($name) && ageValidation($age)){
        errorMessageRemove();
        
        if($age >= 6 && $age <= 12){
            for ($i = 0; $i <= count($classes); $i++){
                if($classes[$i] == 'child'){
                    successMessageSet('O(a) nadador(a) '.  $name. ' compete na categoria infantil'); 
                    return null;
                }
            }
        }
        
        else if($age >= 13 && $age <= 18){
            for ($i = 0; $i <= count($classes); $i++){
                if($classes[$i] == 'teen'){
                    successMessageSet('O(a) nadador(a) '. $name. ' compete na categoria adolescente');  
                    return null;
                }
            }
        }
        
        else if($age >=19 && $age <= 59){
            for ($i = 0; $i <= count($classes); $i++){
                if($classes[$i] == 'adult'){
                    successMessageSet('O(a) nadador(a) '. $name. ' compete na categoria adulto');
                    return null;            
                }
            }
        }
        
        else if($age >= 60){
            for ($i = 0; $i <= count($classes); $i++){
                if($classes[$i] == 'senior'){
                    successMessageSet('O(a) nadador(a) '. $name. ' compete na categoria idoso');
                    return null;            
                }
            }
        }
        
        else{
            for ($i = 0; $i <= count($classes); $i++){
                if($classes[$i] == 'not-applicable'){
                    successMessageSet('O(a) nadador(a) '. $name. ' não tem idade para competir');
                    return null;
                }
            }
        }
    }else{
        successMessageRemove();
        return getErrorMessage();
    }
    
}

    