<?php require_once('./header.php') ?>

<div id="wrap">
  <div class="box">
    <div class="row">

      <!-- <article class="col&#45;full p12"> -->
      <!--   <h1>利尻山遭難事故について</h1> -->
      <!--   <p>現在部内において事故に関する情報の整理及びその調査を行っています。OB/OGを始めとする関係者の方は -->
      <!--     <a href="http://frate.bbs.fc2.com/">パスワード付き掲示板</a> -->
      <!--     をご覧ください。パスワードを知らない方、部に対し個別に連絡事項のある方は -->
      <!--     <a class="ml">xxxxxxxxxxxxxxxxxxx</a>までメールしてください。 -->
      <!--   </p> -->
      <!-- </article> -->

      <article class="col-full p12">
        <h1>部活動の再開にあたって</h1>
        <p>2016年4月6,7日、利尻山南稜において発生した遭難事故により、フラテ山の会の部員一名が亡くなるという悲惨な結果となりました。彼は山登りに対する情熱を人一倍もっていた人物であり、残念でなりません。部員一同、哀悼の意を表します。</p>

        <p>この事故を受けフラテ山の会はしばらくのあいだ活動を自粛し、事故の検証・反省を行ってまいりましたが、大学への事故報告書の提出をもって、10月22日より活動を再開しております。</p>

        <p>再開までの間、多大なるご助力を賜りました皆様に、改めて感謝を申し上げます。</p>

        <p>今後はこのような痛ましい事故が決して起こることの無いよう、徹底した安全対策を以て活動に臨んでいきたいと思っております。</p>
      </article>


      <article class="col-full p12">
        <h1>掲示板を再開しました</h1>
        <p>活動再開にあたり、閉鎖していた掲示板を再開しました。</p>
        <p>事故報告書に関しましては、部誌を購読されているOB・OGの皆様、および報告書作成においてご協力いただきました皆様に郵送させていただきます。</p>
        <p>その他に郵送を希望される方がおられましたら、団体名、あるいは個人名を明記の上、<a class="ml">xxxxxxxxxxxxxxxxxxx</a></td>へご連絡ください。在庫が無くなり次第、受付を終了させていただきます。</p>
      </article>

      <article class="col-half p12">
        <h1>フラテ山の会とは</h1>
        <p>フラテ山の会は、別名:北海道大学医学部山岳部です。
          軽登山・沢登り・ロッククライミング・山スキーなど、
          四季にわたって精力的に活動しています。例会は月曜日の18:00からで、
          山行は基本的に自由参加です。
          サークルや部活との掛け持ちも可能です。新入生の皆様は是非、
          見学に来てください。</p>
        <table class="table-default bg-white">
          <tr>
            <th class="bg-gray">住所</th>
            <td>
              <p>〒060-0814<br />
              北海道札幌市北区北14条西5丁目<br />
              医学部部室棟</p>
            </td>
          </tr>
          <tr>
            <th class="bg-gray">メールアドレス</th>
            <td>
            <a class="ml">xxxxxxxxxxxxxxxxxxx</a></td>
          </tr>
        </table>
      </article>

      <article class="col-half p12">
        <h1>更新情報</h1>

        <table class="table-default bg-white">
          <tr>
            <th>2016年4月14日</th>
            <td>遭難事故に関するお知らせを追加</td>
          </tr>
          <tr>
            <th>2015年1月17日</th>
            <td>ホームページのドメイン(frate.tk)が切れてしまったので新たに(frate-alpine.club)を取得。</td>
          </tr>
          <tr>
            <th>2014年11月18日</th>
            <td>新ホームページ上の掲示板を一時停止します。</td>
          </tr>
          <tr>
            <th>2014年6月11日</th>
            <td>掲示板の機能とレイアウトを微調整しました。</td>
          </tr>
          <tr>
            <th>2014年4月3日</th>
            <td><a href="http://frate.web.fc2.com/">旧ホームページ</a>から新ホームページに自動転送するようにしました。</td>
          </tr>
          <tr>
            <th>2014年3月15日</th>
            <td>ホームページをリニューアルしました。</td>
          </tr>
        </table>

      </article>

    </div>

  </div>
</div>

<script type="text/javascript">

$(function() {
  $.ajax({
    type: 'POST',
    url: '/mail.php',
  }).done(function( t ) {
    $('.ml').text(t).attr('href', 'mailto:'+t)
  }).fail(function(jqXHR, textStatus, errorThrown){
    alert(errorThrown)
  })
  bg_flip()

  update_bg()

  $('.box').addClass('glass')

})

var bg_files = [
  '/static/img/hero/1.jpg',
  '/static/img/hero/2.jpg',
  '/static/img/hero/3.jpg',
  '/static/img/hero/4.jpg',
  '/static/img/hero/5.jpg'
]

var bg_fade_duration = 2000
var bg_fade_interval = 10000

var bg_imgs = new Array(bg_files.length);
for (i = 0; i < bg_files.length; i++) {
  bg_imgs[i] = null
}
var bg_index = Math.floor( Math.random() * 5 );

var bg_flip_index = false
var bg_front
var bg_back

function bg_file(){
  return bg_files[bg_index]
}
function bg_img(){
  return bg_img[bg_index]
}
function bg_proceed(){
  if (bg_index < bg_files.length-1 ) {
  bg_index = bg_index + 1;
  }else{
    bg_index = 0
  }
  return bg_index
}
function bg_flip(){
  bg_flip_index = ! bg_flip_index
  if(bg_flip_index){
    bg_front = $('#bg-a')
    bg_back = $('#bg-b')
  }else{
    bg_front = $('#bg-b')
    bg_back = $('#bg-a')
  }
  bg_front.addClass('bg-front')
    bg_front.removeClass('bg-back')
    bg_back.addClass('bg-back')
    bg_back.removeClass('bg-front')
}

function update_bg(){
  console.log('update')
  if (bg_img()==null) {
    var img = new Image()
    img.onload=function() {
      bg_img[bg_index] = img
      console.log('loaded '+img.src)
      setTimeout(update_bg, 10);
    }
    img.src = bg_file()
      return
  }


  bg_back.attr('src', bg_img().src)
    bg_back.data('orgWidth', bg_img().width)
    bg_back.data('orgHeight', bg_img().height)
    adjust_bg(bg_back)

    bg_back.show()
    bg_front.fadeOut(
    bg_fade_duration,
    function(){
      console.log('fade done')
      bg_flip()
      bg_proceed()
      setTimeout(update_bg, bg_fade_interval);
    }
  )
}


function adjust_bg(img){
  var body = $("body")
  var body_w = body.width()
  var body_h = body.height()
  var img_w = img.data('orgWidth')
  var img_h = img.data('orgHeight')
  if ( body_w/body_h > img_w/img_h){
    var h = body_w * img_h / img_w
    img.css({width: body_w, height: h, top: -(h - body_h)/2, left: 0 })
  }else{
    var w = body_h * img_w / img_h
    img.css({width: w, height: body_h, top: 0, left: -(w - body_w)/2})
  }
}

function resize(){

  adjust_bg(bg_front)
  adjust_bg(bg_back)

}

var timer = false;
$(window).resize(function() {
  if (timer !== false) {
  clearTimeout(timer);
  }
  timer = setTimeout(resize, 200);
});

</script>

<?php require_once('./footer.php') ?>
