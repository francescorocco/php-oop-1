<?php

class Movies {

    public $name;
    public $release_date;
    public $duration;
    public $genres;


        public function __construct($nome, $data_pubblicazione, array $generi ,$durata = 120 ){
            $this->name = $nome;
            $this->release_date = $data_pubblicazione;
            $this->duration = $durata;
            $this->genres = $generi;
        }

        public function getFullMovieInformation(){

            	$genres_list = '';

                foreach($this->genres as $element){
                    $genres_list .= '<li>'.$element->name.'</li>';
                }

            return 
            "<div class='card'>".
                '<h1>'. $this->name .'</h1>' . 
                '<ul>'.
                $genres_list .
                '</ul>'.
                '<h3>'.$this->release_date.'</h3>' .
                '<p>'.$this->duration.'Minuti'.'</p>'.
            "</div>";
        }
}


?>