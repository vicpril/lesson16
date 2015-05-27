<?php /* Smarty version 2.6.28, created on 2015-05-27 16:31:56
         compiled from form_full.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'form_full.tpl', 20, false),array('function', 'html_options', 'form_full.tpl', 55, false),)), $this); ?>
<form class="form-horizontal form-group-sm" method="post" accept-charset="utf-8">
        <div class="form-group ">
        <div class="col-xs-offset-4 col-xs-8">
            <div class="radio">
                <label>
                    <input class="set_form" type="radio" name="private" value="0" <?php if (! isset ( $this->_tpl_vars['name']['private'] ) || $this->_tpl_vars['name']['private'] == 0): ?>checked<?php endif; ?>>Частное лицо
                </label>
            </div>
            <div class="radio">
                <label>
                    <input class="set_form" type="radio" name="private" value="1" <?php if ($this->_tpl_vars['name']['private'] == 1): ?>checked<?php endif; ?>>Компания
                </label>   
            </div>       </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right"><b>Ваше имя</b></label>
        <div class="col-xs-8 ">
            <input class="clear_form s_name form-control" type="text" maxlength="40" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['seller_name'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="seller_name" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right">Электронная почта</label>
        <div class="col-xs-8">
            <input class="clear_form email form-control" type="text" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="email">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-4 col-xs-8 ">
            <div class="checkbox">
                <label>
                    <input type='hidden' value=' ' name="allow_mails">
                    <input class="set_form" type="checkbox" value="checked" name="allow_mails" <?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['allow_mails'])) ? $this->_run_mod_handler('default', true, $_tmp, ' ') : smarty_modifier_default($_tmp, ' ')); ?>
>
                    Я не хочу получать вопросы по объявлению по e-mail
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right">Номер телефона</label>
        <div class="col-xs-8">
            <input class="clear_form phone form-control" type="text" maxlength="11" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['phone'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="phone">
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right">Город</label>
        <div class="col-xs-8">
            <select class="set_form form-control" name=location_id title="Выберите Ваш город">
                <option disabled="disabled">-- Города --</option>
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cities'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['name']['location_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right">Категория</label>
        <div class="col-xs-8">
            <select class="set_form form-control" name=category_id title="Выберите категорию объявления">
                <option value="">-- Выберите категорию --</option>
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['categories'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['name']['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right">Название объявления</label>
        <div class="col-xs-8">
            <input class="clear_form title form-control" type="text" maxlength="50" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="title" required> 
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 text-right">Описание объявления</label> 
        <div class="col-xs-8">
            <textarea class="clear_form des form-control" maxlength="3000" name="description"><?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea> 
        </div>
    </div>

    <div class="form-group"> 
        <label class="col-xs-4 text-right">Цена</label> 
        <div class="col-xs-8">
            <div class="input-group">
                <input class="price form-control" type="text" maxlength="9" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['price'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
" name="price">
                <span class="input-group-addon">.руб</span>
            </div>
        </div>  
    </div>

    <div class="form-group">
        <div id="accept" class="row col-xs-8 col-xs-offset-4">
            <?php if (! isset ( $this->_tpl_vars['show'] )): ?>
                <div>
                    <input class="add btn btn-info" type="submit" name="button_add" value="Подать объявление" formaction="index.php">
                    <a class="cancel btn btn-default" style="display: done">Отмена</a>
                </div>
            <?php else: ?>
                <div>
                    <input class="add btn btn-info" type="submit"  name="button_add" value="Изменить объявление" formaction="index.php?id=<?php echo $this->_tpl_vars['show']; ?>
">
                   <a class="cancel btn btn-default" style="display: done">Отмена</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <br>
</form>  