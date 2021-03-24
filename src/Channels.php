<?php

namespace PatryQHyper\Nertivia;

class Channels extends Roles{
    public function createChannel($guildId, $channelName)
    {
        return json_decode($this->request('/servers/'.$guildId.'/channels', 'PUT', ['json'=>['name'=>$channelName]])->getBody());
    }

    public function editChannel($guildId, $channelId, $channelName, $permissions=[])
    {
        return json_decode($this->request('/servers/'.$guildId.'/channels/'.$channelId, 'PATCH', ['json'=>['name'=>$channelName,'permissions'=>$permissions]])->getBody());
    }

    public function deleteChannel($guildId, $channelId)
    {
        return json_decode($this->request('/servers/'.$guildId.'/channels/'.$channelId, 'DELETE')->getBody());
    }
}