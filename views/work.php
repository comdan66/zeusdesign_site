<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title><?php echo $work['title'];?> - <?php echo TITLE;?></title>
<?php if (DEV) { ?>
        <meta name="robots" content="noindex,nofollow" />
<?php } else { ?>
        <meta name="robots" content="index,follow" />
<?php } ?>
    <meta name="keywords" content="<?php echo KEYWORDS;?>" />
    <meta name="description" content="<?php echo mb_strimwidth (remove_ckedit_tag ($work['content']), 0, 150, '…','UTF-8');?>" />

    <meta property="og:site_name" content="<?php echo TITLE;?>" />
    <meta property="og:url" content="<?php echo $work['url'];?>" />
    <meta property="og:title" content="<?php echo $work['title'];?> - <?php echo TITLE;?>" />
    <meta property="og:description" content="<?php echo mb_strimwidth (remove_ckedit_tag ($work['content'], false), 0, 300, '…','UTF-8');?>" />

    <meta property="fb:admins" content="<?php echo FB_ADMIN_ID;?>" />
    <meta property="fb:app_id" content="<?php echo FB_APP_ID;?>" />

    <meta property="og:locale" content="zh_TW" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="article" />

    <meta property="article:author" content="https://www.facebook.com/ZeusDesignStudio" />
    <meta property="article:publisher" content="https://www.facebook.com/ZeusDesignStudio" />
    <meta property="article:modified_time" content="<?php echo date ('c', strtotime ($work['updated_at']));?>" />
    <meta property="article:published_time" content="<?php echo date ('c', strtotime ($work['created_at']));?>" />

    <meta property="og:image" content="<?php echo $work['cover']['c1200'];?>" alt="<?php echo TITLE;?>" />
    <meta property="og:image:type" tag="larger" content="<?php echo 'image/' . (($pi = pathinfo ($work['cover']['c1200'])) && $pi['extension'] ? $pi['extension'] : 'jpg');?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

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

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='work' data-k='work' data-id='<?php echo $work['id'];?>'>
        <header class='header'>
          <div><a href='<?php echo URL_WORKS . 'index' . HTML;?>'>知識文章</a><a href='<?php echo $work['url'];?>'><?php echo $work['title'];?></a></div>
        </header>

        <article id='work_main' class='content'>
          <header>
            <h1><a href='<?php echo $work['url'];?>'><?php echo $work['title'];?></a></h1>
            <div class="fb-like" data-href="<?php echo $work['url'];?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </header>

          <section class='work_format' data-url='<?php echo $work['url'];?>'>
            <?php echo $work['content'];
            if ($work['images']) {
              foreach ($work['images'] as $image) { ?>
                <figure href=''>
                  <img src='<?php echo $image['w800'];?>'>
                  <figcaption data-description=''><?php echo $work['title'];?></figcaption>
                </figure>
        <?php }
            } ?>
          </section>

          <footer>
            <div><span>張貼者：</span><a href='<?php echo $work['user']['url'];?>' target='_blank'><?php echo $work['user']['name'];?></a>於<time datetime='<?php echo $work['created_at'];?>'><?php echo $work['created_at'];?></time>發佈。</div>
            <div>瀏覽人數：<?php echo $work['pv'];?> 人</div>
          </footer>

        </article>
        
        <article id='work_aside' class='memos'>

    <?php if ($work['blocks']) {
            foreach ($work['blocks'] as $block) { ?>
              <section>
                <h2><?php echo $block['title'];?></h2>
          <?php if ($block['items']) {
                  foreach ($block['items'] as $item) { ?>
                    <span>
                <?php if ($item['link']) { ?>
                        <a href=''><?php echo $item['title'] ? $item['title'] : $item['link'];?></a>
                        <i><?php echo $item['link'];?></i>
                <?php } else {
                        echo $item['title'];
                      } ?>
                    </span>
            <?php }
                } ?>
              </section>
      <?php }
          } ?>

    <?php if ($work['tags']) { ?>
            <section class='t'>
              <h2>分類</h2>
        <?php foreach ($work['tags'] as $tag) { ?>
                <span><a href='<?php echo $tag['url'] . 'index' . HTML;?>'><?php echo $tag['name'];?></a></span>
        <?php } ?>
            </section>
    <?php } ?>

        </article>
      </div>

      <?php echo $_footer;?>
    </div>
  </body>
</html>