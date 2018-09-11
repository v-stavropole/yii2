<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    <div class="container">
        <ul class="nav nav-pills">
          <li class="active"><?= html::a('Главная', '/yii2/web/') ?></li>
          <li><?= html::a('Статьи', ['post/index']) ?></li>
          <li><?= html::a('Статья', ['post/show']) ?></li>
        </ul>
        
        <?php echo $this->blocks['block1'] ?>
        <?= $content ?>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>