$(document).ready(function(){
//$('.adm-container').hide();
/*$('.sidenav').on('click','ul li',function functionName() {

}ction(){
  $this.addClass('active').siblings().removeClass('active')
}));*/
  $("ul").on('click','li', function(){
    $("ul li.active").removeClass("active");
    $(this).addClass('active');
  });
  $(".adm-section").hide();
  $('a[href^="#"]').on('click',function(event){
  	$('.adm-section').hide();
  	var target = $(this).attr('href');
  	$('.adm-section'+target).toggle();
  });
});
