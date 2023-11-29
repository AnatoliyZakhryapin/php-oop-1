<?php

class Actor
{
    public $name;
    public $full_name;
    public $last_name;
    public $birth_day;

    function __construct(String $_name, String $_last_name, String $_birth_day)
    {
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->full_name = $_name . ' ' . $_last_name;
        $this->birth_day = $_birth_day;
    }
}
