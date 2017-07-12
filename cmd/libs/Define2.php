<?php
/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2017 OA Wu Design
 * @license     http://creativecommons.org/licenses/by-nc/2.0/tw/
 */

define ('PAGE_PATH_INDEX',   PATH . 'index'   . HTML);
define ('PAGE_PATH_ABOUT',   PATH . 'about'   . HTML);
define ('PAGE_PATH_CONTACT', PATH . 'contact' . HTML);

define ('PATH_VIEWS',        PATH . 'views'    . DIRECTORY_SEPARATOR);
define ('PATH_ASSET',        PATH . 'asset'    . DIRECTORY_SEPARATOR);
define ('PATH_SITEMAP',      PATH . 'sitemap'  . DIRECTORY_SEPARATOR);
define ('PATH_WORKS',        PATH . 'works'    . DIRECTORY_SEPARATOR);
define ('PATH_ARTICLES',     PATH . 'articles' . DIRECTORY_SEPARATOR);
define ('PATH_TAGS',         PATH . 'tags'     . DIRECTORY_SEPARATOR);
define ('PATH_WORK',         PATH . 'work'     . DIRECTORY_SEPARATOR);
define ('PATH_ARTICLE',      PATH . 'article'  . DIRECTORY_SEPARATOR);
define ('PATH_APIS',         PATH . 'api'      . DIRECTORY_SEPARATOR);

define ('PATH_TAG_WORKS',    PATH_TAGS . '%s' . DIRECTORY_SEPARATOR . 'works' . DIRECTORY_SEPARATOR);
define ('PATH_TAG_ARTICLES', PATH_TAGS . '%s' . DIRECTORY_SEPARATOR . 'articles' . DIRECTORY_SEPARATOR);

define ('PAGE_URL_INDEX',    URL . 'index'   . HTML);
define ('PAGE_URL_ABOUT',    URL . 'about'   . HTML);
define ('PAGE_URL_CONTACT',  URL . 'contact' . HTML);

define ('URL_ASSET',         URL . 'asset'     . '/');
define ('URL_WORKS',         URL . 'works'     . '/');
define ('URL_ARTICLES',      URL . 'articles'  . '/');
define ('URL_TAGS',          URL . 'tags'      . '/');
define ('URL_WORK',          URL . 'work'      . '/');
define ('URL_ARTICLE',       URL . 'article'   . '/');
define ('URL_IMG',           URL . 'img'       . '/');

define ('URL_TAG_WORKS',     URL_TAGS . '%s' . '/' . 'works' . '/');
define ('URL_TAG_ARTICLES',  URL_TAGS . '%s' . '/' . 'articles' . '/');

define ('URL_IMG_OG',        URL_IMG . 'og' . '/');
define ('URL_IMG_FAVICON',   URL_IMG . 'favicon' . '/' . 'v3' . '/');
define ('URL_IMG_LOGO',      URL_IMG . 'logo' . '/');
define ('URL_IMG_LOGO_AMP',  URL_IMG_LOGO . 'amp_logo_600x60.png');

define ('TITLE',             '宙思設計');
define ('MAIN_TITLE',        'ZEUS // Design Studio');
define ('MAIN_KEYWORDS',     '宙思設計, ZEUS, 網頁設計, 品牌設計, 平面設計, 包裝設計, RWD網頁設計, APP設計, 網頁外包');
define ('MAIN_DESCRIPTION',  '宙思設計團隊擁有各領域的人才，我們服務廣泛，凡舉網頁、平面、包裝、印刷及攝影皆可製作，宙思希望能以最完整的服務與最精湛的設計達成您的需求！');

define ('MAIN_OG_URL',       URL_IMG_OG . 'v1.jpg');
// define ('MAIN_OG_TYPE',      'image/' . (($t = pathinfo (MAIN_OG_URL)) && isset ($t['extension']) && $t['extension'] ? $t['extension'] : 'jpg'));

define ('FB_URL',            'https://www.facebook.com/ZeusDesignStudio');
define ('OA_FB_UID',         '100000100541088');
define ('FB_APP_ID',         '1121233787886675');
define ('FB_ADMIN_ID',       OA_FB_UID);
