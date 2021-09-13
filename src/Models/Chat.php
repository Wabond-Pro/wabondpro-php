<?php

namespace WabondPro\WabondClient\Models;

class Chat
{
  public $id;

  /**
   * Undocumented variable
   *
   * @var ChatMessage[]
   */
  public  $messages;

  public function __construct($data)
  {
    $this->id = $this->getId($data['jid']);
    foreach ($data['messages'] as $message) {
      $this->messages[] = new ChatMessage($message);
    }
  }

  public function isIndividual()
  {
    return strpos($this->id, '@') === false // If the id doesn't contain an @, it's an individual chat
      || strpos($this->id, 'whatsapp') !== false; // If the id contains whatsapp, it's also an individual chat
  }

  private function getId($jid)
  {
    return  $this->isIndividual() ? str_replace('@s.whatsapp.net', '', $jid) : str_replace('@g.us', '', $jid);
  }
}
