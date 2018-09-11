<h1>Test Aciton</h1>

<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;


$form = ActiveForm::begin(['options' => ['id' => 'testForm']]);
print $form->field($model, 'name');
print $form->field($model, 'email')->input('email');
print $form->field($model, 'text')->textarea(['rows' => 5]);
print Html::submitButton('Отправить', ['class' => 'btn btn-success']);
ActiveForm::end();

?>