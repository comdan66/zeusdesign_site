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

      <div id='contact'>
        <header class='header'>
          <h1>聯絡我們</h1>
        </header>

        <div id='msg' class='i'></div>

        <aside id='contacts'>
          <p>有設計相關問題嗎?</p>
          <p>歡迎聯繫我們。</p>
          <br/>

          <h2>公司地址</h2>
          <p>235 新北市中和區興南路一段85巷43號7樓</p>
          <p>7F., No.43, Ln. 85, Sec. 1, Xingnan Rd., Zhonghe Dist., New Taipei City 235, Taiwan(R.O.C.)</p>
          <br/>

          <h2>聯絡電話</h2>
          <p>TEL 02 2941 6737</p>
          <p>FAX 02 2941 6737</p>
          <br/>

          <h2>營業時間</h2>
          <p>週ㄧ 至 週五</p>
          <p>10:00 ~ 18:00</p>
        </aside>

        <section id='form'>
          <div>
            <h2>聯絡我們</h2>

            <label for='name'>稱呼：</label>
            <input type='text' id='name' name='name' class='required' maxLength='100' value='<?php echo isset ($posts['name']) ? $posts['name'] : '';?>' placeholder='請輸入您的稱呼..'<?php echo isset ($_flash_message) && $_flash_message ? '' : ' autofocus';?> />

            <label for='email'>E-Mail：</label>
            <input type='text' id='email' name='email' class='required email' maxLength='200' value='<?php echo isset ($posts['email']) ? $posts['email'] : '';?>' placeholder='請輸入您的電子郵件信箱..' />

            <label for='message'>留言內容：</label>
            <textarea id='message' name='message' class='required' class='autosize' placeholder='請輸入您的建議或意見..' rows='6'><?php echo isset ($posts['message']) ? $posts['message'] : '';?></textarea>

            <button type='button' id='submit_contact'>送出</button>
          </div>
        </section>
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
