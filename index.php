
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
        public $type;
        //all'interno della classe è definito un costruttore
        public function __construct($title, $genre, $duration)
        {
            $this->title = $title;
            $this->genre = $genre;
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
    };

    //vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    $matrix = new Movie('matrix', 'sci-fi', 90);
    $matrix->setDuration(90);
    $harry = new Movie('harry potter e il calice di fuoco', 'fantasy', 30);
    $harry->setDuration(30);
    var_dump($matrix);
    var_dump($harry);
    ?>