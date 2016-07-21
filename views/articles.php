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
          <!-- <h1>知識文章</h1> -->
          <span>知識文章</span>
        </header>

        <div id='article_main' class='list'>

          <h1><a href=''>asd</a></h1>
          
          <article class='article'>
            <header>
              <h2><a href=''>asd</a></h2>
            </header>

            <a href=''>
              <figure class='_i'>
                <img alt='' src='http://pic.zeusdesign.com.tw/upload/articles/cover/0/0/0/11/450x180c_1761894768_575430e6d8c1e.jpg'>
                <figcaption>sad</figcaption>
              </figure>
            </a>

            <section>
              <p>asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd</p>
              <a href=''>閱讀更多</a>
              <time datetime='' data-time=''>asd</time>
            </section>

          </article>

          
          <article class='article'>
            <header>
              <h2><a href=''>asd</a></h2>
            </header>

            <a href=''>
              <figure class='_i'>
                <img alt='' src='http://pic.zeusdesign.com.tw/upload/articles/cover/0/0/0/11/450x180c_1761894768_575430e6d8c1e.jpg'>
                <figcaption>sad</figcaption>
              </figure>
            </a>

            <section>
              <p>asd</p>
              <a href=''>閱讀更多</a>
              <time datetime='' data-time=''>asd</time>
            </section>

          </article>


          <ul class='pagination'>
            <li class='p'><a href='http://www.zeusdesign.com.tw/works/12'>上一頁</a></li>
            <li class='active'><a href='#'>1</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/12'>2</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/24'>3</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/36'>4</a></li>
            <li class='n'><a href='http://www.zeusdesign.com.tw/works/12'>下一頁</a></li>
          </ul>
        </div>
        
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

          <ul class='pagination'>
            <li class='p'><a href='http://www.zeusdesign.com.tw/works/12'>上一頁</a></li>
            <li class='active'><a href='#'>1</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/12'>2</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/24'>3</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/36'>4</a></li>
            <li class='n'><a href='http://www.zeusdesign.com.tw/works/12'>下一頁</a></li>
          </ul>
        </div>

      </div>

      <?php echo $_footer;?>
    </div>


  </body>
</html>
