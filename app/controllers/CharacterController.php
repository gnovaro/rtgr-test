<?php
declare(strict_types=1);

use Rtgr\Models\Character;
use Phalcon\Mvc\View;

class CharacterController extends ControllerBase
{

    public function indexAction()
    {
        echo 'aca';
        $character = new Character();
        die('despues de instanciar');
        var_dump($character);
        die;
        $characters = $character->getAll();
    }

}
