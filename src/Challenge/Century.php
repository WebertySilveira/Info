<?php

namespace Src\Challenge;

class Century
{
    private $year, $century;

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getCentury()
    {
        return $this->century;
    }

    public function centuryFromYear()
    {
        $this->century = ceil($this->getYear() / 100);
    }
}