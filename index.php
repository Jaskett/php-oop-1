<?php
    class Movie
    {
        // Dichiaro le variabili d'istanza
        public $title;
        public $runningTime;
        public $language;

        // Definisco il costruttore
        public function __construct($title, $runningTime, $language)
        {
            $this->title = $title;
            $this->runningTime = $runningTime;
            $this->language = $language;
        }

        // Definisco il metodo
        public function getHtml()
        {
            return "<h1>Title: " . $this->title . "</h1>"
                . "<h3>Running Time: " . $this->runningTime . "</h3>"
                . "<h3>Language: " . $this->language . "</h3>";
        }
    }

    // Istanzio due oggetti `Movie` e stampo a schermo i valori delle relative proprietà:
    $django = new Movie("Django Unchained", "2h 45m", "English");
    $titanic = new Movie("Titanic", "3h 16m", "english");

    $movies = [$django, $titanic];

    foreach($movies as $movie) {
        echo $movie->getHtml();
    }
?>