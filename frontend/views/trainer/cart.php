<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */

$this->title = 'Update Trainer: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>


<div class="container" style="padding-top: 60px;">
    <h1 class="page-header">Edit Profile</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
                <img src="<?= Yii::$app->user->identity->avatar ?>" class="avatar img-circle img-thumbnail" alt="avatar">

            </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <h3>Personal info</h3>
            <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal', 'enctype' => 'multipart/form-data']]); ?>

            <?= $form->field($model, 'avatar',[
                'template' => '{label}<div class="col-lg-8">{input}{hint}{error}</div>',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->fileInput()  ?>

            <?= $form->field($model, 'name',[
                'template' => '{label}<div class="col-lg-8">{input}{hint}{error}</div>',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true])  ?>

            <?= $form->field($model, 'surname',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true])  ?>

            <?= $form->field($model, 'about_info',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'age',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->dropDownList(range(18, 60)) ?>

            <?= $form->field($model, 'sex',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->dropDownList(['Мужчина', 'Женщина']) ?>

            <?= $form->field($model, 'phone',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'time_for_training',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'rating',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput() ?>

            <?= $form->field($model, 'city',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'type_of_sport',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'competitions',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'price',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput() ?>

            <?= $form->field($model, 'training_sex',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->dropDownList(['Мужчина', 'Женщина']) ?>

            <?= $form->field($model, 'group_training',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->dropDownList(['Nothing', 'boxing', 'fitness']) ?>

            <?= $form->field($model, 'price_per_group_training',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput() ?>

            <?= $form->field($model, 'achievements',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'place_of_training',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'gym_location',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'years_experience',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->dropDownList(range(1, 25))?>

            <?= $form->field($model, 'previous_jobs',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'recommendations',[
                'template' => '{label}<div class="col-lg-8">{input}</div>{hint}{error}',
                'labelOptions' => [
                    'class' => 'col-lg-3 control-label',
                ],
            ])->textarea(['rows' => 4]) ?>
            <div class="form-group col-lg-8">
                <?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>




