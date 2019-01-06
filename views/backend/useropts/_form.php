<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\harita\models\Useropts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="useropts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'map_height')->textInput() ?>

    <?= $form->field($model, 'map_width')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
