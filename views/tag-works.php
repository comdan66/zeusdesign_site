<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title></title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
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
                  <img alt='<?php echo $work['title'];?>' src='<?php echo $work['cover']['c450'];?>'>
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
