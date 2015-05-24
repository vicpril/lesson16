<?php /* Smarty version 2.6.28, created on 2015-05-12 11:48:57
         compiled from test.tpl */ ?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset="utf-8">

        <TITLE>
            <?php echo $this->_tpl_vars['title']; ?>

        </TITLE>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        
    </HEAD>
    <BODY>
        <DIV class="container-fluid">
            <DIV style="padding: 30px;
                                  height: 100%; /* Высота блока */
                 overflow: auto; /* Добавляем полосы прокрутки */"

                 class="col-sm-4 navbar navbar-default navbar-static-top">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form_full.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            </DIV>
            <DIV class="col-sm-8">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </DIV>
        </DIV>
    </BODY>
</HTML>
