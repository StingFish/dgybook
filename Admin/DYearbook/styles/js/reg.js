$(document).ready(function(){
  $("ul").on('click','li', function(){
    $("ul li.active").removeClass("active");
    $(this).addClass('active');
  });
  $(".reg-section").hide();
  $('a[href^="#"]').on('click',function(event){
  	$('.reg-section').hide();
  	var target = $(this).attr('href');
  	$('.reg-section'+target).toggle();
  });
});
