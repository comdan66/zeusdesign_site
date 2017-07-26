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

      <div id="work" data-k="work" data-id="<?php echo $work['id'];?>">
        <header class="header">
          <div><a href="<?php echo URL_WORKS . 'index' . HTML;?>">設計作品</a><a href="<?php echo $work['url'];?>"><?php echo $work['title'];?></a></div>
        </header>

        <article id="work_main" class="content">
          <header>
            <h1><a href="<?php echo $work['url'];?>"><?php echo $work['title'];?></a></h1>
            <div class="fb-like" data-href="<?php echo $work['url'];?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </header>
  
    <?php if (!$work['status']) { ?>
            <div id="dev">注意！此頁面尚未公開！</div>
    <?php }?>

          <section class="work_format" data-url="<?php echo $work['url'];?>">
            <?php echo $work['content'];
            if ($work['images']) {
              foreach ($work['images'] as $image) { ?>
                <figure href="<?php echo $work['url'];?>">
                  <img src="<?php echo $image['w800'];?>" />
                  <figcaption></figcaption>
                </figure>
        <?php }
            } ?>
          </section>

          <footer>
            <div><span>張貼者：</span><a href="<?php echo $work['user']['url'];?>" target="_blank"><?php echo $work['user']['name'];?></a>於<time datetime="<?php echo $work['created_at'];?>"><?php echo $work['created_at'];?></time>發佈。</div>
            <div>瀏覽人數：<?php echo $work['pv'];?> 人</div>
          </footer>

        </article>
        
        <article id="work_aside" class="memos">

    <?php if ($work['blocks']) {
            foreach ($work['blocks'] as $block) { ?>
              <section>
                <h2><?php echo $block['title'];?></h2>
          <?php if ($block['items']) {
                  foreach ($block['items'] as $item) { ?>
                    <span>
                <?php if ($item['href']) { ?>
                        <a href="<?php echo $item['href'];?>" target="_blank"><?php echo $item['title'] ? $item['title'] : $item['href'];?></a>
                        <i><?php echo $item['href'];?></i>
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
            <section class="t">
              <h2>分類</h2>
        <?php foreach ($work['tags'] as $tag) { ?>
                <span><a href="<?php echo $tag['url'] . 'index' . HTML;?>"><?php echo $tag['name'];?></a></span>
        <?php } ?>
            </section>
    <?php } ?>

        </article>
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
