<?php

namespace WabondPro\WabondClient\Models;

class ButtonResponseMessage
{
    private $selectedButtonId;
    private $repliedMessageId;

    public function __construct($data)
    {
        $this->selectedButtonId = $data['selectedButtonId'];
    }

    public function getSelectedButton()
    {
        return $this->selectedButtonId;
    }

    public function getRepliedMessageId()
    {
        return $this->repliedMessageId;
    }
}
