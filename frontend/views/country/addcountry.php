<? use Yii; ?>
<? !isset($errors)? $errors = [] : '' ?>

<h3>Добавьте страну</h3>

<div class="col-md-3">
    <form action="/country/create" method="post">
        <div class="form-group <?= array_key_exists('code', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="code" placeholder="code">
            <? if(array_key_exists('code', $errors)): ?>
                <span class="help-block"><?= $errors['code'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group <?= array_key_exists('name', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="name" placeholder="name">
            <? if(array_key_exists('name', $errors)): ?>
                <span class="help-block"><?= $errors['name'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group <?= array_key_exists('population', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="population" placeholder="population">
            <? if(array_key_exists('population', $errors)): ?>
                <span class="help-block"><?= $errors['population'][0] ?></span>
            <? endif ?>
        </div>
        <input type="hidden" name="_csrf-frontend" value="<? Yii::$app->getRequest()->csrfToken ?>">
        <input class="btn btn-primary" type="submit" value="Отправить">
    </form>
</div>