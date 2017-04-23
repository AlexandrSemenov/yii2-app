<p>Список классных комнат</p>

<ul>
    <? foreach($class_rooms as $class_room): ?>
        <? foreach($class_room->teachers as $teacher): ?>
            <li><?= $teacher->first_name ?></li>
        <? endforeach ?>
    <? endforeach ?>
</ul>