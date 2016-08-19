<?php
/**
 * Created by PhpStorm.
 * User: pc1
 * Date: 19.08.16
 * Time: 12:39
 */
use yii\bootstrap\Html;
?>

<h2>My groups</h2>
<?= Html::a('Create group',['/groups/create'], ['class'=>'btn btn-warning' ])?>
<?php
if (count($ownGroups) != 0){ ?>
                            <table  class='table table-hover'>
                        <tr >
                            <th>Title</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Go</th>
                            <th>Delete</th>
                        </tr>
    <?php foreach ($ownGroups as $ownGroup){ ?>
        <tr>
            <td><?= $ownGroup->title ?></td>
            <td><?= $ownGroup->registration_date ?></td>
            <td><?= $ownGroup->image ?></td>
            <td>
                <?= Html::a('<span class="glyphicon glyphicon-arrow-right"></span>',  ['/groups/group', 'id' => $ownGroup->id], [
                    'class'=>'btn btn-warning',
                ]) ?>
            </td>
            <td>
                <?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['/groups/delete', 'id' => $ownGroup->id], [
                    'class'=>'btn btn-warning',
                ]) ?>
            </td>
        </tr>
    <?php }echo '</table>';}else{ echo '<br><h3>Empty</h3>';} ?>


<h2>Memberships groups</h2>