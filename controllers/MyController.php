<?php

namespace app\controllers;

use \yii\web\Controller;


class MyController extends Controller{
    public function actionIndex($id = null){
        $hi = "Hello World";
        $names = array('Ivanov', 'Petrov', 'Sidorov');
        //return $this->render('index', ['hi' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
}
