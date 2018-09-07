<?php

namespace app\controllers;


class MyController extends AppController{
    
    public function actionIndex($id = null){
        $hi = "Hello World";
        $names = array('Ivanov', 'Petrov', 'Sidorov');
        
        //return $this->render('index', ['hi' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
}
