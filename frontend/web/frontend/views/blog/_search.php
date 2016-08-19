<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BlogArticlesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-articles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'small_image') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'share_buttons') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
