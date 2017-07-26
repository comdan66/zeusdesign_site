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

      <div id='work'>
        <header class='header'>
          <span>設計作品</span>
        </header>

        <article id='work_main' class='list<?php echo $works ? '' : ' e';?>'>
          <h1><a href='<?php echo $tag['url'] . 'index' . HTML;?>'><?php echo $tag['name'];?></a></h1>
    <?php if ($works) {
            foreach ($works as $work) { ?>
              <section class='work'>
                <a href='<?php echo $work['url'];?>' class='_i'>
                  <img alt='<?php echo $work['title'];?>' src='<?php echo $work['cover']['w300'];?>'>
                </a>

                <header>
                  <h3><?php echo !$work['status'] ? '<span>尚未公開</span>' : '';?><a href='<?php echo $work['url'];?>'><?php echo $work['title'];?></a></h3>
                  <p><?php echo mb_strimwidth (removeHtmlTag ($work['content']), 0, 100, '…','UTF-8');?></p>
                </header>
              </section>
      <?php }
          }
          echo $pagination; ?>
        </article>
        
        <div id='work_aside' class='tags<?php echo $tags ? '' : ' e';?>'>
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

<?php
    if (isset ($scopes) && $scopes) {
      foreach ($scopes as $scope) { ?>
        <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href='<?php echo $scope['url'];?>'><span itemprop="title"><?php echo $scope['title'];?></span></a></div>
<?php }
    } ?>

  </body>
</html>
