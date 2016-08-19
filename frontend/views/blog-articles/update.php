<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BlogArticles */

$this->title = 'Update Blog Articles: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-articles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
