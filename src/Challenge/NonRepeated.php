<?php

namespace Src\Challenge;

class NonRepeated
{
    private $list;

    public function getList()
    {
        return $this->list;
    }

    public function repeatedValue($array)
    {
        $this->list = [];
        $array = array_count_values($array);
    
        foreach($array as $key => $value)
        {
            if($value == 1)
            {
                array_push($this->list, $key);
            }
        }
    }
}