<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2017 OA Wu Design
 * @license     http://creativecommons.org/licenses/by-nc/2.0/tw/
 */

if (!function_exists ('arr2d21d')) {
  function arr2d21d ($arr) {
    $msgs = array ();
    foreach ($arr as $val)
      if (is_array ($val)) $msgs = array_merge ($msgs, $val);
      else array_push ($msgs, $val);
    return $msgs;
  }
}

if (!function_exists ('mergeArrRec')) {
  function mergeArrRec ($fs, &$rfs, $p = null) {
    if (!($fs && is_array ($fs))) return false;

    foreach ($fs as $k => $f)
      if (is_array ($f)) $k . mergeArrRec ($f, $rfs, ($p ? rtrim ($p, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR : '') . $k);
      else array_push ($rfs, ($p ? rtrim ($p, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR : '') . $f);
  }
}


if (!function_exists ('mapDir')) {
  function mapDir ($sDir, $dDir = 0, $hidden = false, $exts = array ()) {
    if ($fp = @opendir ($sDir)) {
      $fs = array (); $ndDir  = $dDir - 1; $sDir = rtrim ($sDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
      while (false !== ($f = readdir ($fp))) { if (trim ($f, '.') == '' || (($hidden === false) && ($f[0] === '.')) || is_link ($f) || ($f == 'cmd')) continue; if ((($dDir < 1) || ($ndDir > 0)) && @is_dir ($sDir . $f)) $fs[$f] = mapDir ($sDir . $f . DIRECTORY_SEPARATOR, $ndDir, $hidden, $exts); else if (!$exts || in_array (pathinfo ($f, PATHINFO_EXTENSION), $exts)) array_push ($fs, $f); else; }
      closedir ($fp);
      return $fs;
    }
    return false;
  }
}

if (!function_exists ('myReadFile')) {
  function myReadFile ($f) {
    if (!file_exists ($f)) return false;
    if (function_exists ('file_get_contents')) return file_get_contents ($f);
    if (!$fp = @fopen ($f, 'rb')) return false;
    $data = ''; flock ($fp, LOCK_SH); if (filesize ($f) > 0) $data =& fread ($fp, filesize ($f)); flock ($fp, LOCK_UN); fclose ($fp);
    return $data;
  }
}
if (!function_exists ('myWriteFile')) {
  function myWriteFile ($p, $d, $m = 'wb') {
    if (!$fp = @fopen ($p, $m)) return false;
    flock ($fp, LOCK_EX);
    fwrite ($fp, $d);
    flock ($fp, LOCK_UN);
    fclose ($fp);
    return true;
  }
}

if (!function_exists ('params')) {
  function params ($params, $keys) {
    $ks = $return = $result = array ();

    if (!$params) return $return;
    if (!$keys) return $return;

    foreach ($keys as $key)
      if (is_array ($key)) foreach ($key as $k) array_push ($ks, $k);
      else  array_push ($ks, $key);

    $key = null;

    foreach ($params as $param)
      if (in_array ($param, $ks)) if (!isset ($result[$key = $param])) $result[$key] = array (); else ;
      else if (isset ($result[$key])) array_push ($result[$key], $param); else ;

    foreach ($keys as $key)
      if (is_array ($key))  foreach ($key as $k) if (isset ($result[$k])) $return[$key[0]] = isset ($return[$key[0]]) ? array_merge ($return[$key[0]], $result[$k]) : $result[$k]; else;
      else if (isset ($result[$key])) $return[$key] = isset ($return[$key]) ? array_merge ($return[$key], $result[$key]) : $result[$key]; else;

    return $return;
  }
}





// ==================

if (!function_exists ('mkdir777')) {
  function mkdir777 ($path) {
    $oldmask = umask (0);
    @mkdir ($path, 0777, true);
    umask ($oldmask);
    return true;
  }
}

if (!function_exists ('deleteDir')) {
  function deleteDir ($dir, $is_root = true) {
    if (!file_exists ($dir)) return true;
    
    $dir = rtrim ($dir, DIRECTORY_SEPARATOR);
    if (!$currentDir = @opendir ($dir))
      return false;

    while (false !== ($filename = @readdir ($currentDir)))
      if (($filename != '.') && ($filename != '..'))
        if (is_dir ($dir . DIRECTORY_SEPARATOR . $filename)) if (substr ($filename, 0, 1) != '.') deleteDir ($dir . DIRECTORY_SEPARATOR . $filename); else;
        else unlink ($dir . DIRECTORY_SEPARATOR . $filename);

    @closedir ($currentDir);

    return $is_root ? @rmdir ($dir) : true;
  }
}

if (!function_exists ('loadView')) {
  function loadView ($__o__p__ = '', $__o__d__ = array ()) {
    if (!$__o__p__) return '';

    extract ($__o__d__);
    ob_start ();
    if (((bool)@ini_get ('short_open_tag') === FALSE) && (false == TRUE)) echo eval ('?>' . preg_replace ("/;*\s*\?>/u", "; ?>", str_replace ('<?=', '<?php echo ', file_get_contents ($__o__p__))));
    else include $__o__p__;
    $buffer = ob_get_contents ();
    @ob_end_clean ();

    return $buffer;
  }
}

if (!function_exists ('typeOfImg')) {
  function typeOfImg ($t) {
    return 'image/' . (($t = pathinfo (MAIN_OG_URL)) && isset ($t['extension']) && $t['extension'] ? $t['extension'] : 'jpg');
  }
}
if (!function_exists ('meta')) {
  function meta () {
    return array_unique (array_map (function ($attributes) {
      return '<meta ' . implode (' ', array_map (function ($attribute, $value) { return $attribute . '="' . $value . '"'; }, array_keys ($attributes), $attributes)) . ' />';
    }, array_merge (array (
        array ('charset' => 'utf-8'),
        array ('http-equiv' => 'Content-type', 'content' => 'text/html; charset=utf-8'),
        array ('http-equiv' => 'Content-Language', 'content' => 'zh-tw'),
        array ('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui'),
        array ('name' => 'robots', 'content' => DEV ? 'noindex,nofollow' : 'index,follow'),

        array ('property' => 'og:site_name', 'content' => MAIN_TITLE),
        array ('property' => 'fb:admins', 'content' => FB_ADMIN_ID),
        array ('property' => 'fb:app_id', 'content' => FB_APP_ID),

        array ('property' => 'og:locale', 'content' => 'zh_TW'),
        array ('property' => 'og:locale:alternate', 'content' => 'en_US'),
        array ('property' => 'og:type', 'content' => 'article'),

        array ('property' => 'article:author', 'content' => FB_URL),
        array ('property' => 'article:publisher', 'content' => FB_URL),
        array ('property' => 'article:modified_time', 'content' => date ('c')),
        array ('property' => 'article:published_time', 'content' => date ('c')),

        array ('property' => 'og:image', 'content' => MAIN_OG_URL, 'alt' => MAIN_TITLE, 'tag' => 'larger'),
        array ('property' => 'og:image:type', 'content' => typeOfImg (MAIN_OG_URL), 'tag' => 'larger'),
        array ('property' => 'og:image:width', 'content' => 1200, 'tag' => 'larger'),
        array ('property' => 'og:image:height', 'content' => 630, 'tag' => 'larger'),

        array ('name' => 'msapplication-TileColor', 'content' => '#3db990'),
        array ('name' => 'msapplication-TileImage', 'content' => URL_IMG_FAVICON . 'ms-icon-144x144.png'),
        array ('name' => 'theme-color', 'content' => '#3db990')
      ), func_get_args ())));
  }
}
if (!function_exists ('myLink')) {
  function myLink () {
    return array_unique (array_map (function ($attributes) {
      return '<link ' . implode (' ', array_map (function ($attribute, $value) { return $attribute . '="' . $value . '"'; }, array_keys ($attributes), $attributes)) . ' />';
    }, array_merge (array (
        array ('rel' => 'apple-touch-icon', 'sizes' => '57x57', 'href' => URL_IMG_FAVICON . 'apple-icon-57x57.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '60x60', 'href' => URL_IMG_FAVICON . 'apple-icon-60x60.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '72x72', 'href' => URL_IMG_FAVICON . 'apple-icon-72x72.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '76x76', 'href' => URL_IMG_FAVICON . 'apple-icon-76x76.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '114x114', 'href' => URL_IMG_FAVICON . 'apple-icon-114x114.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '120x120', 'href' => URL_IMG_FAVICON . 'apple-icon-120x120.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '144x144', 'href' => URL_IMG_FAVICON . 'apple-icon-144x144.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '152x152', 'href' => URL_IMG_FAVICON . 'apple-icon-152x152.png'),
        array ('rel' => 'apple-touch-icon', 'sizes' => '180x180', 'href' => URL_IMG_FAVICON . 'apple-icon-180x180.png'),
        array ('rel' => 'icon', 'type' => 'image/png', 'sizes' => '192x192', 'href' => URL_IMG_FAVICON . 'android-icon-192x192.png'),
        array ('rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => URL_IMG_FAVICON . 'favicon-32x32.png'),
        array ('rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => URL_IMG_FAVICON . 'favicon-96x96.png'),
        array ('rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => URL_IMG_FAVICON . 'favicon-16x16.png'),
        array ('rel' => 'manifest', 'href' => URL_IMG_FAVICON . 'manifest.json'),
        array ('href' => 'https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700', 'rel' => 'stylesheet', 'type' => 'text/css')
      ), func_get_args ())));
  }
}
if (!function_exists ('removeHtmlTag')) {
  function removeHtmlTag ($text, $space = true) {
    return preg_replace ("/\s+/u", $space ? " " : "", preg_replace ("/&#?[a-z0-9]+;/iu", "", str_replace ('▼', '', str_replace ('▲', '', trim (strip_tags ($text))))));
  }
}

if (!function_exists ('css')) {
  function css () {
    return array_map (function ($path) {
      return '<link href="' . $path . '" rel="stylesheet" type="text/css" />';
    }, Minify::css (func_get_args ()));
  }
}
if (!function_exists ('js')) {
  function js () {
    return array_map (function ($path) {
      return '<script src="' . $path . '" language="javascript" type="text/javascript" ></script>';  
    }, Minify::js (func_get_args ()));
  }
}
if (!function_exists ('jsonLd')) {
  function jsonLd ($jsonLd = array ()) {
    return $jsonLd ? '<script type="application/ld+json">' . json_encode ($jsonLd, DEV ? JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES : JSON_UNESCAPED_SLASHES) . '</script>' : '';
  }
}

if (!function_exists ('urlFormat')) {
  function urlFormat ($str) {
    return preg_replace ('/[\/%]/u', ' ', $str);
  }
}
if (!function_exists ('urlFormatArticle')) {
  function urlFormatArticle ($id, $title) {
    return urlFormat ($id . '-' . $title . HTML);
  }
}
if (!function_exists ('urlFormatWork')) {
  function urlFormatWork ($id, $title) {
    return urlFormat ($id . '-' . $title . HTML);
  }
}
if (!function_exists ('urlArticle')) {
  function urlArticle ($id, $title) {
    return URL_ARTICLE . rawurlencode (urlFormatArticle ($id, $title));
  }
}
if (!function_exists ('pathArticle')) {
  function pathArticle ($id, $title) {
    return PATH_ARTICLE . urlFormatArticle ($id, $title);
  }
}
if (!function_exists ('urlWrok')) {
  function urlWrok ($id, $title) {
    return URL_WORK . rawurlencode (urlFormatWork ($id, $title));
  }
}
if (!function_exists ('pathWrok')) {
  function pathWrok ($id, $title) {
    return PATH_WORK . urlFormatWork ($id, $title);
  }
}

if (!function_exists ('columnArray')) {
  function columnArray ($objects, $key, $callback = null) {
    return array_map (function ($object) use ($key, $callback) {
      $t = !is_array ($object) ? is_object ($object) ? $object->$key : $object : $object[$key];
      return $callback && is_callable ($callback) ? $callback ($t) : $t;
    }, $objects);
  }
}
