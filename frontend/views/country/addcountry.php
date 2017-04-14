<? use Yii; ?>
<h3>Добавьте страну</h3>

<div class="col-md-3">
    <form action="/country/create" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="code" placeholder="code">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="population" placeholder="population">
        </div>
        <input type="hidden" name="_csrf-frontend" value="<? Yii::$app->getRequest()->csrfToken ?>">
        <input class="btn btn-primary" type="submit" value="Отправить">
    </form>
</div>