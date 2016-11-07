<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\db\Command;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
$entradas = Yii::$app->db->createCommand('SELECT Titulo, Contenido from blog_cms where Publicar=\'1\'')->queryAll();
$cont = count($entradas);
?>
<div class="site-blog">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- Main -->
    <div class="row">
        <?php
        for ($i = 0; $i < $cont; $i++) {
            $fila = $entradas[$i];
            $Titulo = $fila['Titulo'];
            $Contenido = $fila['Contenido'];
            ?>
             <div class="col s12 m4">
               <div class="card small">
<!--                    <div class="card-image">
                      <img src="images/art.jpg">
                    </div>-->
                   <br>
                        <span class="card-title blue-text"><?php echo $Titulo ?></span>
                         <p align="center"><?php echo $Contenido ?></p>               </div>
            </div>
        <?php } ?>
    </div>            
    <!-- /Main -->


  
</div>
