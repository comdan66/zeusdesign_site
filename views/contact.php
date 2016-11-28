<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <title>聯絡我們 - <?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo PAGE_URL_CONTACT;?>" />
    <meta property="og:title" content="聯絡我們 - <?php echo TITLE;?>" />
    <meta property="og:description" content="<?php echo mb_strimwidth (preg_replace ("/\s+/u", "", DESCRIPTION), 0, 300, '…','UTF-8');?>" />

    <meta property="fb:admins" content="<?php echo FB_ADMIN_ID;?>" />
    <meta property="fb:app_id" content="<?php echo FB_APP_ID;?>" />

    <meta property="og:locale" content="zh_TW" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="article" />

    <meta property="article:author" content="https://www.facebook.com/ZeusDesignStudio" />
    <meta property="article:publisher" content="https://www.facebook.com/ZeusDesignStudio" />
    <meta property="article:modified_time" content="<?php echo date ('c');?>" />
    <meta property="article:published_time" content="<?php echo date ('c', strtotime ('2016-11-20 02:05:20'));?>" />

    <meta property="og:image" content="<?php echo OG_IMG;?>" alt="<?php echo TITLE;?>" />
    <meta property="og:image:type" tag="larger" content="<?php echo OG_IMG_TYPE;?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo FAVICON;?>apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo FAVICON;?>apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo FAVICON;?>apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo FAVICON;?>apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo FAVICON;?>apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo FAVICON;?>apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo FAVICON;?>apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo FAVICON;?>apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo FAVICON;?>apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo FAVICON;?>android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo FAVICON;?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo FAVICON;?>favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo FAVICON;?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo FAVICON;?>manifest.json">
    <meta name="msapplication-TileColor" content="#3db990">
    <meta name="msapplication-TileImage" content="<?php echo FAVICON;?>ms-icon-144x144.png">
    <meta name="theme-color" content="#3db990">
    
    <link rel="canonical" href="<?php echo PAGE_URL_CONTACT;?>" />
    <link rel="alternate" href="<?php echo PAGE_URL_CONTACT;?>" hreflang="zh-Hant" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
<?php foreach (Min::css (
        'css/public' . CSS,
        'css/contact' . CSS
        ) as $path) { ?>
        <link href="<?php echo URL . $path;?>" rel="stylesheet" type="text/css" />
<?php } ?>

<?php foreach (Min::js  (
        'js/public' . JS
      ) as $path) { ?>
        <script src="<?php echo URL . $path;?>" language="javascript" type="text/javascript" ></script>
<?php }?>

    <script type="application/ld+json">
<?php echo json_encode (array (
        '@context' => 'http://schema.org', '@type' => 'Article',
        'mainEntityOfPage' => array (
          '@type' => 'WebPage',
          '@id' => PAGE_URL_CONTACT),
        'headline' => '聯絡我們',
        'image' => array ('@type' => 'ImageObject', 'url' => OG_IMG, 'height' => 630, 'width' => 1200),
        'datePublished' => date ('c', strtotime ('2016-11-20 02:05:20')),
        'dateModified' => date ('c'),
        'author' => array (
            '@type' => 'Person', 'name' => TITLE, 'url' => URL,
            'image' => array ('@type' => 'ImageObject', 'url' => 'https://graph.facebook.com/' . $article['user']['uid'] . '/picture?width=300&height=300', 'height' => 300, 'width' => 300)
          ),
        'publisher' => array (
            '@type' => 'Organization', 'name' => TITLE,
            'logo' => array ('@type' => 'ImageObject', 'url' => AMP_IMG_600_60, 'width' => 600, 'height' => 60)
          ),
        'description' => mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8')
      ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
    </script>
  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='contact'>
        <header class='header'>
          <h1>聯絡我們</h1>
        </header>

        <div id='msg' class='i'></div>

        <aside id='contacts'>
          <p>有設計相關問題嗎?</p>
          <p>歡迎聯繫我們。</p>
          <br/>

          <h2>公司地址</h2>
          <p>235 新北市中和區興南路一段85巷43號7樓</p>
          <p>7F., No.43, Ln. 85, Sec. 1, Xingnan Rd., Zhonghe Dist., New Taipei City 235, Taiwan(R.O.C.)</p>
          <br/>

          <h2>聯絡電話</h2>
          <p>TEL 02 2941 6737</p>
          <p>FAX 02 2941 6737</p>
          <br/>

          <h2>營業時間</h2>
          <p>週ㄧ 至 週五</p>
          <p>10:00 ~ 18:00</p>
        </aside>

        <section id='form'>
          <div>
            <h2>聯絡我們</h2>

            <label for='name'>稱呼：</label>
            <input type='text' id='name' name='name' class='required' maxLength='100' value='<?php echo isset ($posts['name']) ? $posts['name'] : '';?>' placeholder='請輸入您的稱呼..'<?php echo isset ($_flash_message) && $_flash_message ? '' : ' autofocus';?> />

            <label for='email'>E-Mail：</label>
            <input type='text' id='email' name='email' class='required email' maxLength='200' value='<?php echo isset ($posts['email']) ? $posts['email'] : '';?>' placeholder='請輸入您的電子郵件信箱..' />

            <label for='message'>留言內容：</label>
            <textarea id='message' name='message' class='required' class='autosize' placeholder='請輸入您的建議或意見..' rows='6'><?php echo isset ($posts['message']) ? $posts['message'] : '';?></textarea>

            <button type='button' id='submit_contact'>送出</button>
          </div>
        </section>
      </div>
      <?php echo $_footer;?>
    </div>
    
    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo URL;?>'><span itemprop="title"><?php echo TITLE;?></span></a>
    </div>
    
    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo PAGE_URL_CONTACT;?>'><span itemprop="title">聯絡我們</span></a>
    </div>

  </body>
</html>
