<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

mb_regex_encoding ("UTF-8");
mb_internal_encoding ('UTF-8');

date_default_timezone_set ('Asia/Taipei');

define ('PROTOCOL', "http://");

define ('JS', '.js');
define ('CSS', '.css');
define ('JSON', '.json');
define ('HTML', '.html');
define ('TXT', '.txt');
define ('XML', '.xml');

define ('NAME', ($temps = array_filter (explode (DIRECTORY_SEPARATOR, PATH))) ? end ($temps) : '');

define ('OA', '吳政賢');
define ('OA_URL', 'http://www.ioa.tw/');
define ('OA_FB_URL', 'https://www.facebook.com/comdan66/');
define ('OA_FB_UID', '100000100541088');
define ('FB_APP_ID', '199589883770118');
define ('FB_ADMIN_ID', OA_FB_UID);

define ('PATH_VIEWS', PATH . 'views' . DIRECTORY_SEPARATOR);
define ('PATH_ASSET', PATH . 'asset' . DIRECTORY_SEPARATOR);

define ('PATH_ARTICLES', PATH . 'articles' . DIRECTORY_SEPARATOR);
define ('PATH_WORKS', PATH . 'works' . DIRECTORY_SEPARATOR);
define ('PATH_TAGS', PATH . 'tags' . DIRECTORY_SEPARATOR);

define ('PATH_ARTICLE', PATH . 'article' . DIRECTORY_SEPARATOR);
define ('PATH_WORK', PATH . 'work' . DIRECTORY_SEPARATOR);