<?php
namespace Controller;


use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Pokemon_Controller {

    private $pokemonFile;
    private $cContainer;
    private $size;
    private $pokemonObject;

    public function __construct(Container $cContainer) {
        $this-> cContainer = $cContainer;
        $this->pokemonFile = file_get_contents('../databases/pokemon.json');
        $this->pokemonObject = json_decode($this->pokemonFile, true);
        $this->size = count($this->pokemonObject);
        //var_dump($this->pokemonObject);
        
    }

    public function getRandomPokemon (Request $request, Response $response) {
        $aleatorio = mt_rand(0, $this->size-1);
        return $this->pokemonObject[$aleatorio][name];
    }

    public function getTotal (Request $request, Response $response){
        return strval($this->size);
    }

    public function getPokemon (Request $request, Response $response, $args){
        return $this->pokemonObject[$args['numero']-1][name];
    }

    public function showAll (Request $request, Response $response) {
        for ($i=0; $i < $this->size; $i++) {
            echo $this->pokemonObject[$i][name];
            echo "<br>"; 
        }

    }

    public function showAttack (Request $request, Response $response, $args) {
        return "Attack of pokemon <b>". $this->pokemonObject[$args['attack']][name] . "</b> = " . strval($this->pokemonObject[$args['attack']][baseStats][attack]);

    }

    public function showDefense (Request $request, Response $response, $args) {
        return "Defense of pokemon <b>". $this->pokemonObject[$args['defense']][name] . "</b> = " . strval($this->pokemonObject[$args['defense']][baseStats][defense]);

    }

    public function showSpeed (Request $request, Response $response, $args) {
        return "Speed of pokemon <b>". $this->pokemonObject[$args['speed']][name] . "</b> = ". strval($this->pokemonObject[$args['speed']][baseStats][speed]);

    }

    public function showHp (Request $request, Response $response, $args) {
        return "Health points of pokemon <b>". $this->pokemonObject[$args['hp']][name] . "</b> = " . strval($this->pokemonObject[$args['hp']][baseStats][hp]);

    }

    public function showSpecial (Request $request, Response $response, $args) {
        return "Special of pokemon <b>". $this->pokemonObject[$args['special']][name] . "</b> = " . strval($this->pokemonObject[$args['special']][baseStats][special]);

    }

    public function showBaseStats (Request $request, Response $response, $args) {
        return $this->pokemonObject[$args['bs']][baseStats][special] . $this->pokemonObject[$args['bs']][baseStats][hp] . $this->pokemonObject[$args['bs']][baseStats][speed] . $this->pokemonObject[$args['bs']][baseStats][defense] . $this->pokemonObject[$args['bs']][baseStats][attack];

    }
}
?>