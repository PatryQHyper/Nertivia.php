**Nertivia.PHP**

Simple API for Nertivia.net written in _PHP_.

Nertivia server support: https://nertivia.net/i/php

Composer installation: 
```
composer require patryqhyper/nertivia-php-wrapper
```


### Usage:

```php
<?php

use PatryQHyper\Nertivia\NertiviaClient;

require_once('vendor/autoload.php');

try {
	$nertivia = new NertiviaClient('apiKey', true);
	
	# actions here
}
catch(Exception $e)
{
	echo 'Error code: '.$e->getCode().' Error info: '.$e->getMessage();
}
```
in NertiviaClient(), first argument is api key (hauthId), and second argument is (bool) beta (default: false)


### Messages

#### Get last 50 messages
```php
$nertivia->get50Messages('channelId');
```

#### Send message
```php
$nertivia->sendMessage('channelId', 'message');
```

#### Delete message
```php
$nertivia->deleteMessage('channelId', 'messageId');
```

### Channels

#### Create channel
```php
$nertivia->createChannel('guildId', 'channelName');
```

#### Edit channel
```php
$nertivia->editChannel('guildId', 'channelId', 'channelName', 'permissions');

!!! permissions is an ARRAY
```

#### Delete channel
```php
$nertivia->deleteChannel('guildId', 'channelId');
```


### Roles

#### Create role
```php
$nertivia->createRole('guildId', 'roleName');
```

#### Add role to member
```php
$nertivia->addRoleToMember('guildId', 'roleId', 'memberId');
```

#### Delete role from member
```php
$nertivia->deleteRoleFromMember('guildId', 'roleId', 'memberId');
```

#### Edit role
```php
$nertivia->editRole('guildId', 'roleId', 'roleName', 'rolePermissions', 'roleColor');
```

#### Delete role
```php
$nertivia->deleteRole('guildId', 'roleId');
```


### Servers

#### Create server
```php
$nertivia->createServer('serverName');
```

#### Get server info using server id
```php
$nertivia->getServerInfoById('serverId');
```

#### Get server info using invite
```php
$nertivia->getServerInfoByInvite('inviteCode');
```

#### Edit server
```php
$nertivia->editServer('serverId', 'serverName');
```

#### Join server
```php
$nertivia->joinServer('inviteCode');
```

#### Leave server
```php
$nertivia->leaveServer('serverId');
```

#### Delete server
```php
$nertivia->deleteServer('serverId');
```

#### Kick member from server
```php
$nertivia->kickMemberFromServer('serverId', 'memberId');
```

#### Ban member from server
```php
$nertivia->banMemberFromServer('serverId', 'memberId');
```

#### Unban member from server
```php
$nertivia->unbanMemberFromServer('serverId', 'memberId');
```

#### Get server bans
```php
$nertivia->getServerBans('serverId');
```

### Users

#### Get user info
```php
$nertivia->getUserInfo('userId');
```

#### Edit user survey
```php
$nertivia->editUserSurvey('aboutMe', 'age', 'continent', 'country', 'gender', 'name');
```

#### Set custom status
```php
$nertivia->setCustomStatus('status');
```

#### Send friend request
```php
$nertivia->sendFriendRequest('username', 'tag');
```

#### Accept friend request
```php
$nertivia->acceptFriendRequest('uniqueId');
```

#### Decline friend request
```php
$nertivia->declineFriendRequest('uniqueId');
```

#### Block user
```php
$nertivia->blockUser('uniqueId');
```

#### Unblock user
```php
$nertivia->unblockUser('uniqueId');
```

#### Get bot list
```php
$nertivia->getBotList();
```

#### Create bot
```php
$nertivia->createBot();
```

#### Get bot info
```php
$nertivia->getBotInfo('botId');
```

#### Delete bot
```php
$nertivia->deleteBot('botId');
```

#### Create account
```php
$nertivia->createAccount('email', 'password', 'username');
```

#### Delete account
```php
$nertivia->deleteAccount();
```

#### Logout (may not work)
```php
$nertivia->logout();
```
