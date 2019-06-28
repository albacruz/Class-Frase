<?php
namespace Middleware;



use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Home_Middleware {
    protected $cContainer;

    public function __construct(Container $cContainer) {
        $this-> cContainer = $cContainer;
    }

    public function getHola (Request $Request, Response $Response) {
        $array = ['hola'];
        return $this->cContainer->view->render($Response, 'index.twig', $array);
    }

    public function __invoke (Request $Request, Response $Response, $cNext){
        $Response->getBody()->write('BEFORE ');
        $Response = $cNext($Request, $Response);
        $Response->getBody()->write(' AFTER');
        return $Response;
    }

    public function getPath (Request $Request, Response $Response) {
        $Response->getBody()->write($this->cContainer -> get('config')['db']['path']);
        return $Response;
    }

    public function getJson (Request $Request, Response $Response) {
        /* $array = json_decode(json_encode($this->cContainer -> get('config')), true);
        $Response->getBody()->write($array['view']['path']); */
        $Response->getBody()->write(json_encode($this->cContainer -> get('config')));
        return $Response;
    }
}

?>