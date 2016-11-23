<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\blog */

$this->title = 'Crear Entrada';
//$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-create">
<div class="container">

    <center><h1><?= Html::encode($this->title) ?></h1></center>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
