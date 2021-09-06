<?php
//69
//
class Link extends Tag
{
    const ACTIVE = 'active';

    public function __construct()
    {
        parent::__construct('a');
        $this->setAttr('href', '');
    }

    public function open()
    {
        $this->activeSelf();
        return parent::open();
    }

    private function activeSelf()
    {
        if ($this->getAttr('href') === $_SERVER['REQUEST_URI'])
        {
            $this->addClass(self::ACTIVE);
        }
    }
}