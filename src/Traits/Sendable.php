<?php

namespace WabondPro\WabondClient\Traits;

use GuzzleHttp\Client;

trait Sendable
{
    protected $to;
    protected $secret;

    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    public function send()
    {
        if (! $this->to) {
            throw new \Exception('No Destination set');
        }

        $response = (new Client())->post('https://foo.bar/api', ['json' => array_merge([
      'to' => $this->to,
      'secret' => $this->secret,
      'type' => $this->type,
    ], $this->buildPayload())]);
    }
}
