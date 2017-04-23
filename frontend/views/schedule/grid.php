<?
use yii\grid\GridView;
use yii\data\ActiveDataProvider;


$dataProvider = new ActiveDataProvider([
    'query' => $schedule,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => [
            'fullName' => [
                'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                'label' => 'Full Name',
            ],
            'className' => [
                'asc' => ['name' => SORT_ASC],
                'desc' => ['name' => SORT_DESC],
                'label' => 'Class Name',
            ],
            'time',
            'date',
        ]
    ]
]);

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        [
            'attribute' => 'className',
            'value' => function($data){
                return $data->classRoom->name ? $data->classRoom->name : '';
            },
        ],
        [
            'attribute' => 'fullName',
            'value' => function($data){
                return $data->teacher->getFullName() ? $data->teacher->getFullName() : '';
            }
        ],
        'time',
        'date',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
