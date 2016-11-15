<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

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

  </body>
</html>
