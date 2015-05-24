<?php /* Smarty version 2.6.28, created on 2015-05-09 11:19:30
         compiled from install_dump.tpl */ ?>
<!DOCTYPE HTML>

<HTML>
    <HEAD>
        <TITLE>Install database</TITLE>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    </HEAD>

    <BODY style="padding: 30px;">

        <form  class='form-horizontal' method="post" accept-charset="utf-8" action="install.php">
            <DIV class="form-group">
                <label><b>В базе данных уже существуют необходимые таблицы!</b></label>
                <br>
                <p>Вы хотите восстановить данные таблиц из дампа? </p>
                
                <label class="label label-danger">ВНИМАНИЕ! СУЩЕСТВУЮЩИЕ ДАННЫЕ БУДУТ ПОТЕРЯНЫ!</label>
                <br>
            </DIV>
            <DIV class="form-group">
                <input class="btn btn-default" name="button_install" type="submit" value="Да" >
                <input class="btn btn-default" name="button_install" type="submit" value="Нет" >
            </DIV>
        </form>
    </BODY>
</HTML>