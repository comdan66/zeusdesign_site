<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2017 OA Wu Design
 * @license     http://creativecommons.org/licenses/by-nc/2.0/tw/
 */

include_once 'libs' . DIRECTORY_SEPARATOR . 'Define.php';
include_once 'libs' . DIRECTORY_SEPARATOR . 'Logger' . PHP;

$bucket = $_POST['bucket'];
$access = $_POST['access'];
$secret = $_POST['secret'];


$option = array (
    'bucket' => $bucket,
    'access' => $access,
    'secret' => $secret,
    'protocol' => 'https',
    'usname' => false,
    'minify' => true,
  );

include_once '_oa' . PHP;
