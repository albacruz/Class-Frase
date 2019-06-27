<?php

/*$app->get('/funciona', function(){
    echo "Hola";
});

 $app->get('/fraseAleatoria', function() use ($frase){
    echo $frase->getRandomPhrase();
  });
  $app->get('/frase/{numero}', function($request, $response, $args) use ($frase){
    echo $frase->getPhrase($args['numero']);
  });

  $app->get('/addFrase/{frase}', function($request, $response, $args) use ($frase, $file){
    $frase->addPhrase($file, $args['frase']);
    echo "Se añadió la frase " . $args['frase'] . " al fichero " . $file . " .";
  });

  $app->get('/showAll', function() use ($frase, $file){
    $phraseArray = $frase->getArray();
    $length = $frase->getLength();

    echo "<h1> Fichero " . $file . "</h1>";

    for ($i=0; $i < $length; $i++) {
        echo $i+1 . ". " . $phraseArray[$i] . "<br>";
    };
  }); */

    $app->get('/controller', Home_Controller::Class . ':getHola');
    $app->get('/controller2', Frase_Controller::Class . ':getRandomPhrase');
    $app->get('/controller3/{numero}', Frase_Controller::Class . ':getPhrase');
    $app->get('/controller4/{frase}', Frase_Controller::Class . ':addPhrase');
    $app->get('/controller6', Frase_Controller::Class . ':showAll');


    $app->get('/controller5', Frase_Controller::Class . ':getTotal');
?>