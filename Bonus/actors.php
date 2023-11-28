<?php

class Actor {
    public $name;
    public $full_name;
    public $last_name;
    public $birth_day;

    function __construct(String $_name, String $_last_name, String $_birth_day) {
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->full_name = $_name . ' ' . $_last_name;
        $this->birth_day = $_birth_day;
    }
}

$jackie_chan = new Actor ('Jackie', 'Chan', '7/04/1954' );
$marlon_wayans = new Actor ('Marlon', 'Wayans', '23/07/1972');
$shawn_wayans = new Actor ('Shawn','Wayans', '19/01/1791');
$alan_tam = new Actor ('Alan', 'Tam', '23/08/1950');