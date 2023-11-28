<?php

include 'actors.php';

class Production {
    public $title;
    public $language;
    public $subtitle;
    public $actors;
    public $rating;
    public $src_poster;

    function __construct( String $_title, Array $_language, Bool $_subtitle, Array $_actors, Int $_rating, String $_src_poster){
        $this->title = $_title;
        $this->language = $_language;
        $this->subtitle = $_subtitle;
        $this->actors = $_actors;
        $this->setRating($_rating);
        $this->src_poster = $_src_poster;
    }

    public function setRating($vote){
        if(is_numeric($vote) && $vote >= 0){
            $this->rating = intval($vote);
        } else {
            $this->rating = 0;
            var_dump('Il parametro $rate non è corretto');
        }
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function getSrcPoster() {
        return $this->src_poster;
    }

    public function getLanguageAsString() {
        $languages = '';
        foreach($this->language as $element) {
            $languages .= " $element";
        }
        return $languages;
    }

    public function hasSubtitle() {
        if($this->subtitle) {
            $hasSubtitle = "Si";
            return $hasSubtitle;
        } else {
            $hasSubtitle = "No";
            return $hasSubtitle;
        }
    }

    public function printActors() {
        $actors = $this->actors;
        $actors_string = '';
        foreach($actors as $actor) {
            $actors_string .= "<a href=''>$actor->full_name</a>" . ' ';
        }
        return $actors_string;
    }

    public function printVote() {
        $vote = $this->rating;
        $vote_string = '';
        for($i = 0; $i < 10; $i++) {
            if($i < $vote){
                $vote_string .=  '<span><i class="fa-solid fa-star" style="color: #fedd06;"></i></span>';
            } else {
                $vote_string .=  '<span><i class="fa-regular fa-star" style="color: #fedd06;"></i></span>';
            }
        }
       return $vote_string;
    }
};

$scary_movie_1 = new Production ('Scary movie 1', ['italiano', 'inglese'], true, [$marlon_wayans, $shawn_wayans], 6, './img/img1.jpg');
$scary_movie_2 = new Production ('Scary movie 2', ['italiano', 'inglese'], true, [$marlon_wayans, $shawn_wayans], 7, './img/img2.jpg');
$armor_of_god_1 = new Production ('Armor of God 1', ['inglese'], false, [$jackie_chan, $alan_tam], 10, './img/img3.jpg');
$armor_of_god_2 = new Production ('Armor of God 2', ['inglese'], false, [$jackie_chan, $alan_tam], 10, './img/img4.jpg');
$who_am_i = new Production ('Who i am ?', ['cinese'], true, [$jackie_chan, new Actor ('Mirai', 'Yamamoto', '11/04/1974' )], 10, './img/img6.jpg');

$movies = [
    $scary_movie_1, 
    $scary_movie_2,
    new Production ('Scray movie 3', ['italiano'], false,[$marlon_wayans, $shawn_wayans, new Actor ('Anna', 'Faris', '29/11/1976' )], 0, './img/img5.jpg'), 
    $armor_of_god_1, 
    $armor_of_god_2, 
    $who_am_i
];