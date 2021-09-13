<?php

namespace WabondPro\WabondClient\Models;

class ChatMessage
{
    public $fromMe = false;
    public $type = '';
    public $message;
    public $id;

    public function __construct($data)
    {
        $this->id = $data['key']['id'];
        $this->fromMe = $data['key']['fromMe'];
        $this->type = array_key_first($data['message']);
        $this->message = $data['message'][$this->type];
    }

    public function isAudioMessage()
    {
        return $this->type === 'audio';
    }

    public function isButtonsMessage()
    {
        return $this->type === 'buttons';
    }

    public function isButtonsResponseMessage()
    {
        return $this->type === 'buttonsResponseMessage';
    }

    public function getButtonsResponseMessage()
    {
        return new ButtonResponseMessage($this->message);
    }

    public function isConversation()
    {
        return $this->type === 'conversation';
    }

    public function getConversation()
    {
        return $this->message;
    }
}
