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
        return floor($year/60) . ":" . $year % 60;
    }
}
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
<body>
    
</body>
</html>