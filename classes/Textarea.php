<?php
//74
//
class Textarea extends Tag
{
	public function __construct()
	{
		parent::__construct('textarea');
	}

	public function show()
    {
        $textareaName = $this->getAttr('name');
        if ($textareaName)
        {
            if (isset($_REQUEST[$textareaName]))
            {
                $text = $_REQUEST[$textareaName];
                $this->setText($text);
            }
        }
        return parent::show();
    }

	public function __toString()
	{
		return $this->show();
	}
}
