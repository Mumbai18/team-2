$('.toggle').on('click', function() {
  $('.custom-container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.custom-container').stop().removeClass('active');
});