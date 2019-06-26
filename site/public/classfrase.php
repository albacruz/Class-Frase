<?php

class Frase {
    private $arrayPhrase = [];
    private $length;

    public function __construct($file) {
        $this->arrayPhrase = file($file);
        $this->length = count($this->arrayPhrase);
    }

    public function getRandomPhrase () {
        $aleatorio = mt_rand(0, $this->length-1);
        return $this->arrayPhrase[$aleatorio];
    }

    public function getTotal (){
        return $this->length;
    }

    public function getPhrase ($line){
        return $this->arrayPhrase[$line];
    }

    public function addPhrase ($file, $newPhrase) {
        file_put_contents($file, "\n" . $newPhrase, FILE_APPEND);
    }

    public function getArray () {
        return $this->arrayPhrase;
    }

    public function getLength () {
        return $this->length;
    }
}
?>