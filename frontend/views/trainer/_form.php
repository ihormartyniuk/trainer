<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'age')->dropDownList(range(18, 60)) ?>

    <?= $form->field($model, 'sex')->dropDownList(['Мужчина', 'Женщина']) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_for_training')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_of_sport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'competitions')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'training_sex')->dropDownList(['Мужчина', 'Женщина']) ?>

    <?= $form->field($model, 'group_training')->checkbox(['bool'=>true]) ?>

    <?= $form->field($model, 'price_per_group_training')->textInput() ?>

    <?= $form->field($model, 'achievements')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'place_of_training')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gym_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'years_experience')->dropDownList(range(1, 25))?>

    <?= $form->field($model, 'previous_jobs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recommendations')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
