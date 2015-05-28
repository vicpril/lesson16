<?php /* Smarty version 2.6.28, created on 2015-05-28 19:55:19
         compiled from table.tpl */ ?>
<h2 class="sub-header text-center">Доска объявлений</h2>
<form>
    <?php if ($this->_tpl_vars['exp_rows'] != ""): ?>
        <div class="table-responsive" >
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th>Название</th>
                        <th></th>
                        <th>Имя автора</th>
                        <th>Цена</th>
                        <th>Дата публикации</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $this->_tpl_vars['exp_rows']; ?>

                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center" role="alert">На доске пока нет объявлений</div>
    <?php endif; ?>
</form>