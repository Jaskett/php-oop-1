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
?>