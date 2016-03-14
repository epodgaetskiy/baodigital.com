var controls = document.querySelectorAll(".slider-control img");
var slide = document.querySelectorAll(".slide");
var controlsWorks = document.querySelectorAll(".work-slider i");
var slideWorks = document.querySelectorAll(".work-slide");
var form = document.querySelector("form");
var my_name = form.querySelector("[name=my-name]");
var email = form.querySelector("[name=email]");
var mobile = form.querySelector("[name=mobile]");
var text = form.querySelector("[name=text-mail]");
var storage = localStorage.getItem("my_name");

//animate.css
jQuery(document).ready(function() {
  jQuery('.tagline').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.tagline-img').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.advantages').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInUpBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.services-h').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInDownBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-1').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-2').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-3').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-4').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-5').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-6').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-7').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.serv-8').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.works').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInUpBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.send-form-animate').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInUpBig',
    offset: 100,
    classToRemove : 'hideme',
  });
  jQuery('.our_contact').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig',
    offset: 100,
    classToRemove : 'hideme'
  });
  jQuery('.contact-img').addClass("hideme").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig',
    offset: 100,
    classToRemove : 'hideme'
  });
});

//head_contact animate
function AnimateContactHeaderOn() { 
  $('.mobile_header')
    .addClass('animated')
    .addClass('wobble');
  $('.email_header')
    .addClass('animated')
    .addClass('tada');
};
function AnimateContactHeaderOff() { 
  $('.mobile_header')
    .removeClass('animated')
    .removeClass('wobble');
  $('.email_header')
    .removeClass('animated')
    .removeClass('tada');
};
setInterval(AnimateContactHeaderOn, 10000);
setInterval(AnimateContactHeaderOff, 11000);
//Slider for Advantages
//auto slide show
var k = 0;
var timeSlideCircle = 12000;
function SlideAutoAdvantages() { 
  if (k < 4) {
    controls[k].classList.remove('active-control');
    $('#slideshowAdvantages > .active')
      .fadeOut(0)
      .removeClass('active')
      .next()
      .addClass('active')
      .fadeIn(0)
      .addClass('animated')
      .addClass('slideInLeft');
    k = k + 1;
    controls[k].classList.add('active-control');
  } else 
  { 
    controls[k].classList.remove('active-control');
    $('#slideshowAdvantages > .active')
      .fadeOut(0)
      .removeClass('active');
    $('#slideshowAdvantages > div:first')
      .addClass('active')
      .fadeIn(0)
      .addClass('animated')
      .addClass('slideInLeft');
    k = 0;
    controls[k].classList.add('active-control');
  }
};

OnSlideShowAdvantages = setInterval(SlideAutoAdvantages, timeSlideCircle);

for (var i = 0; i < controls.length; i++) {
  n = i;
  clickControl(controls[i], n);
}

function showSlide(control) {
  for (var i = 0; i < slide.length; i++) {
    slide[i].classList.remove('active');
    slide[i].style.display = "none";
    controls[i].classList.remove('active-control');
  }
  slide[control].classList.add('active');
  controls[control].classList.add('active-control');
  slide[control].style.display = "block";
}

function clickControl(control, n) {
  control.addEventListener('click', function() {
    clearInterval(OnSlideShowAdvantages);
    showSlide(n);
    k = n;
    OnSlideShowAdvantages = setInterval(SlideAutoAdvantages, timeSlideCircle);
  });
}

showSlide(0);

//Slider for Works
//auto slide show
var w = 0;
var timeSlideWorks = 10000;
function SlideAutoWorks() { 
  if (w < 2) {
    $('#slideshowWorks > .active-work')
      .fadeOut(0)
      .removeClass('active-work')
      .next()
      .addClass('active-work')
      .fadeIn(0)
      .addClass('animated')
      .addClass('bounceInLeft');
    controlsWorks[w].classList.remove('active-slider');
    controlsWorks[w].classList.add('slider-color');
    w = w + 1;
    controlsWorks[w].classList.add('active-slider');
  } else 
  {
    $('#slideshowWorks > .active-work')
      .fadeOut(0)
      .removeClass('active-work');
    $('#slideshowWorks > div:first')
      .addClass('active-work')
      .fadeIn(0)
      .addClass('animated')
      .addClass('bounceInLeft');
    controlsWorks[w].classList.remove('active-slider');
    controlsWorks[w].classList.add('slider-color');
    w = 0;
    controlsWorks[w].classList.remove('slider-color');
    controlsWorks[w].classList.add('active-slider');
  }
};

