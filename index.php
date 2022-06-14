<?php
class Movie {
    public $movieName;
    public $genre;
    public $year;
    private $minutes;

    function __construct($_movieName, $_genre = [], $_year, $_minutes = 0) {
        $this->movieName = $_movieName;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->minutes = $_minutes;
    }
    public function getHours() {
        return floor($this->minutes/60) . ":". ($this->minutes % 60 <10 ? "0" : "") . $this->minutes % 60;
    }
}
//Objs
$movies = [];
$fc = new Movie("Fight Club", ["drammatico", "commedia", "thriller", "noir", "azione"], 1999, 139);
$movies[] = $fc;
$vertigo = new Movie("Vertigo", ["giallo", "sentimentale", "thriller"], 1958, 128);
$movies[] = $vertigo;
$orange = new Movie("Arancia Meccanica", ["drammatico", "grottesco", "fantascienza"], 1971, 136);
$movies[] = $orange;
$pf = new Movie("Pulp Fiction", ["drammatico", "commedia", "thriller", "noir", "gangster"], 1994, 154);
$movies[] = $pf;
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Movies</title>
</head>
<body style = "font-family: sans-serif">
    <h1>Lista dei film in catalogo</h1>
    <hr>
    <ul>
        <?php foreach($movies as $movie) {?>
        <li>
            <h2>
                <?php echo $movie->movieName; ?>
            </h2>
            <p>
                Anno: 
                <?php echo $movie->year;?>
            </p>
            <p>
                Generi: 
                <?php
                    $last = count($movie->genre) - 1;
                    foreach($movie->genre as $index=>$elem) {
                        echo $elem; 
                        echo ($index === $last) ? "" : ", ";
                    }              
                ?>
            </p>
            <p>
                Durata: 
                <?php echo $movie->getHours();?>
            </p>
        </li>
        <?php } ?>
    </ul>
</body>
</html>