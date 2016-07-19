/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  $('#works section > a').imgLiquid ({verticalAlign: 'center'});
  var $figures = $('#banner figure').imgLiquid ({verticalAlign: 'center'});

  $figures.find ('> div > a').click (function () {
    var $f = $(this).parents ('figure');
    if ($(this).is (':last-child')) {
      var $n = $f.is (':last-child') ? $figures.first () : $f.next ();
      $n.addClass ('s').siblings ().removeClass ('s');
    } else {
      var $p = $f.is (':first-child') ? $figures.last () : $f.prev ();
      $p.addClass ('s').siblings ().removeClass ('s');
    }
  });

  $figures.last ().find ('> div > a:last-child').click ();

  setInterval (function () {
    $figures.filter ('.s').find ('figcaption > a:last-child').click ();
  }, 7000);
});