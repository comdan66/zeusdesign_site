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
          <div><a href=''>知識文章</a><a href=''>知識文章</a></div>
        </header>

        <article id='work_main' class='content'>
          <header>
            <h1><a href=''>義大利品牌Look - 台灣總代理</a></h1>
            <div class="fb-like" data-href="asd" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </header>

          <section class='work_format'>
            <p>話說.. 最近又看上了一款運動手環！</p>

            <figure href=''>
              <img src='http://pic.zeusdesign.com.tw/upload/ckeditor_pictures/name/0/0/0/1/400h_617152353_56ae0a58f3cb8.jpg'>
              <figcaption data-description='asdasdads'>ad</figcaption>
            </figure>

            <figure href=''>
              <img src='http://pic.zeusdesign.com.tw/upload/ckeditor_pictures/name/0/0/0/1/400h_617152353_56ae0a58f3cb8.jpg'>
              <figcaption data-description='asdasdads'>ad</figcaption>
            </figure>
          </section>
          
          <footer>
            <div><span>張貼者：</span><a href='' target='_blank'>asd</a>於<time datetime='12'>12</time>發佈。</div>
            <div>瀏覽人數：1 人</div>
          </footer>

        </article>
        
        <article id='work_aside' class='memos'>

          <section>
            <h2>Client</h2>
            <span>
              嘉豪光學有限公司 
            </span>
          </section>

          <section>
            <h2>Details</h2>
            <span>
              前端畫面設計 
            </span>
            <span>
              後台程式設計
            </span>
          </section>

          <section>
            <h2>Technology</h2>
            <span>
              HTML
            </span>
            <span>
              CSS
            </span>
            <span>
              jQuery
            </span>
            <span>
              php
            </span>
            <span>
              Photoshop
            </span>
            <span>
              illustrator
            </span>
          </section>

          <section>
            <h2>Links</h2>
            <span>
              <a href=''>Live website</a>
              <i>http://www.hogaoptical.com.tw/look</i>
            </span>
          </section>

          <section class='t'>
            <h2>標籤</h2>
            <span><a href=''>wqeqweqwe</a></span>
            <span><a href=''>wqeqweqwe</a></span>
            <span><a href=''>wqeqweqwe</a></span>
          </section>

        </article>

      </div>


      <?php echo $_footer;?>
    </div>


  </body>
</html>
