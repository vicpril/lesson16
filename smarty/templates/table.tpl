<h2 class="sub-header text-center">Доска объявлений</h2>

    
        <div id="board" class="table-responsive" style="display: block">
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
                    {$exp_rows}
                </tbody>
            </table>
        </div>
    
        <div id="alert_board" class="alert alert-warning text-center" role="alert" style="display: none">На доске пока нет объявлений</div>
    
