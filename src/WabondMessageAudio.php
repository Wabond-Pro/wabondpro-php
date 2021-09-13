<?php

namespace WabondPro\WabondClient;

use WabondPro\WabondClient\Interfaces\Messagable;
use WabondPro\WabondClient\Traits\Sendable;

class WabondMessageAudio implements Messagable
{
    use Sendable;

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    public function buildPayload()
    {
        return [];
    }
}
