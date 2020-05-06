<?php

class Json
{
    //base url
    protected $_url = 'https://rickandmortyapi.com/api/';

    /**
     *
     * @return json
     */
    protected function parse()
    {
        $content = \file_get_contents($this->_url);
        return \json_decode($content);
    }

    /**
     *
     * @param int $number
     * @return json
     */
    protected function getPage($number = 1)
    {
        $this->_url = $this->_url."?page=$number";
        return $this->parse();
    }
}
