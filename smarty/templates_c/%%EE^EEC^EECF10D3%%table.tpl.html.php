<?php /* Smarty version 2.6.28, created on 2015-05-01 18:58:56
         compiled from table.tpl.html */ ?>
<h2 align="center" class="sub-header">Все объявления</h2>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead >
                <tr >
                  <th>#id</th>
                  <th>Название</th>
                  <th>Описание</th>
                  <th></th>
                  <th>Дата публикации</th>
                </tr>
              </thead>
              <tbody>
                 <?php echo $this->_tpl_vars['ads_rows']; ?>

              
              </tbody>
            </table>
          </div>