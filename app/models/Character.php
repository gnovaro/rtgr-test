<?php
/**
 * Character Model
 */
class Character extends Json
{
    protected $_characters = null;

    public function __construct()
    {
        $this->_url = $this->_url.'character';
        $result = $this->parse();
        if($result) {
            $this->_characters = $result->results;
        }
    }

    /**
     *
     * @return Character collection
     */
    public function getAll()
    {
        return $this->_characters;
    }
}
