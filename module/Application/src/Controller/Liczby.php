<?php

namespace Application\Controller;

class Liczby
{
    public function generuj(): array
    {
        $tablica = [];

        for ($x=0;$x<100;$x++)
        {
            array_push($tablica, rand(1,1000));
        }
        sort($tablica);
        return $tablica;
    }
}