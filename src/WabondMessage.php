<?php

namespace WabondPro\WabondClient;

use WabondPro\WabondClient\WabondMessageAudio;
use WabondPro\WabondClient\WabondMessageText;
use WabondMessageInteractive;

class WabondMessage
{
  protected $secret;
  public function __construct($secret)
  {
    $this->secret = $secret;
  }

  public function text()
  {
    return new WabondMessageText($this->secret);
  }

  public function interactive()
  {
    return new WabondMessageInteractive($this->secret);
  }

  public function buttons()
  {
    return new WabondMessageButton($this->secret);
  }

  public function audio()
  {
    return new WabondMessageAudio($this->secret);
  }
}
