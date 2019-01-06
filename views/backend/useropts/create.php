<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\harita\models\Useropts */

$this->title = 'Create Useropts';
$this->params['breadcrumbs'][] = ['label' => 'Useropts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useropts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
