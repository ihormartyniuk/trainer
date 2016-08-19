<?php
/**
 * Created by PhpStorm.
 * User: pc1
 * Date: 19.08.16
 * Time: 12:35
 */
use yii\bootstrap\Html;
?>

<?= Html::a('Add artcile',['/blog-articles/create'], ['class'=>'btn btn-warning' ])?>
<?php
if (count($articles) != 0){
    echo "
                            <table  class='table table-hover'>
                        <tr >
                            <th>Title</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Article</th>
                            <th>Delete</th>
                        </tr>
                        ";
    foreach ($articles as $article){ ?>
        <tr>
            <td><?= $article->title ?></td>
            <td><?= $article->author ?></td>
            <td><?= $article->image ?></td>
            <td><?= $article->date ?></td>
            <td><?= $article->content ?></td>
            <td>
                <?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['/blog-articles/delete', 'id' => $article->id], [
                    'class'=>'btn btn-warning',
                ]) ?>
            </td>
        </tr>
    <?php }echo '</table>';}else{ echo '<br><h1>Empty</h1>';} ?>
