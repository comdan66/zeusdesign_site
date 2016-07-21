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
        'css/article' . CSS
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
          <div><a href=''>知識文章</a><a href=''>知識文章</a></div>
        </header>

        <article id='article_main' class='article'>
          <header>
            <h1><a href=''>vívosmart HR 開箱文</a></h1>
            <div class="fb-like" data-href="asd" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </header>

          <section class='article_format'>
            <p>話說.. 最近又看上了一款運動手環！</p>
            <p>說到運動手環，去年買的 vívosmart 算是這台 vívosmart HR 的前身！</p>
            <p>其實去年就打算買可以記錄心率的穿戴裝置..</p>
            <p>話說.. 最近又看上了一款運動手環！</p>
            <p>說到運動手環，去年買的 vívosmart 算是這台 vívosmart HR 的前身！</p>
            <p>其實去年就打算買可以記錄心率的穿戴裝置..</p>
            <p>話說.. 最近又看上了一款運動手環！</p>
            <figure href=''>
              <img src='http://pic.zeusdesign.com.tw/upload/ckeditor_pictures/name/0/0/0/1/400h_617152353_56ae0a58f3cb8.jpg'>
              <figcaption data-description='asdasdads'>ad</figcaption>
            </figure>

            <p>說到運動手環，去年買的 vívosmart 算是這台 vívosmart HR 的前身！</p>
            <p>其實去年就打算買可以記錄心率的穿戴裝置..</p>
          </section>

          <ul id='tags'>
            <li>
              <a href=''>asdasd</a>
            </li>
            <li>
              <a href=''>asdasd</a>
            </li>
          </ul>

          <ul id='sources'>
            <li>
              <a href='' target='_blank'>asdasd</a><span><a href='' target='_blank'>adasd</a></span>
            </li>
            <li>
              <a href='' target='_blank'>asdasd</a><span><a href='' target='_blank'>adasd</a></span>
            </li>
          </ul>

          <footer>
            <div><span>張貼者：</span><a href='' target='_blank'>asd</a>於<time datetime='12'>12</time>發佈。</div>
            <div>瀏覽人數：1 人</div>
          </footer>

        </article>

        <div id='article_aside'>
          <aside class='f'>
            <h3>標籤分類</h3>
            <ul>
              <li><a href=''>adasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasd</a></li>
              <li><a href=''>adasd</a></li>
            </ul>
          </aside>


          <aside>
            <h3>熱門文章</h3>
            <ul>
              <li><a href=''>adasd</a></li>
              <li><a href=''>adasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasd</a></li>
              <li><a href=''>adasd</a></li>
            </ul>
          </aside>


          <aside>
            <h3>最新文章</h3>
            <ul>
              <li><a href=''>adasd</a></li>
              <li><a href=''>adasd</a></li>
              <li><a href=''>adasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasd</a></li>
            </ul>
          </aside>
        </div>

      </div>

      <?php echo $_footer;?>
    </div>


  </body>
</html>
