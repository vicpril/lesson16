function formReset() {

    $('div.container-fluid').attr('data-show', "");
    $('form .clear_form').each(function () {
        $(this).val('');
    });
    $('form input[name=price]').val(0);
    $('form input.set_form, select.set_form').val(['0', 'private', '', '641780']);
    $('input[type=submit]').val('Подать объявление');
    $('input[type=submit]').attr('formaction', 'index.php');
    $('title').text('Доска объявлений');
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
    $('title').text('Объявление - ' + exp.title);
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
                var text = response.message;
                if (response.status == 'success') {
                    tr.fadeOut('slow', function () {

                        if (id == show) {
                            formReset();
                            show = '';
                        }
                        $(this).remove();
                        if ($('tbody tr').html() == null) {
                            $('#board').hide('slow');
                            $('#alert_board').show('slow', function () {
                            })
                        }
                    });
                }
                show_alert(response.status, text);
            }
    );
}

function click_Show(exp) {
    var tr = $(exp).closest('tr');
    var id = tr.attr('data-id');
    $.getJSON('ajax.php?show=' + id,
            function (response) {
                formReset();
                showExp(response);
            });
}

function addExpOnTable(place, row, new_exp) {
    if (new_exp) {
        place.prepend(row);
        var tr = $(place).find('tr');
    } else {
        place.before(row);
        var tr = $(place).prev(place);
    }

    tr.fadeIn('fast');
}

$('tbody').on('click', 'a[name=show]', function () {
    click_Show(this);
});

$('tbody').on('click', 'a[name=delete]', function () {
    click_Del(this);
});


$(document).ready(function () {
    if ($('tbody tr').html() == null) {
        $('#board').hide();
        $('#alert_board').show();
    }

    $('a.cancel').on('click', function () {
        formReset();
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
                                addExpOnTable(tr, row, false);
                                tr.remove();
                            });
                            formReset();
                        } else {
                            var tr = $('tbody');
                            formReset();
                            addExpOnTable(tr, row, true);
                            $('#board').show('slow');
                            $('#alert_board').hide('slow');
                        }
                    }
                    show_alert(response.status, response.message);
                },
                'json'
                );
    });
});


