<?php //$this->title = 'Статья';?>
<h1>Show Action</h1>

<?php $this->registerJsFile ( '@web/js/scripts.js', ['depends' => 'app\assets\AppAsset']); ?>

<?php $this->beginBlock('block1'); ?>
    <h3>Вставленный блок</h3>
<?php $this->endBlock(); ?>