OnSlideShowWorks = setInterval(SlideAutoWorks, timeSlideWorks);
for (var i = 0; i < controlsWorks.length; i++) {
  n = i;
  clickControlWork(controlsWorks[i], n);
}

function showSlideWorks(control) {
    for (var i = 0; i < slideWorks.length; i++) {
      slideWorks[i].classList.remove('active-work');
      slideWorks[i].style.display = "none";
      controlsWorks[i].classList.remove('active-slider');
      controlsWorks[i].classList.add('slider-color');
    }
    slideWorks[control].classList.add('active-work');
    slideWorks[control].style.display = "block";
    controlsWorks[control].classList.remove('slider-color');
    controlsWorks[control].classList.add('active-slider');
}

function clickControlWork(control, n) {
    control.addEventListener('click', function() {
      clearInterval(OnSlideShowWorks);
      showSlideWorks(n);
      w = n;
      OnSlideShowWorks = setInterval(SlideAutoWorks, timeSlideWorks);
    });
}

showSlideWorks(0);

//validate form
// send to email form

$(document).ready(function() {

  $("#form").submit(function() {
    $.ajax({
      type: "POST",
      url: "/wp-content/themes/baoru/mail.php",
      data: $(this).serialize()
    }).done(function() {
      $(this).find("input").val("");
      alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
      $("#form").trigger("reset");
    });
    return false;
  });
  
});

//плавные переходы по якорным ссылкам
$(document).ready(function(){

  $("#smooth").on("click","a", function (event) {

  //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();
    //забираем идентификатор блока с атрибута href
    var id  = $(this).attr("href"),
    //узнаем высоту от начала страницы до блока на который ссылается якорь
      top = $(id).offset().top;
     //анимируем переход на расстояние - top за 1500 мс
      $("body,html").animate({scrollTop: top}, 1500);
  });

});

//плавные переходы по якорным ссылкам
$(document).ready(function(){

  $("#smooth-mobile").on("click","a", function (event) {

  //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();
    //забираем идентификатор блока с атрибута href
    var id  = $(this).attr("href"),
    //узнаем высоту от начала страницы до блока на который ссылается якорь
      top = $(id).offset().top;
     //анимируем переход на расстояние - top за 1500 мс
      $("body,html").animate({scrollTop: top}, 1500);
  });

});

//плавные переходы по якорным ссылкам
$(document).ready(function(){

  $("#smoothForm").on("click","a", function (event) {
  //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();


    //забираем идентификатор блока с атрибута href
    var id  = $(this).attr("href"),
    //узнаем высоту от начала страницы до блока на который ссылается якорь
      top = $(id).offset().top;
     //анимируем переход на расстояние - top за 1500 мс
      $("body,html").animate({scrollTop: top}, 1500);
  });

});

//плавные переходы по якорным ссылкам
$(document).ready(function(){

  $("#services").on("click","a", function (event) {

  //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();
    //забираем идентификатор блока с атрибута href
    var id  = $(this).attr("href"),
    //узнаем высоту от начала страницы до блока на который ссылается якорь
      top = $(id).offset().top;
     //анимируем переход на расстояние - top за 1500 мс
      $("body,html").animate({scrollTop: top}, 1500);
  });

});

//show menu-mobile
$(document).ready(function(){
  $('.menu-btn').on("click", function(event) {
      event.preventDefault();
      $('.menu-visible').toggle();
      $('.menu-visible').addClass('animated');
      $('.menu-visible').addClass('fadeInDown');
  });
});









