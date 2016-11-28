$(function() {
  $.ajax({
  type: 'POST',
    url: '/mail.php',
  }).done(function( t ) {
    $('.mail-text').text(t).attr('href', 'mailto:' + t)
  }).fail(function(jqXHR, textStatus, errorThrown){
    alert(errorThrown)
  })
})
