<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function miesiaceAction()
    {
        $Miesiace = new Miesiace();

        return ['Miesiace' => $Miesiace->pobierzWszystkie()];
    }

    public function liczbyAction()
    {
        $Liczby = new Liczby();

        return ['Liczby' => $Liczby->generuj()];

    }
}
