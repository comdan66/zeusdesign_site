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
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='article' data-k='article' data-id='<?php echo $article['id'];?>'>
        <header class='header'>
          <div><a href='<?php echo URL_ARTICLES . 'index' . HTML;?>'>知識文章</a><a href='<?php echo $article['url'];?>'><?php echo $article['title'];?></a></div>
        </header>

        <article id='article_main' class='article'>
          <header>
            <h1><a href='<?php echo $article['url'];?>'><?php echo $article['title'];?></a></h1>
            <div class="fb-like" data-href="<?php echo $article['url'];?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </header>
  
    <?php if (!$article['status']) { ?>
            <div id='dev'>注意！此頁面尚未公開！</div>
    <?php }?>

          <section class='article_format' data-url='<?php echo $article['url'];?>'><?php echo $article['content'];?></section>

    <?php if ($article['tags']) { ?>
            <ul id='tags'>
        <?php foreach ($article['tags'] as $tag) { ?>
                <li><a href='<?php echo $tag['url'] . 'index' . HTML;?>'><?php echo $tag['name'];?></a></li>
        <?php } ?>
            </ul>
    <?php }
          if ($article['sources']) { ?>
            <ul id='sources'>
        <?php foreach ($article['sources'] as $source) { ?>
                <li><a href='<?php echo $source['href'];?>' target='_blank'><?php echo $source['title'];?></a><span><a href='<?php echo $source['href'];?>' target='_blank'><?php echo $source['href'];?></a></span></li>
        <?php } ?>
            </ul>
    <?php } ?>

          <footer>
            <div><span>張貼者：</span><a href='<?php echo $article['user']['url'];?>' target='_blank'><?php echo $article['user']['name'];?></a>於<time datetime='<?php echo $article['created_at'];?>'><?php echo $article['created_at'];?></time>發佈。</div>
            <div>瀏覽人數：<?php echo $article['pv'];?> 人</div>
          </footer>

        </article>

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
        </div>
      </div>

      <?php echo $_footer;?>
    </div>

<?php
    if (isset ($scopes) && $scopes) {
      foreach ($scopes as $scope) { ?>
        <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href='<?php echo $scope['url'];?>'><span itemprop="title"><?php echo $scope['title'];?></span></a></div>
<?php }
    } ?>

  </body>
</html>
