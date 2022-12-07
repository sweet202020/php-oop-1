<!-- 
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->
<?php
//è definita una classe ‘Movie’
class Movie
{
    //all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $duration;
    public $genre;
    public $language;
    public $vote;
    //all'interno della classe è definito un costruttore
    public function __construct($title, $genre)
    {
        $this->title = $title;
        $this->genre = $genre;
    }
    //all'interno della classe è definito almeno un metodo
};

$film = new Movie('matrix', 'fantasy');
var_dump($film)
?>