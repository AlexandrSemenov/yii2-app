<?php

namespace frontend\controllers;

use common\models\User;
use frontend\models\Country;
use yii\data\Pagination;
use yii\web\Controller;
use Yii;

class CountryController extends Controller
{
    public function actions()
    {
        return [
            'test' => 'frontend\components\TestAction',
            'print' => 'frontend\components\PrintAction',
        ];
    }

    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionTest()
    {
        $countries = Country::find()->where('population > 64513242')->orderBy('name')->asArray()->all();
        $user = User::findByUsername('admin');
        echo"<pre>"; var_dump($user->email);
        echo"<pre>"; var_dump($countries); die();
//        foreach($countries as $country)
//        {
//            echo $country->name . "<br>";
//        }
    }

    public function actionView($code)
    {
//        $countries = Country::findAll(['code' => $code]);

        $sql = 'SELECT name, population FROM country WHERE code = :code';
        $countries = Country::findBySql($sql, ['code' => $code])->all();

        if($countries != null)
        {
            return $this->render('country', ['countries' => $countries]);
        }
        return $this->render('nocountry');
    }

    public function actionAddCountry()
    {
        return $this->render('addcountry');
    }

    public function actionCreate()
    {
        $request = Yii::$app->request->post();
        $country = new Country();
//        $country->attributes = $request;

        $country->code = $request['code'];
        $country->name = $request['name'];
        $country->population = $request['population'];

        if(!$country->validate()){
            $errors = $country->errors;
            return $this->render('addcountry', ['errors' => $errors]);
        }

        $country->save();

        return $this->redirect("view/{$country->code}", 302);
    }
}