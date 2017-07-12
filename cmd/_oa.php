<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2017 OA Wu Design
 * @license     http://creativecommons.org/licenses/by-nc/2.0/tw/
 */

// 1. 資料夾名稱
// 2. 副檔名類型
// 3. 是否包含子層
// 4. 是否包含隱藏檔
$_dirs = array (
  ''     => array (array ('html', 'txt', 'pdf'), false, false),
  'js'   => array (array ('js'), true, false),
  'css'  => array (array ('css'), true, false),
  'font' => array (array ('eot', 'svg', 'ttf', 'woff'), true, false),
  'asset' => array (array ('js', 'css'), true, false),
  'img'  => array (array ('png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'json', 'xml'), true, false),
  'article' => array (array ('html'), true, false),
  'articles' => array (array ('html'), true, false),
  'tags' => array (array ('html'), true, false),
  'work' => array (array ('html'), true, false),
  'works' => array (array ('html'), true, false),
  'sitemap' => array (array ('xml'), true, false),
  'files' => array (array ('pdf'), true, false),
);

include_once 'libs' . DIRECTORY_SEPARATOR . 'OAS3Tool' . PHP;
system ('clear');

$tool = null;

try {
  if (!isset ($option)) throw new Exception ('參數錯誤！');

  $tool = new OAS3Tool ($option);
    
  $tool->logAppend ("\n", str_repeat ('=', CLI_LEN), "\n", array (' ◎ 執行開始 ◎', 'P'), str_repeat (' ', 46), '[ ', array ('OA S3 Tools v2.0', 'Y'), ' ]', "\n", str_repeat ('=', CLI_LEN), "\n");

  $tool->loads ('載入所需資源', array ('Func', 'Minify', 'S3'))
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n");

  $tool->setDirFiles ($_dirs);

  $tool->listLocalFiles ('列出本機內檔案')
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n");

  $tool->initS3 ('初始化 S3 工具')
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n")
       ->listS3Files ('取得 S3 上目前的檔案')
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n");

  $tool->filterLocalFiles ('過濾上傳的檔案')
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n");

  $tool->uploadLocalFiles ('上傳檔案')
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n");

  $tool->filterS3Files ('過濾 S3 上需要刪除的檔案')
       ->logAppend (color (str_repeat ('-', CLI_LEN), 'N'), "\n");

  $tool->deletwS3Files ('刪除 S3 上面的檔案')
       ->logAppend (str_repeat ('=', CLI_LEN), "\n");

  $tool->usage ();
  $tool->logAppend (str_repeat ('=', CLI_LEN), "\n", array (' ◎ 執行結束 ◎', 'P'), str_repeat (' ', 53), sprintf ('%20s', '[ ' . color (round (microtime (true) - $tool->getStartT (), 4), 'Y') . ' ' . color ('秒', 'y') . ' ]'), "\n", str_repeat ('=', CLI_LEN), "\n");
  $tool->url ();


  if (!CLI) {
    header ('Content-Type: application/json', 'true');
    echo json_encode (array ('status' => true, 'message' => nl2br(str_replace(' ', '&nbsp;', $tool->getLog ()->get ()))));
    exit();
  }
} catch (Exception $e) {
  if (CLI) {
    echo $e->getMessage ();
    exit ();
  } else {
    header ('Content-Type: application/json', 'true');
    echo json_encode (array ('status' => true, 'message' => $e->getMessage ()));
    exit();
  }
}
