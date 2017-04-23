<? !isset($errors)? $errors = [] : '' ?>

<div class="col-md-3">
    <p>Назначить место и время проведения урока</p>
    <form action="/schedule/save" method="post">
        <div class="form-group <?= array_key_exists('teacher_id', $errors)? 'has-error' : '' ?>">
            <select class="form-control" type="text" name="teacher_id">
                <? foreach($schedule_form->getTeachers() as $teacher): ?>
                    <option value="<?= $teacher->id ?>"><?= $teacher->first_name ?> <?= $teacher->last_name ?></option>
                <? endforeach ?>
            </select>
            <? if(array_key_exists('teacher_id', $errors)): ?>
                <span class="help-block"><?= $errors['teacher_id'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group <?= array_key_exists('class_room_id', $errors)? 'has-error' : '' ?>">
            <select class="form-control" type="text" name="class_room_id">
                <? foreach($schedule_form->getClassRooms() as $class_room): ?>
                    <option value="<?= $class_room->id ?>"><?= $class_room->name ?></option>
                <? endforeach ?>
            </select>
            <? if(array_key_exists('class_room_id', $errors)): ?>
                <span class="help-block"><?= $errors['class_room_id'][0] ?></span>
            <? endif ?>
        </div>
        <div class="form-group">
            <label>Выберите день</label>
            <?= yii\jui\DatePicker::widget(['name' => 'date', 'value' => date('Y:m:d'), 'dateFormat' => 'yyyy:MM:dd',]) ?>
        </div>
        <div class="form-group">
            <label for="">Выберите время</label>
            <?= \kartik\time\TimePicker::widget(['name' => 'time']) ?>
        </div>
        <input type="hidden" name="_csrf-frontend" value="<? Yii::$app->getRequest()->csrfToken ?>">
        <input class="btn btn-primary" type="submit" value="Добавить">
    </form>
</div>

