<?php

class Mouvies {

    public $name;
    public $release_date;
    public $duration;


        public function __construct($nome, $data_pubblicazione, $durata = 120 ){
            $this->name = $nome;
            $this->release_date = $data_pubblicazione;
            $this->duration = $durata;
        }

        public function getFullMouvieInformation(){
            return 
            '<h1>'. $this->name .'</h1>' . 
            '<h3>'.$this->release_date.'</h3>' .
            '<p>'.$this->duration.'Minuti'.'</p>';
        }
}


?>