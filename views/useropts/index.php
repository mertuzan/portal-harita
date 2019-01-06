<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\harita\models\UseroptsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Useropts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useropts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Useropts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'map_height',
            'map_width',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
