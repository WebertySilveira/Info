<?php

namespace Src\Challenge;

class PrimeNumber
{
    private $primeNumber, $numbers;

    public function getPrimeNumber()
    {
        return $this->primeNumber;
    }

    public function getNumbers()
    {
        return $this->numbers;
    }

    public function primeNumberRange($initial, $ending)
    {
        for($count = $initial; $count < $ending; $count++)
        {
            $this->primeNumber = 0;
            for($n = 1; $n <= $count; $n++)
            {
                if($count % $n == 0)
                {
                    $this->primeNumber++;
                }
            }

            if($this->primeNumber == 2)
            {
                $this->numbers[] = $count;
            }
        }
    }
}