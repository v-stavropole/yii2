<?php

namespace app\controllers;
use app\models\TestForm;

class PostController extends AppController{
    
    public $layout = 'basic';

    public function actionIndex() {
        
        $model = new TestForm();
        
        return $this->render('test', compact('model'));
    }
    
    public function actionShow() {
        //$this->layout = 'basic';
        $this->view->title = 'Одна сатья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики статья']);
        $this->view->registerMetaTag(['name' => 'discription', 'content' => 'Описание статья']);
        return $this->render('show');
    }
    
}
