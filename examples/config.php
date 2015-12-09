<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    'debug'  => true,
    'app_id' => 'wx3cf0f39249eb0e60',
    'secret' => 'f1c242f4f28f735d4687abb469072a29',
    'token'  => 'hellotest',

    // log
    'log' => [
        'level' => \Monolog\Logger::DEBUG,
        'file'  => '/tmp/easywechat.log',
    ],

    // oauth
    'oauth' => [
        'scopes'   => ['snsapi_userinfo'],
        'callback' => '/examples/oauth_callback.php',
    ],
];
