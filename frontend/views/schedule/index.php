<p>Рассписание занятий</p>

    <table class="table table-striped" style="text-align: center;">
        <thead>
            <tr>
                <th  style="text-align: center;">Классная комната</th>
                <th  style="text-align: center;">Преподаватель</th>
                <th  style="text-align: center;">Время</th>
                <th  style="text-align: center;">Дата</th>
            </tr>
        </thead>
        <tbody>
        <? foreach($schedule as $class): ?>
            <tr>
                <td><?= $class->classRoom->name ?></td>
                <td><?= $class->teacher->first_name ?> <?= $class->teacher->last_name ?></td>
                <td><?= $class->time ?></td>
                <td><?= $class->date ?></td>
            </tr>
        <? endforeach ?>
        </tbody>
    </table>

