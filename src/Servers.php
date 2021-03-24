<?php

namespace PatryQHyper\Nertivia;

class Servers extends User{
    public function createServer($serverName)
    {
        return json_decode($this->request('/servers', 'POST', ['json' => ['name' => $serverName]])->getBody());
    }

    public function getServerInfoById($serverId)
    {
        return json_decode($this->request('/servers/'.$serverId, 'GET')->getBody());
    }

    public function getServerInfoByInvite($inviteCode)
    {
        return json_decode($this->request('/servers/invite/'.$inviteCode, 'GET')->getBody());
    }

    public function editServer($serverId, $serverName)
    {
        return json_decode($this->request('/servers/'.$serverId, 'PATCH', ['json'=>['name'=>$serverName]])->getBody());
    }

    public function joinServer($inviteCode)
    {
        return json_decode($this->request('/servers/invite'.$inviteCode, 'POST')->getBody());
    }

    public function leaveServer($serverId)
    {
        return json_decode($this->request('/servers/'.$serverId, 'DELETE')->getBody());
    }

    public function deleteServer($serverId)
    {
        return json_decode($this->request('/servers/'.$serverId.'/delete', 'POST')->getBody());
    }

    public function kickMemberFromServer($serverId, $memberId)
    {
        return json_decode($this->request('/servers/'.$serverId.'/members/'.$memberId, 'DELETE')->getBody());
    }

    public function banMemberFromServer($serverId, $memberId)
    {
        return json_decode($this->request('/servers/'.$serverId.'/bans/'.$memberId, 'PUT')->getBody());
    }

    public function unbanMemberFromServer($serverId, $memberId)
    {
        return json_decode($this->request('/servers/'.$serverId.'/bans/'.$memberId, 'DELETE')->getBody());
    }

    public function getServerBans($serverId)
    {
        return json_decode($this->request('/servers/'.$serverId.'/bans', 'GET')->getBody());
    }
}