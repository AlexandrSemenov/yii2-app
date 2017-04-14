<? use yii\helpers\Html; ?>

<ul>
    <? foreach($countries as $country): ?>
    <li>
        <?= Html::encode($country->name) ?>
        <?= Html::encode($country->population) ?>
    </li>
    <? endforeach ?>
</ul>