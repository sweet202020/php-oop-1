
    <?php
    //è definita una classe ‘Movie’
    class Movie
    {
        //all'interno della classe sono dichiarate delle variabili d'istanza
        public $title;
        public $duration;
        public $genres;
        public $language;
        public $vote;
        public $type;
        //all'interno della classe è definito un costruttore
        public function __construct($title, array $genres, $duration)
        {
            $this->title = $title;
            $this->genres = $genres;
            $this->duration = $duration;
        }
        //all'interno della classe è definito almeno un metodo
        public function setDuration($duration)
        {
            if ($duration < 40) {
                $this->type = "è un cortometraggio";
            } else if ($duration > 40 && $duration < 60) {
                $this->type = "è un mediometraggio";
            } else {
                $this->type = "è un lungometraggio";
            }
        }
        public function getDuration()
        {
            return $this->type;
        }
        //method 2 to add a genre
        public function addGenre($genre)
        {
            if (!in_array($genre, $this->genres)) {
                $this->genres[] = $genre;
            }
        }
    };

    //vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    $matrix = new Movie('matrix', ['sci-fi', 'action'], 90);
    $matrix->setDuration(90);
    //method 1
    $harry = new Movie('harry potter e il calice di fuoco', ['fantasy', 'adventure'], 30);
    //method 2
    $harry->addGenre('romantic');
    $harry->setDuration(30);
    var_dump($matrix);
    var_dump($harry);
    ?>