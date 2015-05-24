{include file="header.tpl" title=$title}

<BODY style="padding: 30px;">
    <form class='form-horizontal' method="post" accept-charset="utf-8" action="{$action}">
        <DIV class="form-group">
            <p class="col-sm-6 text-left">{$message}</p>
        </DIV>
        <DIV class="form-group">
            <label class="col-sm-2 text-right">Server name:</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" maxlength="40" value="localhost" name="server_name" required>
            </DIV>
        </DIV>
        <DIV class="form-group">
            <label class="col-sm-2 text-right">User name:</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" maxlength="40" value="{*test*}" name="user_name" required>
            </DIV>
        </DIV>
        <DIV class="form-group">
            <label class="col-sm-2 text-right">Password:</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" maxlength="40" value="{*123*}" name="password">
            </DIV>
        </DIV>
        <DIV class="form-group">
            <label class="col-sm-2 text-right">Database:</b></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" maxlength="40" value="{*test*}" name="database_name" required>
            </DIV>
        </DIV>
        <DIV class="form-group">
            <DIV class="col-sm-4 col-sm-offset-2">
                <input class="btn btn-default" type="submit" name="button_install" value="{$title}">
            </DIV>
        </DIV>
    </form>
</BODY>
</HTML>