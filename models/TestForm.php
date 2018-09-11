<?php

namespace app\models;
use yii\base\Model;

class TestForm extends Model{

    public $name;
    public $email;
    public $text;
    
    public function attributeLabels() {
        return[
            'name'  => 'Имя',
            'email'  => 'E-mail',
            'text'  => 'Текст сообщения',
        ];
    }
    
    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
          //  ['name', 'string', 'min' => 5],
          //  ['name', 'string', 'max' => 10],
            ['name', 'string', 'length' => [5,10]],
            ['name', 'myRule'],
            ['text', 'trim']
        ];
    }
    
    public function myRule($attr) {
        
        if( !in_array($this->$attr, ['hello', 'world'])){
            $this->addError($attr, 'wrong');
        }
        
    }
}
