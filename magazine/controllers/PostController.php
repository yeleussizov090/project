<?php
namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\TestForm; // подключаем нашу модель

class PostController extends AppController
{
    public function actionIndex() {
        $model = new TestForm(); //создаём объект
        //теперь, будем писать данные в объекте
        $model->name = "Иванов Иван";
        $model->email = "ivan@gmail.com";
        $model->text = "Привет, классные статьи. Спасибо.";
        // и сохраним
        $model->save();
    }
}