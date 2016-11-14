<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 *
 * Need to run init.php
 *
 */

define ('PHP', '.php');
define ('PATH', implode (DIRECTORY_SEPARATOR, explode (DIRECTORY_SEPARATOR, dirname (str_replace (pathinfo (__FILE__, PATHINFO_BASENAME), '', __FILE__)))) . '/');
define ('PATH_CMD', PATH . 'cmd' . DIRECTORY_SEPARATOR);
define ('PATH_CMD_LIBS', PATH_CMD . 'libs' . DIRECTORY_SEPARATOR);

include_once PATH_CMD_LIBS . 'defines' . PHP;
include_once PATH_CMD_LIBS . 'Step' . PHP;
include_once PATH_CMD_LIBS . 'Minify' . DIRECTORY_SEPARATOR . 'Min' . PHP;
include_once PATH_CMD_LIBS . 'Pagination' . PHP;

define ('PROTOCOL', "http://");

$bucket = 'staging.zeusdesign.com.tw';
$argv['-u'][0] = 0;
$argv['-m'][0] = 1;


define ('BUCKET', $bucket);
define ('UPLOAD', isset ($argv['-u'][0]) && is_numeric ($tmp = $argv['-u'][0]) ? $tmp ? true : false : true);
define ('MINIFY', isset ($argv['-m'][0]) && is_numeric ($tmp = $argv['-m'][0]) ? $tmp ? true : false : true);

include_once PATH_CMD_LIBS . 'define_urls' . PHP;

Step::notCil ();
Step::init ();

Step::cleanBuild ();
Step::writeIndexHtml ();
Step::writeAboutHtml ();
Step::writeContactHtml ();
Step::writeArticlesHtml ();
Step::writeWorksHtml ();

header ('Content-Type: application/json');
echo json_encode (array ('result' => 'success'));
