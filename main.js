function formReset() {
    $('div.container-fluid').attr('data-show', "");
    $('form').find("input.form-control, textarea").val("");
    $(':radio[value=0]').prop('checked', true);
    $(':checkbox').prop('checked', false);
    $('option:selected').removeAttr("selected");
    $('input[type=submit]').val('Подать объявление');
    $('input[type=submit]').attr('formaction', 'index.php');
    $('.cancel').hide();
}

function showExp(exp) {
    $('div.container-fluid').attr('data-show', exp.id);
    var show = $('div.container-fluid').attr('data-show');
    if (exp.private == 0) {
        $(':radio[value=0]').prop('checked', true);
    } else {
        $(':radio[value=1]').prop('checked', true);
    }
    if (exp.allow_mails == "checked") {
        $(':checkbox').prop('checked', true);
    } else {
        $(':checkbox').prop('checked', false);
    }
    $('option[value=' + exp.location_id + ']').attr("selected", "selected");
    if (exp.category_id !== "") {
        $('option[value=' + exp.category_id + ']').attr("selected", "selected");
    }
    $('.s_name').val(exp.seller_name);
    $('.email').val(exp.email);
    $('.phone').val(exp.phone);
    $('.title').val(exp.title);
    $('.des').val(exp.des);
    $('.price').val(exp.price);
    $('input[type=submit]').val('Изменить объявление');
    $('input[type=submit]').attr('formaction', 'index.php?id=' + show);
    $('.cancel').show();
}

$(document).ready(function () {
    $('a.cancel').on('click', function(){formReset();});   
    
    $('a.show').on('click', function () {
        var tr = $(this).closest('tr');
        var id = tr.attr('data-id');
        $.getJSON('ajax.php?show=' + id,
                function (response) {
                    formReset();
                    showExp(response);
                }
        );

    });

    $('a.delete').on('click', function () {
        var tr = $(this).closest('tr');
        var id = tr.attr('data-id');
        var show = $('div.container-fluid').attr('data-show');
        var title = tr.children('td:first').html();

        $.getJSON('ajax.php?delete=' + id,
                function (response) {
                    if (response.status == 'success') {
                        tr.fadeOut('slow', function () {
                            if (id == show) {
                                formReset();
                                show = '';
                            }
                            ;
                            $(this).remove();
                            $('#container').removeClass('alert-danger').addClass('alert-success');
                            if ($('tbody tr')[0] == null) {
                                var addMessage = "<br>На доске больше нет объявлений.";
                            } else {
                                var addMessage = "";
                            }
                            ;
                            $('#container-info').html(response.message + addMessage);
                            $('#container').fadeIn('slow');
                        })
                    } else if (response.status == 'error') {
                        $('#container').removeClass('alert-success').addClass('alert-danger');
                        $('#container-info').html(response.message);
                        $('#container').fadeIn('slow');
                    }
                }
        );
    });
})