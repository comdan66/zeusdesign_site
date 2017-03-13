<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <title>關於宙思 - <?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo PAGE_URL_ABOUT;?>" />
    <meta property="og:title" content="關於宙思 - <?php echo TITLE;?>" />
    <meta property="og:description" content="<?php echo mb_strimwidth (preg_replace ("/\s+/u", "", DESCRIPTION), 0, 300, '…','UTF-8');?>" />

    <meta property="fb:admins" content="<?php echo FB_ADMIN_ID;?>" />
    <meta property="fb:app_id" content="<?php echo FB_APP_ID;?>" />

    <meta property="og:locale" content="zh_TW" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="article" />
    
    <meta property="article:author" content="https://www.facebook.com/ZeusDesignStudio" />
    <meta property="article:publisher" content="https://www.facebook.com/ZeusDesignStudio" />
    <meta property="article:modified_time" content="<?php echo date ('c');?>" />
    <meta property="article:published_time" content="<?php echo date ('c');?>" />
    
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


    <link rel="canonical" href="<?php echo PAGE_URL_ABOUT;?>" />
    <link rel="alternate" href="<?php echo PAGE_URL_ABOUT;?>" hreflang="zh-Hant" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
<?php foreach (Min::css (
        'css/public' . CSS,
        'css/about' . CSS
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
          '@id' => PAGE_URL_ABOUT),
        'headline' => '關於宙思',
        'image' => array ('@type' => 'ImageObject', 'url' => OG_IMG, 'height' => 630, 'width' => 1200),
        'datePublished' => date ('c', strtotime ('2016-11-20 02:05:20')),
        'dateModified' => date ('c'),
        'description' => mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8')
      ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
    </script>
  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>
      

      <div id='about'>
        <header class='header'>
          <h1>關於宙思</h1>
        </header>

        <aside id='aside'>
          <a>關於宙思 ›</a>
          <a>關於設計 ›</a>
          <a>我們提供的服務 ›</a>
        </aside>

        <article id='service'>
          <figure>
            <img src="/img/logo/banner.jpg">
            <figcaption></figcaption>
          </figure>

          <section class='service'>
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>
          </section>
          
          <section class='service'>
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>
          </section>
          
          <section class='service'>
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>
          </section>
        </article>
      </div>
      <?php echo $_footer;?>
    </div>
    
    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo URL;?>'><span itemprop="title"><?php echo TITLE;?></span></a>
    </div>
    
    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo PAGE_URL_ABOUT;?>'><span itemprop="title">關於宙思</span></a>
    </div>

  </body>
</html>
