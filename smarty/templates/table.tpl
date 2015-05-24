<h2 class="sub-header text-center">Доска объявлений</h2>
<form>
    {if $exp_rows != ""}
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
                    {$exp_rows}
                </tbody>
            </table>
        </div>
    {else}
        <div class="alert alert-warning text-center" role="alert">На доске пока нет объявлений</div>
    {/if}
</form>