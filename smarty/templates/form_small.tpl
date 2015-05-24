<form class="form-horizontal form-group-sm" method="post" accept-charset="utf-8">

    {*    <h4 class="sub-header text-center">Объявление</h4>*}
    <div class="form-group ">
        <div class="">
            <div class="radio">
                <label>
                    <input type="radio" name="private" value="0" {if !isset($name.private) || $name.private == 0}checked{/if}>Частное лицо
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="private" value="1" {if $name.private == 1}checked{/if}>Компания
                </label>   
            </div>
        </div>
    </div>

    <div class="form-group ">
        <label class="text-left"><b>Ваше имя</b></label>
        <div class="">
            <input class="s_name form-control" type="text" maxlength="40" value="{$name.seller_name|default:''}" name="seller_name" required>
        </div>
    </div>

    <div class="form-group">
        <label class="text-left">Электронная почта</label>
        <div class="">
            <input class="email form-control" type="text" value="{$name.email|default:''}" name="email">
        </div>
    </div>

    <div class="form-group">
        <div class="">
            <div class="checkbox">
                <label>
                    <input type='hidden' value=' ' name="allow_mails">
                    <input type="checkbox" value="checked" name="allow_mails" {$name.allow_mails|default:' '}>
                    Я не хочу получать вопросы по объявлению по e-mail
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="text-left">Номер телефона</label>
        <div class="">
            <input class="phone form-control" type="text" maxlength="11" value="{$name.phone|default:''}" name="phone">
        </div>
    </div>

    <div class="form-group">
        <label class="text-left">Город</label>
        <div class="">
            <select class="form-control" name=location_id title="Выберите Ваш город">
                <option disabled="disabled">-- Города --</option>
                {html_options options=$cities selected=$name.location_id|default:''}
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="text-left">Категория</label>
        <div class="">
            <select class="form-control" name=category_id title="Выберите категорию объявления">
                <option value="">-- Выберите категорию --</option>
                {html_options  options=$categories selected=$name.category_id|default:''}
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="text-left">Название объявления</label>
        <div class="">
            <input class="title form-control" type="text" maxlength="50" value="{$name.title|default:''}" name="title" required> 
        </div>
    </div>

    <div class="form-group">
        <label class="text-left">Описание объявления</label> 
        <div class="">
            <textarea class="des form-control" maxlength="3000" name="description">{$name.description|default:''}</textarea> 
        </div>
    </div>

    <div class="form-group"> 
        <label class="text-left">Цена</label> 
        <div class="">
            <div class="input-group">
                <input class="price form-control" type="text" maxlength="9" value="{$name.price|default:''}" name="price">
                <span class="input-group-addon">.руб</span>
            </div>
        </div>  
    </div>

    <div id="accept" class="form-group">

        {if !isset($show)}
            <div>
                <input class="add btn btn-info" type="submit" name="button_add" value="Подать объявление" formaction="index.php">
                <a class="cancel btn btn-default" style="display: none">Отмена</a>
            </div>
        {else}
            <div class="">
                <input class="add btn btn-info" type="submit" name="button_add" value="Изменить объявление" formaction="index.php?id={$show}">
                <a class="cancel btn btn-default" style="display: done">Отмена</a>
            </div>
        {/if}

    </div>
    <br>
</form>  
