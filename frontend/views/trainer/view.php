<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-view">

    <p>
        <?= Html::a('Update', ['cart'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'username',
            'email:email',
            'name',
            'surname',
            'about_info:ntext',
            'age',
            'sex',
            'phone',
            'time_for_training',
            'avatar',
            'rating',
            'city',
            'type_of_sport',
            'competitions:ntext',
            'price',
            'training_sex',
            'group_training',
            'price_per_group_training',
            'achievements:ntext',
            'place_of_training',
            'gym_location',
            'years_experience',
            'previous_jobs:ntext',
            'recommendations:ntext',
        ],
    ]) ?>

</div>
