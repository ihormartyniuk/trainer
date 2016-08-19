<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TrainerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'about_info') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'time_for_training') ?>

    <?php // echo $form->field($model, 'registration_date') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'type_of_sport') ?>

    <?php // echo $form->field($model, 'competitions') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'training_sex') ?>

    <?php // echo $form->field($model, 'group_training') ?>

    <?php // echo $form->field($model, 'price_per_group_training') ?>

    <?php // echo $form->field($model, 'achievements') ?>

    <?php // echo $form->field($model, 'place_of_training') ?>

    <?php // echo $form->field($model, 'gym_location') ?>

    <?php // echo $form->field($model, 'years_experience') ?>

    <?php // echo $form->field($model, 'previous_jobs') ?>

    <?php // echo $form->field($model, 'recommendations') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
