<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contenido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Publicar')->dropDownList(['1' => 'Si','0' => 'No']) ?>

    <?= $form->field($model, 'Autor')->textInput(['maxlength' => true, 'readonly'=>true, 'value'=>  backend\controllers\BlogController::verUsuario()] ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
