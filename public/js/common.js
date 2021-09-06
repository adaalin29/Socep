$(document).ready(function () {


  $('.invest-menu').hover(function(){
    $('linie').css('margin-left','39.5%');
  });
  $('.invest-menu').mouseleave(function(){
    $('linie').css('margin-left','');
  });


  if($('div.arhiva-element').length > 0){
    $('.arhiva-element').first().trigger('click');
  }
  if($('div.categorie-element').length > 0){
    $('.categorie-element').first().trigger('click');
  }
  $("#hover-element").mouseover(function(){
    $(".invest-menu").show();
  });
  $(".invest-menu").mouseleave(function(){
    $(this).hide();
  });
  $(".fara-hover").mouseover(function(){
    $(".invest-menu").hide();
    if(getPathUrlParameter() === '/'){
      $("linie").css('visibility', 'visible');
    }
  });
  $(".fara-hover").mouseleave(function(){
    if(getPathUrlParameter() === '/'){
      $("linie").css('visibility', 'hidden');
    }
  });
  function getPathUrlParameter(){
    var getUrl = window.location;
    return getUrl.pathname
  }
  if(navigator.userAgent.match(/firefox/i) != null ){
    $("#form-cv").addClass("no-align");
    console.log("da");
  }
  adunariSlides = 7;
  var jobsSlides = 4;
  var slidesWidth = 8;
   if($(window).width()<=1366){
     jobsSlides = 3;
     adunariSlides = 5;
   }
  var slidesUtilaje =4;
  if($(window).width()<=1366)
  var slidesUtilaje =3;
  if($(window).width()<=1024){
    jobsSlides = 2;
    adunariSlides = 4;
    slidesUtilaje =2;
    $('.news-center').prepend($('.news-button'));
    $('.news-button').css("top", "0px");
    $('.news-button').css("right", "10px");
    slidesWidth = 5;
  }

  if($(window).width()<=768){
    jobsSlides = 1;
    slidesUtilaje =1;
    adunariSlides = 2;
  }
  if($(window).width()<=480){
    slidesWidth = 3;
    
    $('.news-button').css("top", "-40px");
  }


  
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: adunariSlides,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  
  var swiperUtilaje = new Swiper('.swiper-container.swiper-utilaje-container', {
      slidesPerView: slidesUtilaje,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination.utilaje-pagination',
        clickable: true,
      },
    });

    var swiper2 = new Swiper('.jobs-swiper', {
      slidesPerView: jobsSlides,
      spaceBetween: 30,
    });
  
    $(window).scroll(function() {
      if($(window).scrollTop() > 0) {
          $(".scroll-up").css("display","block");
      } else {
          $(".scroll-up").css("display","none");
      }
  }); 

  $(".scroll-up").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  
  
//   NAV PART
 
  

  
  
   var popupkey = $('.cookie-banner-container').attr('tm-popup-key');
console.log(popupkey);
  if (!Cookies.get(popupkey)) {
      $('.cookie-banner-container').addClass('is-active');
    }

  $('.cookie-banner-confirm').on('click', function () {
      $('.cookie-banner-container').removeClass('is-active');
      Cookies.set($('.cookie-banner-container').attr('tm-popup-key'), Date.now(), { expires: 365 });
  });
  $('.GDPR-popup-background').on('click', function () {
      $('.GDPR-popup-container').removeClass('is-active');
  });
  $('.GDPR-popup-confirm').on('click', function () {
      $('.GDPR-popup-container').removeClass('is-active');
      Cookies.set($('.GDPR-popup-container').attr('tm-popup-key'), Date.now(), { expires: 365 });
      // window.location.href = 'confidentialitate/';
  });

  $('.GDPR-popup-confirm-multumiri').on('click', function () {
      $('.GDPR-popup-container-multumiri').removeClass('is-active');
      Cookies.set($('.GDPR-popup-container-multumiri').attr('tm-popup-key'), Date.now(), { expires: 365 });
  });

  
	$(".inline").fancybox({
		'hideOnContentClick': true
	});


  $("a.fancybox-cv").fancybox({
    touch: false,
		hideOnContentClick: true,
    afterShow: function (fancy) {
      $('#form-cv-jobid').val($(fancy.$trigger[0]).attr('data-job-id'));
    },
	});
  
  $(".titleInside").css("bottom", '0');
  $(".overFirst .description").css("opacity", '1');
  
  $(".btn-upload").click(function () {
     $('.overlay-cv').css('display', 'flex');
     $('.overlay-cv').hide().fadeIn();
  });

  $('.de-acord').click(function(){
   $('#myFileSelected').trigger('click');
   $('#myFileSelected').change(function () {
      var nume_fisier = $('#myFileSelected').val();
      nume_fisier_modificat = nume_fisier.split("\\");
      $('.overlay-cv').fadeOut();
      if (nume_fisier) {
          $("#file-choosen").text(nume_fisier_modificat[nume_fisier_modificat.length - 1]);
      }
      else {
          $("#file-choosen").text("No file choosen");
      }
  });
  });
  
  $('.cancel-pop-up').click(function(){
     $('.overlay-cv').fadeOut();
//      $('.overlay-cv').css('display', 'none');
    
  });
  
	$(".titleInside").css("bottom", '0');
	$(".overFirst .description").css("opacity", '1');

	$(".next").click(function () {
		console.log("da");
		$('html,body').animate({ scrollTop: $(this).parent().next().offset().top }, 'slow');
	});
});