<?php
namespace Controller;


use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Frase_Controller {
    private $arrayPhrase = [];
    private $length;
    private $cContainer;

    public function __construct(Container $cContainer) {
        $this-> cContainer = $cContainer;
        $this->arrayPhrase = file('frases.txt');
        $this->length = count($this->arrayPhrase);
    }

    public function getRandomPhrase (Request $request, Response $response) {
        $aleatorio = mt_rand(0, $this->length-1);
        return $this->arrayPhrase[$aleatorio];
    }

    public function getTotal (Request $request, Response $response){
        return strval($this->length);
    }

    public function getPhrase (Request $request, Response $response, $args){
        return $this->arrayPhrase[$args['numero']-1];
    }

    public function addPhrase (Request $request, Response $response, $args) {
        file_put_contents('frases.txt', "\n" . $args['frase'], FILE_APPEND);
    }

    public function showAll (Request $request, Response $response) {
        for ($i=0; $i < $this->length; $i++) {
            echo $this->arrayPhrase[$i];
            echo "<br>"; 
        }

    }
}
?>