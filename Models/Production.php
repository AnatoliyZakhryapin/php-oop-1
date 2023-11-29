<?php

require_once __DIR__ . './Actors.php';

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
        $array = [];
        $vote = $this->rating;
        for($i = 0; $i < 10; $i++) {
            if($i < $vote){
                $array[]=  "fa-solid";
            } else {
                $array[]=  "fa-regular";
            }
        }
       return $array;
    }

    public function getAdditionalInfos() {
        return [];
    }
};