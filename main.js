function formReset() {
    $('div.container-fluid').attr('data-show', "");
    $('form .clear_form').each(function () {
        $(this).val('');
    });
    $('form input[name=price]').val(0);
    $('form input.set_form, select.set_form').val(['0', 'private', '', '641780']);
    $('input[type=submit]').val('Подать объявление');
    $('input[type=submit]').attr('formaction', 'index.php');
}

function showExp(exp) {
    $('div.container-fluid').attr('data-show', exp.id);
    var show = $('div.container-fluid').attr('data-show');
    $('form .clear_form').each(function () {
        var name = $(this).attr('name');
        $(this).val(exp[name]);
    });
    $('form input.price').val(exp.price);
    $('form input.set_form, form select.set_form').val([
        exp.private,
        exp.allow_mails,
        exp.location_id,
        exp.category_id
    ]); // присвоение чеков и селектов
    $('input[type=submit]').val('Изменить объявление');
    $('input[type=submit]').attr('formaction', 'index.php?id=' + show);
//    $('.cancel').show();
}

$(document).ready(function () {
    $('a.cancel').on('click', function () {
        formReset();
    });

    $('a[name=show]').on('click', function () {
        var tr = $(this).closest('tr');
        var id = tr.attr('data-id');
        $.getJSON('ajax.php?show=' + id,
                function (response) {
                    formReset();
                    showExp(response);
                }
        );

    });

    $('a[name=delete]').on('click', function () {
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