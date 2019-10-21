$(document).ready(function(){

  $('.phone').mask('8 (999) 999-99-99');
  $('.phone').mask('8 (999) 999-99-99',{autoclear: true});

  $('#brif-form').validate({
    focusCleanup: true,
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      phone: {
        required: true
      },
      email: {
        required: true,
        email: true
      }
    },
    errorElement: "em",
    errorClass: "invalid",
    messages: {
      phone: {
        required: "Введите свой номер телефона",
      },
      username: {
        required: "Поле обязательно для заполнения",
        minlength: jQuery.validator.format(" Имя не может быть короче 3 символов"),
        maxlength: jQuery.validator.format(" Имя должно быть не больше 15ти символов"),
      },
      email: {
        required: "Поле обязательно для заполнения",
        email: " Введите свой e-mail"
      }
    },
  });

  $('#modal-wrap').validate({
    focusCleanup: true,
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      phone: {
        required: true
      }
    },
    errorElement: "em",
    errorClass: "invalid",
    messages: {
      phone: {
        required: "Введите свой номер телефона",
      },
      username: {
        required: "Поле обязательно для заполнения",
        minlength: jQuery.validator.format(" Имя не может быть короче 3 символов"),
        maxlength: jQuery.validator.format(" Имя должно быть не больше 15ти символов"),
      },
    },
  });

  $('#offer__form').validate({
    focusCleanup: true,
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      phone: {
        required: true
      }
    },
    errorElement: "em",
    errorClass: "invalid",
    messages: {
      phone: {
        required: "Введите свой номер телефона",
      },
      username: {
        required: "Поле обязательно для заполнения",
        minlength: jQuery.validator.format(" Имя не может быть короче 3 символов"),
        maxlength: jQuery.validator.format(" Имя должно быть не больше 15ти символов"),
      },
    },
  });

  $('#offer__form').on('submit', function name(event){

    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(),
      success: function (response) {
        $('#offer__form')[0].reset();
        $('#offer__form').append("<p class='offer-groupresponse'>  Ваша заявка принята  </p>");
      },
      error: function( jqXHR, textStatus, errorThrown ) {
        console.log(jqXHR + " " + textStatus);
       },
      });
    });

    
    
    $(window).scroll(function () {
      var isAddedMap = false;
      var el = $('.map');
      
      if ($(this).scrollTop() > el.offset().top - 1000) {
        if(isAddedMap) return;
        isAddedMap = true;

        var script = document.createElement('script');

        script.src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A114d3eb4d1680b26a069e6412a7102973f0bf72f6c99f019d48be4101695e679&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false";
        el.append(script);
      };
    });
 });
