<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entradas';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">
<div class="container">

    <center><h1><?= Html::encode($this->title) ?></h1></center>

    <p>
        <?= Html::a('Crear Entrada', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Titulo',
            'Contenido:ntext',
            'Publicar',
            'Autor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
