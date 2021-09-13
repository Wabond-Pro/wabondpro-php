<?php

namespace WabondPro\WabondClient;

class WabondClient
{
    protected $secret;

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    public function messages()
    {
        return new WabondMessage($this->secret);
    }

    public function listen()
    {
        return new WabondWebhook();
    }
}
