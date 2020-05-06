<?php

namespace Rtgr\Models;

use Rtgr\Models\Json;

class Character extends Json
{
    public function __construct()
    {
        $this->_url = $this->_url.'/character';
        echo $this->_url;
        /*
        die;
        \var_dump($this->parse());
        */
    }

    public function getAll()
    {

    }
}
