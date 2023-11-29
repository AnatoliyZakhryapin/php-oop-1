<?php

require_once __DIR__ . './Production.php';

class Movie extends Production
{
    public $profit;
    public $duration;

    function __construct(
        String $_title,
        array $_language,
        Bool $_subtitle,
        array $_actors,
        Int $_rating,
        String $_src_poster,
        Int $_profit,
        String $_duration
    ) {
        parent::__construct($_title, $_language, $_subtitle, $_actors, $_rating, $_src_poster);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function setProfit($_profit)
    {
        $this->profit = $_profit;
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function setDuration($_duration)
    {
        $this->duration = $_duration;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getAdditionalInfos()
    {
        return [
            'Duration' => $this->duration,
            'Profit' => $this->profit,
        ];
    }
}
