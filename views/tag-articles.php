<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title></title>

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

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='article'>
        <header class='header'>
          <span>知識文章</span>
        </header>

        <div id='article_main' class='list'>
          <h1><a href='<?php echo $tag['url'] . 'index' . HTML;?>'><?php echo $tag['name'];?></a></h1>

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
