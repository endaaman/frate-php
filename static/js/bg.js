// 背景の画像をフェードさせながら切り替えている処理
// 2012年頃書かれたもので覚えてないのでコメントによる解説なし。がんばれ


// ↓を編集すれば表示する画像を変えられる
var bg_files = [
  '/static/img/hero/1.jpg',
  '/static/img/hero/2.jpg',
  '/static/img/hero/3.jpg',
  '/static/img/hero/4.jpg',
  '/static/img/hero/5.jpg'
]


var bg_fade_duration = 2000
var bg_fade_interval = 10000

var bg_imgs = new Array(bg_files.length)
for (i = 0; i < bg_files.length; i++) {
  bg_imgs[i] = null
}
var bg_index = Math.floor( Math.random() * 5 )

var bg_flip_index = false
var bg_front
var bg_back


$(function() {
  bg_flip()
  update_bg()
})

function bg_file(){
  return bg_files[bg_index]
}

function bg_img(){
  return bg_img[bg_index]
}

function bg_proceed(){
  if (bg_index < bg_files.length-1 ) {
    bg_index = bg_index + 1
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
  if (bg_img() == null) {
    var img = new Image()
      img.onload = function() {
        bg_img[bg_index] = img
        setTimeout(update_bg, 10)
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
      bg_flip()
      bg_proceed()
      setTimeout(update_bg, bg_fade_interval)
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

var timer = false
$(window).resize(function() {
  if (timer !== false) {
    clearTimeout(timer)
  }
  timer = setTimeout(resize, 200)
})
