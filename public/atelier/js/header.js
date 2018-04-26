$(document).ready(function(){
    $('.btn_edit').click(function(){
        if ($(this).parents('.div_form').hasClass('edit')) {
            $(this).parents('.div_form').removeClass('edit');
        } else {
            $(this).parents('.div_form').addClass('edit');
        }

    });
    $('.btn_cancel').click(function(){
        if ($(this).parents('.div_form').hasClass('edit')) {
            $(this).parents('.div_form').removeClass('edit');
        } else {
            $(this).parents('.div_form').addClass('edit');
        }

    });

});