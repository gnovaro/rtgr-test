<?php
declare(strict_types=1);

use Phalcon\Mvc\View;

class CharacterController extends ControllerBase
{

    public function indexAction()
    {
        $character = new Character();
        $this->view->characters = $character->getAll();
    }

}
