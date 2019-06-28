<?php
namespace Controller;



use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Home_Controller {
    protected $cContainer;

    public function __construct(Container $cContainer) {
        $this-> cContainer = $cContainer;
    }

    public function getHola (Request $Request, Response $Response) {
        $array = ['hola'];
        return $this->cContainer->view->render($Response, 'index.twig', $array);
    }
}

?>