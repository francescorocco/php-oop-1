<?php

class Mouvies {

    public $name;
    public $release_date;
    public $duration;
    public $genres;


        public function __construct($nome, $data_pubblicazione, array $generi,$durata = 120 ){
            $this->name = $nome;
            $this->release_date = $data_pubblicazione;
            $this->duration = $durata;
            $this->genres = $generi;
        }

        public function getFullMouvieInformation(){
            return 
            '<h1>'. $this->name .'</h1>' . 
            '<ul>'.
                phpforech($this->genres as $element)'<li>'.'</li>'    $this->genres.
            '</ul>'.
            '<h3>'.$this->release_date.'</h3>' .
            '<p>'.$this->duration.'Minuti'.'</p>';
        }
}


?>