<? use Yii; ?>
<? !isset($errors)? $errors = [] : '' ?>



<div class="col-md-3">
    <h4>Добавьте классную комнату</h4>
    <form action="/teacher/save" method="post">
        <div class="form-group <?= array_key_exists('first_name', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="first_name" placeholder="имя">
            <? if(array_key_exists('first_name', $errors)): ?>
                <span class="help-block"><?= $errors['first_name'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group <?= array_key_exists('last_name', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="last_name" placeholder="фамилия">
            <? if(array_key_exists('last_name', $errors)): ?>
                <span class="help-block"><?= $errors['last_name'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group <?= array_key_exists('email', $errors)? 'has-error' : '' ?>">
            <input class="form-control" type="text" name="email" placeholder="email">
            <? if(array_key_exists('email', $errors)): ?>
                <span class="help-block"><?= $errors['email'][0] ?></span>
            <? endif ?>
        </div>
        <input type="hidden" name="_csrf-frontend" value="<? Yii::$app->getRequest()->csrfToken ?>">
        <input class="btn btn-primary" type="submit" value="Добавить">
    </form>
</div>