<?php

use WabondPro\WabondClient\ButtonsMessageBuilder;
use WabondPro\WabondClient\Interfaces\Messagable;

use WabondPro\WabondClient\Traits\Sendable;

class WabondMessageInteractive implements Messagable
{
    use Sendable;
    protected $type = 'interactive';
    protected $interactiveType = '';
    protected $buttons = [];

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    public function buttons($fn)
    {
        $this->interactiveType = 'buttons';
        $this->buttons = $fn(new ButtonsMessageBuilder())->build();

        return $this;
    }

    public function setHeaders()
    {
        return $this;
    }

    public function buildPayload()
    {
        return [
      'type' => $this->type,

    ];
    }
}
