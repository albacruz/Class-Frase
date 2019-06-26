<?php

require __DIR__ . '/../../public/classfrase.php';

$file = 'frases.txt';
$frase = new Frase($file);

$app->get('/funciona', function(){
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
  });

?>