<?php

class Production {
    public $title;
    public $language;
    public $subtitle;
    public $rating;

    function __construct( String $_title, Array $_language, Bool $_subtitle, Int $_rating){
        $this->title = $_title;
        $this->language = $_language;
        $this->subtitle = $_subtitle;
        $this->setRating($_rating);
    }

    public function setRating($vote){
        if(is_numeric($vote) && $vote >= 0){
            $this->rating = intval($vote);
        } else {
            $this->rating = 0;
            var_dump('Il parametro $rate non è corretto');
        }
    }

};

$scary_movie = new Production ('Scary movie', ['italiano', 'inglese'], true, 8,5);
$scary_movie = new Production ('Armor of God', ['inglese'], true, 10);
var_dump($scary_movie, $armor_of_god);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Php-OOP</h1>
</body>
</html>