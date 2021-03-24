<?php

namespace PatryQHyper\Nertivia;

class Roles extends Servers {
    public function createRole($guildId, $roleName)
    {
        return json_decode($this->request('/servers/' . $guildId . '/roles', 'POST', ['json' => ['name' => $roleName]])->getBody());
    }

    public function addRoleToMember($guildId, $roleId, $memberId)
    {
        return json_decode($this->request('/servers/' . $guildId . '/members/'.$memberId.'/roles/'.$roleId, 'PATCH')->getBody());
    }

    public function deleteRoleFromMember($guildId, $roleId, $memberId)
    {
        return json_decode($this->request('/servers/' . $guildId . '/members/'.$memberId.'/roles/'.$roleId, 'DELETE')->getBody());
    }

    public function editRole($guildId, $roleId, $roleName, $rolePermissions, $roleColor)
    {
        return json_decode($this->request('/servers/' . $guildId . '/roles/'.$roleId, 'PATCH', ['json' => ['name' => $roleName, 'permissions'=>$rolePermissions, 'color'=>$roleColor]])->getBody());
    }

    public function deleteRole($guildId, $roleId)
    {
        return json_decode($this->request('/servers/' . $guildId . '/roles/'.$roleId, 'DELETE')->getBody());
    }
}