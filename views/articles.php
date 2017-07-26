<!DOCTYPE html>
<html lang="tw">
  <head>
    <?php echo isset ($meta) ? implode (DEV ? "\n" : '', $meta) : '';?>
    <title><?php echo (isset ($title) && $title ? $title . ' - ' : '') . MAIN_TITLE;?></title>
    <?php echo isset ($link) ? implode (DEV ? "\n" : '', $link) : '';?>
    <?php echo isset ($css) ? implode (DEV ? "\n" : '', $css) : '';?>
    <?php echo isset ($js) ? implode (DEV ? "\n" : '', $js) : '';?>
    <?php echo isset ($jsonLd) ? $jsonLd : '';?>
  </head>
  <body lang="zh-tw">
    
    <div id="container">
      <?php echo $_header;?>

      <div id="article">
        <header class="header">
          <h1>知識文章</h1>
        </header>

        <div id="article_main" class="list<?php echo !$articles ? ' e' : '';?>">
    <?php foreach ($articles as $article) { ?>
            <article class="article">
              <header>
                <h2><?php echo !$article['status'] ? '<span>尚未公開</span>' : '';?><a href="<?php echo $article['url'];?>"><?php echo $article['title'];?></a></h2>
              </header>

              <a href="<?php echo $article['url'];?>">
                <figure class="_i">
                  <img alt="<?php echo $article['title'];?>" src="<?php echo $article['cover']['c450'];?>" />
                  <figcaption><?php echo $article['title'];?></figcaption>
                </figure>
              </a>
 
              <section>
                <p><?php echo mb_strimwidth (removeHtmlTag ($article['content']), 0, 200, '…','UTF-8');?></p>
                <a href="<?php echo $article['url'];?>">閱讀更多</a>
                <time datetime="<?php echo $article['created_at'];?>" data-time="<?php echo $article['created_at'];?>"><?php echo $article['created_at'];?></time>
              </section>

            </article>
    <?php }
          echo $pagination;?>
        </div>
        
        <div id="article_aside"<?php echo $tags && $hots && $news ? '' : ' class="e"';?>>
    <?php if ($tags) { ?>
            <aside class="f">
              <h3>標籤分類</h3>
              <ul>
          <?php foreach ($tags as $tag) { ?>
                  <li><a href="<?php echo $tag['url'] . 'index' . HTML;?>"><?php echo $tag['name'];?></a></li>
          <?php } ?>
              </ul>
            </aside>
    <?php }
          if ($hots) { ?>
            <aside>
              <h3>熱門文章</h3>
              <ul>
          <?php foreach ($hots as $hot) { ?>
                  <li><a href="<?php echo $hot['url'];?>"><?php echo $hot['title'];?></a></li>
          <?php } ?>
              </ul>
            </aside>
    <?php }
          if ($news) { ?>
            <aside>
              <h3>最新文章</h3>
              <ul>
          <?php foreach ($news as $new) { ?>
                  <li><a href="<?php echo $new['url'];?>"><?php echo $new['title'];?></a></li>
          <?php } ?>
              </ul>
            </aside>
    <?php } ?>
          <?php echo $pagination;?>
        </div>
      </div>
      <?php echo $_footer;?>
    </div>

<?php
    if (isset ($scopes) && $scopes) {
      foreach ($scopes as $scope) { ?>
        <div class="_scope" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo $scope['url'];?>"><span itemprop="title"><?php echo $scope['title'];?></span></a></div>
<?php }
    } ?>

  </body>
</html>
