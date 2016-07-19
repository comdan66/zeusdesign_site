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
        'css/about' . CSS
        ) as $path) { ?>
        <link href="<?php echo URL . $path;?>" rel="stylesheet" type="text/css" />
<?php } ?>

<?php foreach (Min::js  (
        'js/public' . JS
      ) as $path) { ?>
        <script src="<?php echo URL . $path;?>" language="javascript" type="text/javascript" ></script>
<?php }?>

    <script src="js/public.js" language="javascript" type="text/javascript" ></script>

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_first_header;?>
      

      <div id='about'>
        <header>
          <h1>關於宙思</h1>
        </header>

        <aside>
          <a>關於宙思 ›</a>
          <a>關於設計 ›</a>
          <a>我們提供的服務 ›</a>
        </aside>

        <article>
          <figure>
            <img src="http://www.zeusdesign.com.tw/resource/image/logo/banner-compressor.jpg">
            <figcaption></figcaption>
          </figure>

          <section>
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>
          </section>
          
          <section>
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>
          </section>
          
          <section>
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>
          </section>

        </article>
      </div>


      <?php echo $_last_footer;?>
    </div>

  </body>
</html>
