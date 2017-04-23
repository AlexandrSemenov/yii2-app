<? use Yii; ?>
<? !isset($errors)? $errors = [] : '' ?>

<div class="col-md-3">
    <h4>Добавьте классную комнату</h4>
    <form action="/class-room/save" method="post">
        <div class="form-group <?= array_key_exists('name', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="name" placeholder="имя класса">
            <? if(array_key_exists('name', $errors)): ?>
                <span class="help-block"><?= $errors['name'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group <?= array_key_exists('credits', $errors)? 'has-error' : '' ?>">
            <textarea class="form-control" type="text" name="credits" placeholder="описание"></textarea>
            <? if(array_key_exists('credits', $errors)): ?>
                <span class="help-block"><?= $errors['credits'][0] ?></span>
            <? endif ?>
        </div>
        <input type="hidden" name="_csrf-frontend" value="<? Yii::$app->getRequest()->csrfToken ?>">
        <input class="btn btn-primary" type="submit" value="Добавить">
    </form>
</div>