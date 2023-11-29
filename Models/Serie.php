<?php

require_once __DIR__ . './Production.php';

class Serie extends Production
{
    public $season;

    function __construct(
        String $_title,
        array $_language,
        Bool $_subtitle,
        array $_actors,
        Int $_rating,
        String $_src_poster,
        Int $_season
    ) {
        parent::__construct($_title, $_language, $_subtitle, $_actors, $_rating, $_src_poster);
        $this->setSeason($_season);
    }

    public function setSeason($_season)
    {
        $this->season = $_season;
    }

    public function getSeason()
    {
        return $this->season;
    }

    public function getAdditionalInfos()
    {
        return [
            'Season' => $this->season,
        ];
    }
}
