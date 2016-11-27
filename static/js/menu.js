$(function() {
  $('.js-menu-items>li').each(function (){
    var raw = $(this).data('active-regexp')
    if (!raw) {
      return
    }
    var reg = new RegExp(raw)
    if (reg.test(window.location.pathname)) {
      $(this).addClass('active')
    }
  })

})
