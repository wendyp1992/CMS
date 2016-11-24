<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\blog */

$this->title = 'Actualizar Entrada: ' . $model->Id;
//$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-update">
<div class="container">

    <center><h1><?= Html::encode($this->title) ?></h1></center>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
