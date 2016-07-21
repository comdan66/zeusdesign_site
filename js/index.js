/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  window.vars.$bannerFigures = $('#banner figure');

  if (window.vars.$bannerFigures.length) {
    window.vars.$bannerFigures.find ('> div > a').click (function () {
      var $f = $(this).parents ('figure');
      if($(this).is (':last-child')) {
        var $n = $f.is (':last-child') ? window.vars.$bannerFigures.first () : $f.next ();
        $n.addClass ('s').siblings ().removeClass ('s');
      } else {
        var $p = $f.is (':first-child') ? window.vars.$bannerFigures.last () : $f.prev ();
        $p.addClass ('s').siblings ().removeClass ('s');
      }}).last ().click ();

    setInterval (function (){ window.vars.$bannerFigures.filter ('.s').find ('figcaption > a:last-child').click (); }, 7000);
  }
});