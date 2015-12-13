<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

include __DIR__.'/base.php';

use EasyWeChat\Support\Log;

$server = $app['server'];
$user   = $app['user'];

$server->setMessageHandler(function ($message) use ($user) {
    $fromUser = $user->get($message->FromUserName);
Log::error('fff');
    switch ($message->MsgType) {
        case 'text':
            if (false !== stripos($message->content, 'oauth')) {
                Log::info('request received.');
                return '点击这里去授权：'.BASE_URL.'/examples/oauth_redirect.php';
            }
            break;

        default:
            # code...
            break;
    }

    return "{$fromUser->nickname} 您好！欢迎关注 overtrue!";
});

$server->serve()->send();
