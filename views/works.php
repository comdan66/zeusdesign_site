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
          <!-- <h1>設計作品</h1> -->
          <span>設計作品</span>
        </header>

        <article id='work_main' class='list'>

          <h1><a href=''>asd</a></h1>
          
          
          <section class='work'>
            <a href='' class='_i'>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
            </a>

            <header>
              <h3><a href=''>網頁設計</a></h3>
              <p>EDM, 活動網站, 官網</p>
            </header>
          </section>

          <section class='work'>
            <a href='' class='_i'>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
            </a>

            <header>
              <h3><a href=''>網頁設計</a></h3>
              <p>EDM, 活動網站, 官網</p>
            </header>
          </section>

          <section class='work'>
            <a href='' class='_i'>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
            </a>

            <header>
              <h3><a href=''>網頁設計</a></h3>
              <p>EDM, 活動網站, 官網</p>
            </header>
          </section>

          <section class='work'>
            <a href='' class='_i'>
              <img alt='' src='http://pic.zeusdesign.com.tw/upload/promos/cover/0/0/0/3/500w_495365543_569d1273b64cc.jpg'>
            </a>

            <header>
              <h3><a href=''>網頁設計</a></h3>
              <p>EDM, 活動網站, 官網</p>
            </header>
          </section>



          <ul class='pagination'>
            <li class='p'><a href='http://www.zeusdesign.com.tw/works/12'>上一頁</a></li>
            <li class='active'><a href='#'>1</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/12'>2</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/24'>3</a></li>
            <li><a href='http://www.zeusdesign.com.tw/works/36'>4</a></li>
            <li class='n'><a href='http://www.zeusdesign.com.tw/works/12'>下一頁</a></li>
          </ul>
        </article>
        
        <div id='work_aside' class='tags'>
          <a href='' class='m'>1234</a>
            <a href=''>12341234123412341234123412341234123412341234</a>
            <a href=''>1234</a>
            <a href=''>1234</a>
          <a href='' class='m'>123412341234123412341234123412341234123412341234123412341234123412341234123412341234123412341234123412341234</a>
            <a href=''>1234</a>
            <a href=''>1234</a>
            <a href=''>1234</a>

        </div>

      </div>


      <?php echo $_footer;?>
    </div>


  </body>
</html>
