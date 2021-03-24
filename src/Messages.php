<?php

namespace PatryQHyper\Nertivia;

class Messages extends Channels {
    public function get50Messages($channelId)
    {
        return json_decode($this->request('/messages/channels/'.$channelId, 'GET')->getBody());
    }

    public function sendMessage($channelId, $message)
    {
        return json_decode($this->request('/messages/channels/'.$channelId, 'POST', ['json'=>['message'=>$message]])->getBody());
    }

    public function deleteMessage($channelId, $messageId)
    {
        return json_decode($this->request('/messages/'.$messageId.'/channels/'.$channelId, 'DELETE')->getBody());
    }
}