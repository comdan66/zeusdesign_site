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
        'css/index' . CSS
        ) as $path) { ?>
        <link href="<?php echo URL . $path;?>" rel="stylesheet" type="text/css" />
<?php } ?>

<?php foreach (Min::js  (
        'js/public' . JS,
        'js/index' . JS
      ) as $path) { ?>
        <script src="<?php echo URL . $path;?>" language="javascript" type="text/javascript" ></script>
<?php }?>

    <script src="js/public.js" language="javascript" type="text/javascript" ></script>

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_first_header;?>
      
      <article id='main'>
        <header>
          <h2>Home</h2>
          <a href=''>更多關於宙思 »</a>
        </header>

        <section>
          <span>web design</span>
          <span>graphic design</span>
          <span>photography</span>
          <span>design project</span>
          <p>宙思設計團隊，服務廣泛，凡舉網頁、平面、包裝、印刷及攝影皆可製作。</p>
          <p>我們擁有各領域的人才，希望能將您的需求，以最完整的服務與最精湛的設計呈現給您。</p>
        </section>

        <section>
          <div id='banner'>
            <figure>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/banners/cover/0/0/0/3/800w_479988062_569d12844df96.jpg' />
              <div>
                <h3>平面設計</h3>
                <figcaption>台灣紡拓會國外展主視覺設計</figcaption>
                <p><a href=''>more</a></p>
                <a>←</a><a>→</a>
              </div>
            </figure>
            <figure>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/banners/cover/0/0/0/3/800w_479988062_569d12844df96.jpg' />
              <div>
                <h3>平面設計</h3>
                <figcaption>台灣紡拓會國外展主視覺設計</figcaption>
                <p><a href=''>more</a></p>
                <a>←</a><a>→</a>
              </div>
            </figure>
            <figure>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/banners/cover/0/0/0/3/800w_479988062_569d12844df96.jpg' />
              <div>
                <h3>平面設計</h3>
                <figcaption>台灣紡拓會國外展主視覺設計</figcaption>
                <p><a href=''>more</a></p>
                <a>←</a><a>→</a>
              </div>
            </figure>
          </div>
        </section>
      </article>


      <article id='service'>
        <header>
          <h2>服務項目</h2>
        </header>

        <section>
          <header>
            <h3>網頁設計</h3>
            <p>web design</p>
          </header>
          <p>網站規劃及官網製作經驗豐富。</p>
          <p>網站製作技術包含：前台畫面設計、後台程式架設、RWD製作(響應式網站：符合智慧型平台)、APP UI介面製作、FB活動...等等。</p>
          <p>網站周邊製作：banner形象製作、EDM...等等。</p>
        </section>

        <section>
          <header>
            <h3>平面設計</h3>
            <p>graphic design</p>
          </header>
          <p>具有多年平面設計經驗，特別擅常整體形象設計，凡舉可以印刷之相關設計物品，皆可承接製作。</p>
          <p>宙思亦有印刷服務，多年與固定印刷廠配合，能將設計作品以最好的方式，印出成品。</p>
        </section>

        <section>
          <header>
            <h3>商業攝影</h3>
            <p>photography</p>
          </header>
          <p>宙思擁有專業攝影棚，運用攝影經驗及後製電修技巧，將產品完美呈現。</p>
          <p>服務範圍：商品攝影、產品情境照拍攝、人像攝影、活動攝影及婚禮攝影。</p>
        </section>
        
        <section>
          <header>
            <h3>設計專案</h3>
            <p>design project</p>
          </header>
          <p>結合網頁、平面及商業攝影之設計專案。</p>
          <p>由一項設計項目開始，規劃整體視覺，進而延伸網頁及整體形象，搭配商業攝影，讓品牌形象更為一致。</p>
        </section>
      </article>


      <article id='works'>
        <header>
          <h2>設計作品</h2>
          <a href=''>設計作品欣賞更多作品 »</a>
        </header>

        <section>
          <a href=''>
            <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
          </a>

          <header>
            <h3><a href=''>網頁設計</a></h3>
            <p>EDM, 活動網站, 官網</p>
          </header>
        </section>


        <section>
          <a href=''>
            <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
          </a>

          <header>
            <h3><a href=''>網頁設計</a></h3>
            <p>EDM, 活動網站, 官網</p>
          </header>
        </section>


        <section>
          <a href=''>
            <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
          </a>

          <header>
            <h3><a href=''>網頁設計</a></h3>
            <p>EDM, 活動網站, 官網</p>
          </header>
        </section>


        <section>
          <a href=''>
            <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
          </a>

          <header>
            <h3><a href=''>網頁設計</a></h3>
            <p>EDM, 活動網站, 官網</p>
          </header>
        </section>

      </article>

      <?php echo $_last_footer;?>
    </div>


  </body>
</html>
