<?php

// Include Composer autoload
  require('../vendor/autoload.php');
  include "classfrase.php";

  $file = 'frases.txt';
  $frase = new Frase($file);

  $app = new \Slim\App;
  $app->get('/fraseAleatoria', function() use ($frase){
    echo $frase->getRandomPhrase();
  });
  $app->get('/frase/{numero}', function($request, $response, $args) use ($frase){
    echo $frase->getPhrase($args['numero']);
  });

  $app->get('/addFrase/{frase}', function($request, $response, $args) use ($frase, $file){
    $frase->addPhrase($file, $args['frase']);
  });
  $app->run();

  ?>