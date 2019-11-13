<?php

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        $this->template->jmeno = 'Tomáš Vlček';
        $this->template->vek = 42;
        $this->template->prezdivka = 'Vlčák';
    }
}
