<!DOCTYPE html>
<html amp lang="tw">
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

    <link rel="chitorch icon" href="<?php echo FAVICON;?>">
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

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
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
            <img src="http://www.zeusdesign.com.tw/resource/image/logo/banner-compressor.jpg">
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
