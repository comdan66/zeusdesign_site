<!DOCTYPE html>
<html amp lang="tw">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <title><?php echo $tag['name'];?>作品 - <?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo $tag['url'] . 'index' . HTML;?>" />
    <meta property="og:title" content="<?php echo $tag['name'];?>作品 - <?php echo TITLE;?>" />
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
    <link rel="canonical" href="<?php echo  $tag['url'] . 'index' . HTML;?>" />
    <link rel="alternate" href="<?php echo  $tag['url'] . 'index' . HTML;?>" hreflang="zh-Hant" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
<?php foreach (Min::css (
        'css/public' . CSS,
        'css/work' . CSS,
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
        foreach ($works as $i => $work)
          array_push ($items, array (
            '@type' => 'ListItem',
            'position' => $offset + ($i + 1),
            'item' => array ('@id' => $work['url'],
              'url' => $work['url'],
              'name' => $work['title'],
              'description' => mb_strimwidth (remove_ckedit_tag ($work['content']), 0, 150, '…','UTF-8'),
              'image' => array ('@type' => 'ImageObject', 'url' => $work['cover']['c1200'], 'height' => 630, 'width' => 1200))));

echo json_encode (array (
        '@context' => 'http://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => $items
      ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
    </script>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='work'>
        <header class='header'>
          <span>設計作品</span>
        </header>

        <article id='work_main' class='list'>
          <h1><a href='<?php echo $tag['url'] . 'index' . HTML;?>'><?php echo $tag['name'];?></a></h1>
    <?php if ($works) {
            foreach ($works as $work) { ?>
              <section class='work'>
                <a href='<?php echo $work['url'];?>' class='_i'>
                  <img alt='<?php echo $work['title'];?>' src='<?php echo $work['cover']['c400'];?>'>
                </a>

                <header>
                  <h3><a href='<?php echo $work['url'];?>'><?php echo $work['title'];?></a></h3>
                  <p><?php echo mb_strimwidth (remove_ckedit_tag ($work['content']), 0, 100, '…','UTF-8');?></p>
                </header>
              </section>
      <?php }
          }
          echo $pagination; ?>
        </article>
        
        <div id='work_aside' class='tags'>
    <?php if ($tags) {
            foreach ($tags as $tag) { ?>
              <a href='<?php echo $tag['url'] . 'index' . HTML;?>' class='m'><?php echo $tag['name'];?></a>

        <?php if ($tag['subs']) {
                foreach ($tag['subs'] as $sub) { ?>
                  <a href='<?php echo $sub['url'] . 'index' . HTML;?>'><?php echo $sub['name'];?></a>
          <?php }
              }
            }
          } ?>
        </div>
      </div>
      <?php echo $_footer;?>
    </div>

    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo URL;?>'><span itemprop="title"><?php echo TITLE;?></span></a>
    </div>

    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo PATH_WORKS . 'index' . HTML;?>'><span itemprop="title">設計作品</span></a>
    </div>

    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo $tag['url'] . 'index' . HTML;?>'><span itemprop="title"><?php echo $tag['name'];?>作品</span></a>
    </div>

  </body>
</html>
