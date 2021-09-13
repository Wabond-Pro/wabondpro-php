<?php

namespace WabondPro\WabondClient;

use WabondPro\WabondClient\Interfaces\Messagable;
use WabondPro\WabondClient\Traits\Sendable;


class WabondMessageButton implements Messagable
{
  use Sendable;

  protected $type = 'button';

  protected $data = [
    'contentText' => '',
    'footerText' => '',
    'headerType' => 1,
    'buttons' => []
  ];

  public function __construct($secret)
  {
    $this->secret = $secret;
  }

  public function addButton($id, $text)
  {
    $this->data['buttons'][] = ['buttonId' => $id, 'buttonText' => ['displayText' => $text], 'type' => 1];
    return $this;
  }

  public function setFooter($text)
  {
    $this->data['footerText'] = $text;
    return $this;
  }

  public function setContent($text)
  {
    $this->data['contentText'] = $text;
    return $this;
  }

  public function build()
  {
    return $this->data;
  }

  public function setHeaderType($type)
  {
    $this->data['headerType'] = $type;
    return $this;
  }

  public function buildPayload()
  {
    return [
      'data' => $this->data
    ];
  }
}
