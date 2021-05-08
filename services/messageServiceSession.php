<?php

session_start();

//set + get
function successMessageSet(string $message) : void{
    $_SESSION['success-message'] = $message;
}

function getSuccessMessage() : ?string{
    if(isset($_SESSION['success-message']))
        return $_SESSION['success-message'];
    
    return null;
}

function errorMessageSet(string $message) : void{
    $_SESSION['error-message'] = $message;
}

function getErrorMessage() : ?string{
    if(isset($_SESSION['error-message']))
        return $_SESSION['error-message'];
    
    return null;
}

//remove
function successMessageRemove(){
    if(isset($_SESSION['success-message']))
        unset ($_SESSION['success-message']);
}

function errorMessageRemove(){
    if(isset($_SESSION['error-message']))
        unset($_SESSION['errror-message']);
}

