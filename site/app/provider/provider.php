<?php 
/*getcontainer() es una funcion de app-> de slim que te devuelve un array, en el que añadiremos lo que necesitemos.*/

$aContainer = $app -> getContainer();


$aContainer['Home_Controller'] = function ($cContainer) { return new \Controller\Home_Controller($cContainer);};
$aContainer['Frase_Controller'] = function ($cContainer) { return new \Controller\Frase_Controller($cContainer);};

