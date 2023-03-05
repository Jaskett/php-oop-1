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
            return "Title: " . $this->title . "<br>Running Time: " . $this->runningTime . "<br>Language: " . $this->language;
        }
    }

    // Istanzio due oggetti `Movie` e stampo a schermo i valori delle relative proprietà:
    $movie1 = new Movie("Django Unchained", "2h 45m", "English");
    $movie2 = new Movie("Titanic", "3h 16m", "english");

    echo $movie1->getHtml();
    echo $movie2->getHtml();
?>