<?php
/**
 * Created by PhpStorm.
 * User: pc1
 * Date: 18.08.16
 * Time: 14:12
 */

use yii\bootstrap\Html;
?>

<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-10"><h1><?= Yii::$app->user->identity->username ?></h1></div>
        <div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="<?= Yii::$app->user->identity->avatar ?>"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span><?= Yii::$app->user->identity->registration_date ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> Yesterday</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span><?= Yii::$app->user->identity->name ?></li>

            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="http://bootply.com">bootply.com</a></div>
            </div>


            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                </div>
            </div>

        </div><!--/col-3-->
        <div class="col-sm-9">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                <li><a href="#blog" data-toggle="tab">Blog</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Label 1</th>
                                <th>Label 2</th>
                                <th>Label 3</th>
                                <th>Label </th>
                                <th>Label </th>
                                <th>Label </th>
                            </tr>
                            </thead>
                            <tbody id="items">
                            <tr>
                                <td>1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <ul class="pagination" id="myPager"></ul>
                            </div>
                        </div>
                    </div><!--/table-resp-->

                    <hr>

                    <h4>Recent Activity</h4>

                    <div class="table-responsive">
                        <table class="table table-hover">

                            <tbody>
                            <tr>
                                <td><i class="pull-right fa fa-edit"></i> Today, 1:00 - Jeff Manzi liked your post.</td>
                            </tr>
                            <tr>
                                <td><i class="pull-right fa fa-edit"></i> Today, 12:23 - Mark Friendo liked and shared your post.</td>
                            </tr>
                            <tr>
                                <td><i class="pull-right fa fa-edit"></i> Today, 12:20 - You posted a new blog entry title "Why social media is".</td>
                            </tr>
                            <tr>
                                <td><i class="pull-right fa fa-edit"></i> Yesterday - Karen P. liked your post.</td>
                            </tr>
                            <tr>
                                <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Philip W. liked your post.</td>
                            </tr>
                            <tr>
                                <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Jeff Manzi liked your post.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="messages">

                    <h2></h2>

                    <ul class="list-group">
                        <li class="list-group-item text-muted">Inbox</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>

                    </ul>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">
                    <?= $this->render('view', [
                        'model' => $viewmodel,
                    ]) ?>
                </div>

                <div class="tab-pane" id="blog">
                    <?= \yii\bootstrap\Html::a('Add artcile',['/blog-articles/create'], ['class'=>'btn btn-warning' ])?>
                    <table  class="table table-hover">
                        <tr >
                            <th>Title</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Article</th>
                            <th>Delete</th>
                        </tr>
                    <?php
                    if (count($articles != null)){
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
                    <?php } }else{?>sdfdsfdsf <?php } ?>
                    </table>
                </div>



            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->

