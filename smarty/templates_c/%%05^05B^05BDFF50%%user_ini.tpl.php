<?php /* Smarty version 2.6.28, created on 2015-05-09 11:13:49
         compiled from user_ini.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<BODY style="padding: 30px;">
    <form class='form-horizontal' method="post" accept-charset="utf-8" action="<?php echo $this->_tpl_vars['action']; ?>
">
        <DIV class="form-group">
            <p class="col-sm-6 text-left"><?php echo $this->_tpl_vars['message']; ?>
</p>
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
                <input class="form-control" type="text" maxlength="40" value="" name="user_name" required>
            </DIV>
        </DIV>
        <DIV class="form-group">
            <label class="col-sm-2 text-right">Password:</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" maxlength="40" value="" name="password">
            </DIV>
        </DIV>
        <DIV class="form-group">
            <label class="col-sm-2 text-right">Database:</b></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" maxlength="40" value="" name="database_name" required>
            </DIV>
        </DIV>
        <DIV class="form-group">
            <DIV class="col-sm-4 col-sm-offset-2">
                <input class="btn btn-default" type="submit" name="button_install" value="<?php echo $this->_tpl_vars['title']; ?>
">
            </DIV>
        </DIV>
    </form>
</BODY>
</HTML>