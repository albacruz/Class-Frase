<?php

    /* $app->get('/controller', Pokemon_Controller::Class . ':getHola');
    $app->get('/controller2', Pokemon_Controller::Class . ':getRandomPokemon');
    $app->get('/controller3', Pokemon_Controller::Class . ':getTotal');
    $app->get('/controller4/{numero}', Pokemon_Controller::Class . ':getPokemon');
    $app->get('/controller6', Pokemon_Controller::Class . ':showAll');
    $app->get('/controller5', Home_Controller::Class . ':getHola');
    $app->get('/controller7/{attack}', Pokemon_Controller::Class . ':showAttack');
    $app->get('/controller8/{defense}', Pokemon_Controller::Class . ':showDefense');
    $app->get('/controller9/{speed}', Pokemon_Controller::Class . ':showSpeed');
    $app->get('/controller10/{hp}', Pokemon_Controller::Class . ':showHp');
    $app->get('/controller11/{special}', Pokemon_Controller::Class . ':showSpecial');
    $app->get('/controller12/{bs}', Pokemon_Controller::Class . ':showBaseStats');
 */
    $app -> get('/home/middleware/no', function () { return 'Hello'; });
    $app -> get('/home/middleware/yes', function () { return 'Hello'; }) -> add(Home_Middleware::Class . ':getPath');
    $app -> get('/home/middleware/json', function () { return 'Hello'; }) -> add(Home_Middleware::Class . ':getJson');

?>