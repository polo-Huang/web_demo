$(document).ready(function(){
    //通过ajaxForm获取提交成功后的数据进行以下操作
    var form = $('form[name=form_info]').ajaxForm({
        //点击提交后关闭按钮提示用户已经在发送方，防止重复提交
        beforeSend: function(){
            $('.btn_submit').addClass('hidden');
            $('.btn_submit').addClass('disabled');
            $('.btn_upload').removeClass('hidden');
        },
        success:function(data){
            var data = JSON.parse(data);//将data转为JSON数据
            console.log(data);
            if (data.success) {
                //正确操作
                location.reload();
            } else {
                //错误操作
                $(".error_warning").html("");
                $(".form-group").removeClass('has-error');
                for (var key in data.error) {
                    console.log(key);
                    $('input[name='+key+']').parent().addClass('has-error');
                    var html = '';
                    html += '<span class="help-block">'
                    html += '<strong>'+data.error[key][0]+'</strong>'
                    html += '</span>'
                    $('input[name='+key+']').parent().children('.error_warning').html(html);
                }
                //提交失败恢复按钮
                $('.btn_submit').removeClass('hidden');
                $('.btn_submit').removeClass('disabled');
                $('.btn_upload').addClass('hidden');
            }
        },
        //完成后恢复按钮
        complete: function() {
            $('.btn_submit').removeClass('hidden');
            $('.btn_submit').removeClass('disabled');
            $('.btn_upload').addClass('hidden');
        }
    });
    //通过ajaxForm获取提交成功后的数据进行以下操作
    var form = $('form[name=form_picture]').ajaxForm({
        //点击提交后关闭按钮提示用户已经在发送方，防止重复提交
        beforeSend: function(){
            $('.btn_submit').addClass('hidden');
            $('.btn_submit').addClass('disabled');
            $('.btn_upload').removeClass('hidden');
        },
        success:function(data){
            var data = JSON.parse(data);//将data转为JSON数据
            console.log(data);
            if (data.success) {
                //正确操作
                location.reload();
            } else {
                //错误操作
                $(".error_warning").html("");
                $(".form-group").removeClass('has-error');
                for (var key in data.error) {
                    console.log(key);
                    $('input[name='+key+']').parent().addClass('has-error');
                    var html = '';
                    html += '<span class="help-block">'
                    html += '<strong>'+data.error[key][0]+'</strong>'
                    html += '</span>'
                    $('input[name='+key+']').parent().children('.error_warning').html(html);
                }
                //提交失败恢复按钮
                $('.btn_submit').removeClass('hidden');
                $('.btn_submit').removeClass('disabled');
                $('.btn_upload').addClass('hidden');
            }
        },
        //完成后恢复按钮
        complete: function() {
            $('.btn_submit').removeClass('hidden');
            $('.btn_submit').removeClass('disabled');
            $('.btn_upload').addClass('hidden');
        }
    });
});