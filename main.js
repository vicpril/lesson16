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

function show_alert(status, text) {
    switch (status) {
        case 'success':
            $('#container').removeClass('alert-danger').addClass('alert-success');
            break;
        case 'error':
            $('#container').removeClass('alert-success').addClass('alert-danger');
            break;
    }
    ;
    $('#container-info').html(text);
    $('#container').fadeIn('slow');
}

function click_Del(btn) {
    var tr = $(btn).closest('tr');
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
                        $(this).remove();
                        if ($('tbody tr')[0] == null) {
                            response.message += "<br>На доске больше нет объявлений.";
                        }

                    });
                }
                show_alert(response.status, response.message);
            }
    );
}

function click_Show(exp) {
    var tr = $(exp).closest('tr');
    var id = tr.attr('data-id');
    $.getJSON('ajax.php?show=' + id,
            function (response) {
                $('form.form-horizontal').fadeOut('fast', function () {
                    formReset();
                    showExp(response);
                    $('form.form-horizontal').fadeIn('fast');
                });
                console.log(response);
            });
}

function addExpOnTable(tr, row) {
    tr.before(row);
    $(tr).prev(tr).find('a[name=delete]').on('click', function () {
        click_Del(this);
    });
    $(tr).prev(tr).find('a[name=show]').on('click', function () {
        click_Show(this);
    });

    $(tr).prev(tr).fadeIn('fast');

}

$(document).ready(function () {
    $('a.cancel').on('click', function () {
        $('form.form-horizontal').fadeOut('fast', function () {
            formReset();
            $('form.form-horizontal').fadeIn('fast');
        });
    });


    $('a[name=show]').on('click', function () {
        click_Show(this);
    });

    $('a[name=delete]').on('click', function () {
        click_Del(this);
    });

    $('form.form-horizontal').on('submit', function () {
        var id = $('div.container-fluid').attr('data-show');
        var exp = $('form.form-horizontal:visible').serialize();
        $.post('ajax.php?id=' + id,
                exp,
                function (response) {
                    if (response.status == 'success') {
                        var row = $(response.row);
                        row.attr('style', 'display: none');
                        row.attr('data-id', response.id);
                        if (id !== '') {
                            var tr = $('tbody tr[data-id=' + id + ']');
                            tr.fadeOut('fast', function () {
                                addExpOnTable(tr, row);
                            });
                            $('form.form-horizontal').fadeOut('fast', function () {
                                formReset();
                                $('form.form-horizontal').fadeIn('fast');
                            });
                        } else {
                            var tr = $('tbody tr:first');
                            $('form.form-horizontal').fadeOut('fast', function () {
                                formReset();
                                $('form.form-horizontal').fadeIn('fast');
                            });
                            addExpOnTable(tr, row);
                        }
                    }
                    show_alert(response.status, response.message);
                },
                'json'
                );
    });
});


