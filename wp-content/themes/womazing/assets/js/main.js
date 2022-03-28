    // Слайдер наверху
$('.slider').slick({
    dots: true,
    arrows: false
});
   // Слайдер снизу
$('.club__slider').slick({
    dots: true,
    arrows: true,
    autoplay: true,
});
    // Sticky header
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("upper");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

 // Hamburger menu
$('.hamburger').on('click', function () {
  $('.main-menu').toggle();
})



// Модальное окно
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Второе модальное
// Get the modal
var modala = document.getElementById("myModala");

// Get the button that opens the modal
var button1 = document.getElementById("button1");

// Get the <span> element that closes the modal
var spana = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
button1.onclick = function() {
  modala.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spana.onclick = function() {
  modala.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modala) {
    modala.style.display = "none";
  }
}
  // Карта
ymaps.ready(init);

function init(){
  // Создание карты.
  var myMap = new ymaps.Map("map", {
      // Координаты центра карты.
      // Порядок по умолчанию: «широта, долгота».
      // Чтобы не определять координаты центра карты вручную,
      // воспользуйтесь инструментом Определение координат.
      center: [55.688067, 37.531966],
      // Уровень масштабирования. Допустимые значения:
      // от 0 (весь мир) до 19.
      zoom: 15,
      controls : ['zoomControl']
  });
  var myPlacemark = new ymaps.Placemark([55.688067,37.531966],{} , {
    iconImageSize : [32, 40]
})
}




// Отправка
$(document).ready(function() {
  $('[data-submit]').on('click', function(e) {
      e.preventDefault();
      $(this).parent('form').submit();
  })
  $.validator.addMethod(
      "regex",
      function(value, element, regexp) {
          var re = new RegExp(regexp);
          return this.optional(element) || re.test(value);
      },
      "Please check your input."
  );

  // Функция валидации и вывода сообщений
  $('.form-book').validate({
    rules : {
      fullName : {
        required : true,
        regex : "[A-Za-z]{1,32}"
      },
      allEmail : {
        required : true,
        email: true
      },
      phoneNumber : {
        required : true,
        digits : true,
        minlength : 10,
        maxlength : 11
      }
    },
    messages : {
      fullName : 'Введите имя правильно',
      allEmail : 'Введите адрес Email правильно',
      phoneNumber: 'Введите номер телефона верно'
    }
  })
  $('.form-validation').validate({
    rules : {
      fullName : {
        required : true,
        regex : "[A-Za-z]{1,32}"
      },
      allEmail : {
        required : true,
        email: true
      },
      phoneNumber : {
        required : true,
        digits : true,
        minlength : 10,
        maxlength : 11
      }
    },
    messages : {
      fullName : 'Введите имя правильно',
      allEmail : 'Введите адрес Email правильно',
      phoneNumber: 'Введите номер телефона верно'
    },

          submitHandler: function(form) {
              $('#preloader-active').fadeIn();
              var $form = $(form);
              var $formId = $(form).attr('id');
              switch ($formId) {
                  case 'form-book':
                      $.ajax({
                              type: 'POST',
                              url: $form.attr('action'),
                              data: $form.serialize(),
                          })
                      .done(function() {
                            console.log('Success');
                      })
                      .fail(function() {
                            console.log('Fail');
                      })  
                      .always(function() {
                        console.log('Always');
                        setTimeout(function() {
                            $('#message-for-user').fadeIn();
                            $form.trigger('reset');
                        }, 1100);
                        $('#message-for-user').on('click', function(e) {
                            $(this).fadeOut();
                        });

                    });
                      break;
                  case 'form-validation':
                      $.ajax({
                              type: 'POST',
                              url: $form.attr('action'),
                              data: $form.serialize()
                          })
                          .done(function() {
                              console.log('Success');
                          })
                          .fail(function() {
                              console.log('Fail');
                          })
                          .always(function() {
                            setTimeout( function() {
                              $form.trigger('reset');

                            }, 1000);
                            setTimeout(function() {
                              $('#preloader-active').fadeOut();
                            }, 1400)
                          })
                        break; 
              }
              return false;
          }
      })
       // Запускаем механизм валидации форм, если у них есть класс .js-form
  $('.js-form').each(function() {
  });
  
});