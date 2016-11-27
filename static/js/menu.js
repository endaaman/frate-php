// アクティブなメニューを強調表示にする
$(function() {

  $('.js-menu-items>li').each(function (){
    // data-active-regexp を取得
    var raw = $(this).data('active-regexp')

    // data-active-regexp が指定されてなければスキップ
    if (!raw) {
      return
    }

    // 正規表現にコンパイル
    var reg = new RegExp(raw)

    // 現在のページのURLにマッチするなら強調表示にする（activeクラスを付与する）
    if (reg.test(window.location.pathname)) {
      $(this).addClass('active')
    }
  })

})
