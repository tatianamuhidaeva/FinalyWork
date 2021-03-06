$(document).ready(function (){
  $('form .error').css('visibility', 'hidden');
                        
  $('.btn-submit').on('click', function (event) {
    event.preventDefault();
    var flag = true;
    var form = $(this).closest('.form-submit');
    var name = form.find(".input-name").val(),
        phone = form.find(".input-tel").val();
        email = form.find(".input-email").val();
    var nameTrim = name.replace(/\s/g,'');
    var emailTrim = email.replace(/\s/g,'');
    var errorNameL = form.find('.error-name');
    var errorPhoneL = form.find('.error-phone');
    var errorEmailL = form.find('.error-email');
    //проверка телефона
    if (phone === ""){
      errorPhoneL.text('Пожалуйста, введите номер');
      errorPhoneL.css('visibility', 'visible');
      flag = false;
    } else if (phone.match(/\+7\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}/) === null){
      errorPhoneL.text('Введите номер в формате +7(999)887-76-66');
      errorPhoneL.css('visibility', 'visible');
      flag = false;
    } else {
      errorPhoneL.css('visibility', 'hidden');
    }
    if (nameTrim === ""){
      errorNameL.text('Пожалуйста, введите имя');
      errorNameL.css('visibility', 'visible');
      flag = false;      
    } else if (nameTrim === null){
      errorNameL.text('Разрешены только буквы, цифры и пробелы');
      errorNameL.css('visibility', 'visible');
      flag = false;    
    } else if (nameTrim.length < 3){      
      errorNameL.text('В имени должно быть больше двух букв');
      errorNameL.css('visibility', 'visible');
      flag = false;    
    } else {
      errorNameL.css('visibility', 'hidden');
    }
    if (emailTrim === ""){
      errorEmailL.text('Пожалуйста, введите email');
      errorEmailL.css('visibility', 'visible');
      flag = false;
    } else if (emailTrim.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/) === null){
      errorEmailL.text('Введите email в формате my-mail@email.com');
      errorEmailL.css('visibility', 'visible');
      flag = false;
    } else {
      errorEmailL.css('visibility', 'hidden');
    }
    if (flag){
      /* Если поле .is-callback не пустое, то это Обратная связь, иначе - это Заявка */
      // console.log(form.find('.is-callback').val());
      if (form.find('.is-callback').val()){
        // console.log('Яндекс-метрика. Цель ОТПРАВКА Обратной связи');
        yaCounter51608246.reachGoal('callback');  //Яндекс-метрика. Цель ОТПРАВКА Обратной связи
      } else{
        // console.log('Яндекс-метрика. Цель ОТПРАВКА Заявки');
        yaCounter51608246.reachGoal('order');  //Яндекс-метрика. Цель ОТПРАВКА Заявки
      }
      $.ajax({
        type: "POST",
        url: "./mailer/smart.php",
        data: form.serialize()
      }).done(function () {
        form.find(".form-submit input").val("");
        form.find(".form-submit textarea").val("");
        $('.modal-success').toggleClass('flex');
        $('.feedback-index').removeClass('flex');
        form.trigger("reset");
      });
      errorNameL.css('visibility', 'hidden');
      errorPhoneL.css('visibility', 'hidden');
      errorEmailL.css('visibility', 'hidden');
      // errorPhoneL.css('display', 'none');
    }
    return false;
  });
});