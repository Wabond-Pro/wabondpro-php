<?php

namespace WabondPro\WabondClient;

use WabondPro\WabondClient\Interfaces\Messagable;
use WabondPro\WabondClient\Traits\Sendable;

class WabondMessageText implements Messagable
{
<<<<<<< HEAD
    use Sendable;
    protected $message;
    protected $withPreviewUrl = false;
    protected $type = 'text';

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    public function setBody($message)
    {
        $this->message = $message;

        return $this;
    }

    public function withPreviewUrl()
    {
        $this->withPreviewUrl = true;

        return $this;
    }

    public function buildPayload()
    {
        return ['data' => $this->message];
    }
=======
  use Sendable;
  protected $message;
  protected $withPreviewUrl = false;
  protected $type = 'text';


  public function __construct($secret)
  {
    $this->secret = $secret;
  }

  public function setBody($message)
  {
    $this->message = $message;
    return $this;
  }

  public function withPreviewUrl()
  {
    $this->withPreviewUrl = true;
    return $this;
  }

  public function buildPayload()
  {
    return ['text' => $this->message];
  }
>>>>>>> 7be93c7 (normalizing request)
}
