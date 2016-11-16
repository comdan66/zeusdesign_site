<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title>設計作品 - <?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (DESCRIPTION, 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo URL_WORKS . 'index' . HTML;?>" />
    <meta property="og:title" content="設計作品 - <?php echo TITLE;?>" />
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
    <link rel="canonical" href="<?php echo URL_WORKS . 'index' . HTML;?>" />
    <link rel="alternate" href="<?php echo URL_WORKS . 'index' . HTML;?>" hreflang="zh-Hant" />

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
              'name' => $work['title'])));

echo json_encode (array (
        '@context' => 'http://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => $items
      ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
    </script>

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='work'>
        <header class='header'>
          <h1>設計作品</h1>
        </header>

        <article id='work_main' class='list'>
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
  </body>
</html>
