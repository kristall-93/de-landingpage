// При нажатии на кнопку SUBMIT появляется сообщение об успешной отправке данных:

$('.btn_send-form').on('click', function (e) {
    e.preventDefault();
    $('.result_form-modal').slideToggle();  
});  