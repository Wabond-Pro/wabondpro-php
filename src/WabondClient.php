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

// (new WabondClient('et'))->listen()
//   ->onChatUpdate(function ($chat) {
//     $userId = $chat->getUser();
//     $user = HrdEmployee::find($userId);

//     if ($chat->answer() == 1) {
//       $user->approve($request);
//       (new WabondClient('et'))->messages()->text('Terima kasih sudah approve')->setTo('bos')->send();
//       (new WabondClient('et'))->messages()->text('Izin anda telah diapprove oleh bos anda.')->setTo('employee')->send();
//     }
//   })
//   ->process();
