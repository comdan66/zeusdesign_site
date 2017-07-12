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
      
      <article id='main'>
        <header class='header'>
          <h2>Home</h2>
          <a href='<?php echo PAGE_URL_ABOUT;?>'>更多關於宙思 »</a>
        </header>

        <section id='info'>
          <span>web design</span>
          <span>graphic design</span>
          <span>photography</span>
          <span>design project</span>
          <p>宙思設計團隊，服務廣泛，凡舉網頁、平面、包裝、印刷及攝影皆可製作。</p>
          <p>我們擁有各領域的人才，希望能將您的需求，以最完整的服務與最精湛的設計呈現給您。</p>
        </section>

        <section id='imgs'>
          <div id='banner'>
        <?php if ($banners) {
                foreach ($banners as $banner) { ?>
                  <figure class='_i'>
                    <img alt='<?php echo $banner['title'];?> - 宙思設計 ZEUS // Design Studio' src='<?php echo $banner['cover']['w800'];?>' />
                    <div>
                      <h3><?php echo $banner['title'];?></h3>
                      <figcaption><?php echo $banner['content'];?></figcaption>
                      <p><a href='<?php echo $banner['link'];?>'<?php echo $banner['blank'] ? " target='_blank'" : '';?>>more</a></p>
                      <a>←</a><a>→</a>
                    </div>
                  </figure>
          <?php }
              } ?>
          </div>
        </section>
      </article>


      <article id='services'>
        <header class='header'>
          <h2>服務項目</h2>
        </header>

        <section class='service'>
          <header>
            <h3>網頁設計</h3>
            <p>web design</p>
          </header>
          <p>網站規劃及官網製作經驗豐富。</p>
          <p>網站製作技術包含：前台畫面設計、後台程式架設、RWD製作(響應式網站：符合智慧型平台)、APP UI介面製作、FB活動...等等。</p>
          <p>網站周邊製作：banner形象製作、EDM...等等。</p>
        </section>

        <section class='service'>
          <header>
            <h3>平面設計</h3>
            <p>graphic design</p>
          </header>
          <p>具有多年平面設計經驗，特別擅常整體形象設計，凡舉可以印刷之相關設計物品，皆可承接製作。</p>
          <p>宙思亦有印刷服務，多年與固定印刷廠配合，能將設計作品以最好的方式，印出成品。</p>
        </section>

        <section class='service'>
          <header>
            <h3>商業攝影</h3>
            <p>photography</p>
          </header>
          <p>宙思擁有專業攝影棚，運用攝影經驗及後製電修技巧，將產品完美呈現。</p>
          <p>服務範圍：商品攝影、產品情境照拍攝、人像攝影、活動攝影及婚禮攝影。</p>
        </section>
        
        <section class='service'>
          <header>
            <h3>設計專案</h3>
            <p>design project</p>
          </header>
          <p>結合網頁、平面及商業攝影之設計專案。</p>
          <p>由一項設計項目開始，規劃整體視覺，進而延伸網頁及整體形象，搭配商業攝影，讓品牌形象更為一致。</p>
        </section>
      </article>


      <article id='works'>
        <header class='header'>
          <h2>設計作品</h2>
          <a href='<?php echo URL_WORKS . 'index' . HTML;?>'>設計作品欣賞更多作品 »</a>
        </header>
  <?php if ($promos) {
          foreach ($promos as $promo) { ?>
            <section class='work'>
              <a href='<?php echo $promo['link'];?>' class='_i'<?php echo $promo['blank'] ? " target='_blank'" : '';?>>
                <img alt='<?php echo $promo['title'];?> - 宙思設計 ZEUS // Design Studio' src='<?php echo $promo['cover']['w500'];?>'>
              </a>

              <header>
                <h3><a href='<?php echo $promo['link'];?>'<?php echo $promo['blank'] ? " target='_blank'" : '';?>><?php echo $promo['title'];?></a></h3>
                <p><?php echo $promo['content'];?></p>
              </header>
            </section>
    <?php }
        } ?>
      </article>
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
