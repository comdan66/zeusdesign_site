<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title>知識文章 - <?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo URL_ARTICLES . 'index' . HTML;?>" />
    <meta property="og:title" content="知識文章 - <?php echo TITLE;?>" />
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
    <link rel="canonical" href="<?php echo URL_ARTICLES . 'index' . HTML;?>" />
    <link rel="alternate" href="<?php echo URL_ARTICLES . 'index' . HTML;?>" hreflang="zh-Hant" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
<?php foreach (Min::css (
        'css/public' . CSS,
        'css/article' . CSS,
        'css/pagination' . CSS
        ) as $path) { ?>
        <link href="<?php echo URL . $path;?>" rel="stylesheet" type="text/css" />
<?php } ?>

<?php foreach (Min::js  (
        'js/public' . JS
      ) as $path) { ?>
        <script src="<?php echo URL . $path;?>" language="javascript" type="text/javascript" ></script>
<?php }?>

    <script type="application/ld+json">
<?php $items = array ();
        foreach ($articles as $i => $article)
          array_push ($items, array (
            '@type' => 'ListItem',
            'position' => $offset + ($i + 1),
            'item' => array ('@id' => $article['url'],
              'url' => $article['url'],
              'name' => $article['title'],
              'description' => mb_strimwidth (remove_ckedit_tag ($article['content']), 0, 150, '…','UTF-8'),
              'image' => array ('@type' => 'ImageObject', 'url' => $article['cover']['c1200'], 'height' => 630, 'width' => 1200))));

echo json_encode (array (
        '@context' => 'http://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => $items
      ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
    </script>

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='article'>
        <header class='header'>
          <h1>知識文章</h1>
        </header>

        <div id='article_main' class='list'>

    <?php foreach ($articles as $article) { ?>
            <article class='article'>
              <header>
                <h2><a href='<?php echo $article['url'];?>'><?php echo $article['title'];?></a></h2>
              </header>

              <a href='<?php echo $article['url'];?>'>
                <figure class='_i'>
                  <img alt='<?php echo $article['title'];?>' src='<?php echo $article['cover']['c450'];?>'>
                  <figcaption><?php echo $article['title'];?></figcaption>
                </figure>
              </a>
 
              <section>
                <p><?php echo mb_strimwidth (remove_ckedit_tag ($article['content']), 0, 200, '…','UTF-8');?></p>
                <a href='<?php echo $article['url'];?>'>閱讀更多</a>
                <time datetime='<?php echo $article['created_at'];?>' data-time='<?php echo $article['created_at'];?>'><?php echo $article['created_at'];?></time>
              </section>

            </article>
    <?php }
          echo $pagination;?>
        </div>
        
        <div id='article_aside'>
    <?php if ($tags) { ?>
            <aside class='f'>
              <h3>標籤分類</h3>
              <ul>
          <?php foreach ($tags as $tag) { ?>
                  <li><a href='<?php echo $tag['url'] . 'index' . HTML;?>'><?php echo $tag['name'];?></a></li>
          <?php } ?>
              </ul>
            </aside>
    <?php }
          if ($hots = array_slice ($hots, 0, 5)) { ?>
            <aside>
              <h3>熱門文章</h3>
              <ul>
          <?php foreach ($hots as $hot) { ?>
                  <li><a href='<?php echo $hot['url'];?>'><?php echo $hot['title'];?></a></li>
          <?php } ?>
              </ul>
            </aside>
    <?php }
          if ($news = array_slice ($news, 0, 5)) { ?>
            <aside>
              <h3>最新文章</h3>
              <ul>
          <?php foreach ($news as $new) { ?>
                  <li><a href='<?php echo $new['url'];?>'><?php echo $new['title'];?></a></li>
          <?php } ?>
              </ul>
            </aside>
    <?php } ?>

          <?php echo $pagination;?>
        </div>

      </div>

      <?php echo $_footer;?>
    </div>
  </body>
</html>
