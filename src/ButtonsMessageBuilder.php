<?php

namespace WabondPro\WabondClient;

class ButtonsMessageBuilder
{
  protected $data = [
    'contentText' => '',
    'footerText' => '',
    'headerType' => 1,
    'buttons' => []
  ];

  public function add($id, $text)
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
}
