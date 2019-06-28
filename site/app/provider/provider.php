<?php 
/*getcontainer() es una funcion de app-> de slim que te devuelve un array, en el que añadiremos lo que necesitemos.*/

$aContainer = $app -> getContainer();

$aContainer['view'] = function ($cContainer) {
    $aConfig = $cContainer -> get('config')['view'];
    $vViews = new \Slim\Views\Twig($aConfig['path'], $aConfig['twig']);
    $vViews -> addExtension(new \Slim\Views\TwigExtension(
        $cContainer -> router,
        $cContainer -> request -> getUri()
    ));

    return $vViews;
};

$aContainer['Home_Controller'] = function ($cContainer) { return new \Controller\Home_Controller($cContainer);};
$aContainer['Frase_Controller'] = function ($cContainer) { return new \Controller\Frase_Controller($cContainer);};
$aContainer['Pokemon_Controller'] = function ($cContainer) { return new \Controller\Pokemon_Controller($cContainer);};
$aContainer['Home_Middleware'] = function ($cContainer) { return new \Middleware\Home_Middleware($cContainer);};


