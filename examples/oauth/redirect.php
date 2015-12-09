<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

session_start();

include __DIR__.'/base.php';

$oauth     = $app['oauth'];
$targetUrl = !empty($_GET['redirect']) ? $_GET['redirect'] : '/'; // 目标页面

if (empty($_SESSION['user_openid'])) {
    return $oauth->redirect()->send();
}

header("Location:$targetUrl");
