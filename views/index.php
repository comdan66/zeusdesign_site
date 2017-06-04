<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <title><?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo PAGE_URL_INDEX;?>" />
    <meta property="og:title" content="首頁 - <?php echo TITLE;?>" />
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
    
    <link rel="canonical" href="<?php echo PAGE_URL_INDEX;?>" />
    <link rel="alternate" href="<?php echo PAGE_URL_INDEX;?>" hreflang="zh-Hant" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
<?php foreach (Min::css (
        'css/public' . CSS,
        'css/index' . CSS
        ) as $path) { ?>
        <link href="<?php echo URL . $path;?>" rel="stylesheet" type="text/css" />
<?php } ?>

<?php foreach (Min::js  (
        'js/public' . JS,
        'js/index' . JS
      ) as $path) { ?>
        <script src="<?php echo URL . $path;?>" language="javascript" type="text/javascript" ></script>
<?php }?>

    <script type="application/ld+json">
<?php echo json_encode (array (
      '@context' => 'http://schema.org',
      '@type' => 'Organization',
      'name' => TITLE,
      'url' => URL,
      'logo' => array ('@type' => 'ImageObject', 'url' => AMP_IMG_600_60, 'width' => 600, 'height' => 60),
      'description' => mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8'),
      'sameAs' => array (
          'https://www.zeusdesign.com.tw/',
          'https://www.facebook.com/ZeusDesignStudio/',
        )
    ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
    </script>

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>
      
      <article id='main'>
        <header class='header'>
          <h2>Home</h2>
          <a href='<?php echo PAGE_URL_ABOUT;?>'>更多關於宙思 »</a>
        </header>

        <section id='info'>
          <span>web design</span>
          <span>graphic design</span>
          <span>photography</span>
          <span>design project</span>
          <p>宙思設計團隊，服務廣泛，凡舉網頁、平面、包裝、印刷及攝影皆可製作。</p>
          <p>我們擁有各領域的人才，希望能將您的需求，以最完整的服務與最精湛的設計呈現給您。</p>
        </section>

        <section id='imgs'>
          <div id='banner'>
        <?php if ($banners) {
                foreach ($banners as $banner) { ?>
                  <figure class='_i'>
                    <img alt='<?php echo $banner['title'];?> - 宙思設計 ZEUS // Design Studio' src='<?php echo $banner['cover']['w800'];?>' />
                    <div>
                      <h3><?php echo $banner['title'];?></h3>
                      <figcaption><?php echo $banner['content'];?></figcaption>
                      <p><a href='<?php echo $banner['link'];?>'<?php echo $banner['target'] ? " target='_blank'" : '';?>>more</a></p>
                      <a>←</a><a>→</a>
                    </div>
                  </figure>
          <?php }
              } ?>
          </div>
        </section>
      </article>


      <article id='services'>
        <header class='header'>
          <h2>服務項目</h2>
        </header>

        <section class='service'>
          <header>
            <h3>網頁設計</h3>
            <p>web design</p>
          </header>
          <p>網站規劃及官網製作經驗豐富。</p>
          <p>網站製作技術包含：前台畫面設計、後台程式架設、RWD製作(響應式網站：符合智慧型平台)、APP UI介面製作、FB活動...等等。</p>
          <p>網站周邊製作：banner形象製作、EDM...等等。</p>
        </section>

        <section class='service'>
          <header>
            <h3>平面設計</h3>
            <p>graphic design</p>
          </header>
          <p>具有多年平面設計經驗，特別擅常整體形象設計，凡舉可以印刷之相關設計物品，皆可承接製作。</p>
          <p>宙思亦有印刷服務，多年與固定印刷廠配合，能將設計作品以最好的方式，印出成品。</p>
        </section>

        <section class='service'>
          <header>
            <h3>商業攝影</h3>
            <p>photography</p>
          </header>
          <p>宙思擁有專業攝影棚，運用攝影經驗及後製電修技巧，將產品完美呈現。</p>
          <p>服務範圍：商品攝影、產品情境照拍攝、人像攝影、活動攝影及婚禮攝影。</p>
        </section>
        
        <section class='service'>
          <header>
            <h3>設計專案</h3>
            <p>design project</p>
          </header>
          <p>結合網頁、平面及商業攝影之設計專案。</p>
          <p>由一項設計項目開始，規劃整體視覺，進而延伸網頁及整體形象，搭配商業攝影，讓品牌形象更為一致。</p>
        </section>
      </article>


      <article id='works'>
        <header class='header'>
          <h2>設計作品</h2>
          <a href='<?php echo URL_WORKS . 'index' . HTML;?>'>設計作品欣賞更多作品 »</a>
        </header>
  <?php if ($promos) {
          foreach ($promos as $promo) { ?>
            <section class='work'>
              <a href='<?php echo $promo['link'];?>' class='_i'<?php echo $promo['target'] ? " target='_blank'" : '';?>>
                <img alt='<?php echo $promo['title'];?> - 宙思設計 ZEUS // Design Studio' src='<?php echo $promo['cover']['w500'];?>'>
              </a>

              <header>
                <h3><a href='<?php echo $promo['link'];?>'<?php echo $promo['target'] ? " target='_blank'" : '';?>><?php echo $promo['title'];?></a></h3>
                <p><?php echo $promo['content'];?></p>
              </header>
            </section>
    <?php }
        } ?>
      </article>
      <?php echo $_footer;?>
    </div>

    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo URL;?>'><span itemprop="title"><?php echo TITLE;?></span></a>
    </div>

  </body>
</html>
