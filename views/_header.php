<header id='header'>
  <a href='<?php echo PAGE_URL_INDEX;?>'>
    <img src='<?php echo URL_IMG_LOGO . 'header.png';?>' alt='<?php echo MAIN_TITLE;?>'>
  </a>

  <div>
    <a href='<?php echo PAGE_URL_INDEX;?>'<?php echo PAGE_URL_INDEX == $active ? ' class="a"' : '';?>>Home</a>
    <a href='<?php echo URL_WORKS . 'index' . HTML;?>'<?php echo URL_WORKS == $active ? ' class="a"' : '';?>>設計作品</a>
    <a href='<?php echo URL_ARTICLES . 'index' . HTML;?>'<?php echo URL_ARTICLES == $active ? ' class="a"' : '';?>>知識文章</a>
    <a href='<?php echo PAGE_URL_ABOUT;?>'<?php echo PAGE_URL_ABOUT == $active ? ' class="a"' : '';?>>關於宙思</a>
    <a href='<?php echo PAGE_URL_CONTACT;?>'<?php echo PAGE_URL_CONTACT == $active ? ' class="a"' : '';?>>聯絡我們</a>
  </div>
</header>