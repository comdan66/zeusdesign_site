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
      

      <div id="about">
        <header class="header">
          <h1>關於宙思</h1>
        </header>

        <aside id="aside">
          <a>關於宙思 ›</a>
          <a>關於設計 ›</a>
          <a>我們提供的服務 ›</a>
        </aside>

        <article id="service">
          <figure>
            <img src="/img/logo/banner.jpg" />
            <figcaption></figcaption>
          </figure>

          <section class="service">
            <header>
              <h2>關於宙思</h2>
              <p>成立於2013。</p>
            </header>
            <p>「宙思設計有限公司」是由各領域專業的設計師組合而成的團隊，從品牌創始之初到實體印刷製作物及網站製作，提供整體的服務與規劃，滿足客戶各方面的需求。</p>

            <header>
              <h2>關於設計</h2>
              <p>「設計不是裝飾，而是溝通。」</p>
            </header>
            <p>設計的意義不僅是將圖像妝點美化，而在於賦予事物應有的靈魂及表象，我們的團隊致力於提供完整及有效的解決方案，並著重與客戶之間的互動溝通，讓設計並不再只是一種商業行為，而是一種生活及思考的方式，用我們的專業、熱情及堅持，為客戶的需求打造出嶄新創意的視野。</p>

            <header>
              <h2>我們提供的服務</h2>
            </header>
            <p>平面設計/網站規劃/品牌規劃/包裝/印刷/商業攝影</p>

          </section>
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
