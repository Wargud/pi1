<?php

namespace Application\Controller;

class Miesiace
{
    public function pobierzWszystkie(): array
    {
        return [["Styczeń","Red"],
        ['Luty','Blue'],
        ['Marzec','Green'],
        ['Kwiecień','Yellow'],
        ['Maj','Brown'],
        ['Czerwiec','Pink'],
        ['Lipiec','Purple'],
        ['Sierpień','LightBlue'],
        ['Wrzesień','Orange'],
        ['Październik','Grey'],
        ['Listopad','White'],
        ['Grudzień','Black']];
    }
}