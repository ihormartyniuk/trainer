<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TrainerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trainers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trainer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'name',
            // 'surname',
            // 'about_info:ntext',
            // 'age',
            // 'sex',
            // 'phone',
            // 'time_for_training',
            // 'registration_date',
            // 'avatar',
            // 'rating',
            // 'city',
            // 'type_of_sport',
            // 'competitions:ntext',
            // 'price',
            // 'training_sex',
            // 'group_training',
            // 'price_per_group_training',
            // 'achievements:ntext',
            // 'place_of_training',
            // 'gym_location',
            // 'years_experience',
            // 'previous_jobs:ntext',
            // 'recommendations:ntext',
            // 'ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
