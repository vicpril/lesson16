<?php /* Smarty version 2.6.28, created on 2015-05-24 21:14:26
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['header_tpl']).".tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['title'],'name' => ((is_array($_tmp=@$this->_tpl_vars['name']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body style="padding: 10px;">

    <div class="container-fluid" data-show="<?php echo ((is_array($_tmp=@$this->_tpl_vars['show'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
">
        <div class="row">
            <div id="nav-in" style="padding: 30px;
                 height: 100%;
                 overflow: auto;"
                 class="navbar-default navbar-fixed-top col-sm-4 hidden-xs">

                <div class="visible-lg">

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form_full.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="visible-md visible-sm">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form_small.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>

            </div>

            <div class="col-sm-8 col-sm-offset-4">
                <div id="container" class="alert alert-success alert-dismissible" style="display: none" role="alert">
                    <span style="float: right;
                                " 
                          onclick="$('#container').fadeOut('fast');return false;" 
                          class="btn btn-xs glyphicon glyphicon-remove" aria-hidden="true">
                    </span>
                    <div id="container-info"></div>
                </div>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
        <div class="row">
            <div class="navbar-default col-sm-12 visible-xs">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form_full.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
    </div>    


    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>