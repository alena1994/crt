<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'user_id',
            'authKey',
            'accessToken',
        ],
    ]) ?>
    <div> <class="panel panel-default">
        <div class="panel-heading">Все проекты</div>

        <?php 

        if (empty($accesses)): ?>
            <div class="panel-body">
            <p>не найдено</p>
            </div>
        <?php else: ?>
            <ul class="list-group">
                

                <?php foreach ($accesses as $key => $accesses): ?>
                    <li class="list-group-item">
                    <?php echo Html::encode($accesses->type); ?>
                    <?php echo Html::encode($accesses->login); ?>
                    <?php echo Html::encode($accesses->password); ?>
                    </li>
                    <?php endforeach; ?>
            </ul>
        <?php endif ?>
    </div>

</div>
