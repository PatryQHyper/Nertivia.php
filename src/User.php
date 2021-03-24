<?php

namespace PatryQHyper\Nertivia;

class User {
    public function getUserInfo($userId)
    {
        return json_decode($this->request('/user/'.$userId, 'GET')->getBody());
    }

    public function editUserSurvey($aboutMe, $age, $continent, $country, $gender, $name)
    {
        return json_decode($this->request('/user/survey', 'PUT', ['json'=>[
            'about_me'=>$aboutMe,
            'age'=>$age,
            'continent'=>$continent,
            'country'=>$country,
            'gender'=>$gender,
            'name'=>$name
        ]])->getBody());
    }

    public function setCustomStatus($status=null)
    {
        return json_decode($this->request('/settings/custom-status', 'POST', ['json'=>['custom_status'=>$status]])->getBody());
    }

    public function sendFriendRequest($username, $tag)
    {
        return json_decode($this->request('/user/relationship', 'POST', ['json'=>['username'=>$username,'tag'=>$tag]])->getBody());
    }

    public function acceptFriendRequest($uniqueId)
    {
        return json_decode($this->request('/user/relationship', 'PUT', ['json'=>['uniqueID'=>$uniqueId]])->getBody());
    }

    public function declineFriendRequest($uniqueId)
    {
        return json_decode($this->request('/user/relationship', 'DELETE', ['json'=>['uniqueID'=>$uniqueId]])->getBody());
    }

    public function blockUser($uniqueId)
    {
        return json_decode($this->request('/user/block', 'POST', ['json'=>['uniqueID'=>$uniqueId]])->getBody());
    }

    public function unblockUser($uniqueId)
    {
        return json_decode($this->request('/user/block', 'DELETE', ['json'=>['uniqueID'=>$uniqueId]])->getBody());
    }

    public function getBotList()
    {
        return json_decode($this->request('/bots', 'GET')->getBody());
    }

    public function createBot()
    {
        return json_decode($this->request('/bots', 'POST')->getBody());
    }

    public function getBotInfo($botId)
    {
        return json_decode($this->request('/bots/'.$botId, 'GET')->getBody());
    }

    public function deleteBot($botId)
    {
        return json_decode($this->request('/bots/'.$botId, 'DELETE')->getBody());
    }

    public function createAccount($email, $password, $username)
    {
        return json_decode($this->request('/user/register', 'POST', ['json'=>['email'=>$email, 'password'=>$password, 'username'=>$username]])->getBody());
    }

    public function deleteAccount()
    {
        return json_decode($this->request('/user/delete-account', 'DELETE')->getBody());
    }

    public function logout()
    {
        return json_decode($this->request('/user/logout', 'DELETE')->getBody());
    }
}
