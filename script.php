<?php

include "services/messageServiceSession.php";
include "services/validationService.php";
include "services/competitorCategoryService.php";

//print_r($classes);

$name = $_POST['name'];
$age = $_POST['age'];

/*var_dump($name); o var_dump exibe infomações das variáveis
var_dump($age);*/

competitorCategoryDefine($name, $age);

header('location: index.php');

//para exibir -> http://localhost/php-training/