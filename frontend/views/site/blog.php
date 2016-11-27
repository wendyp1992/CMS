<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\db\Command;

$this->title = 'Blog de Noticias';
//$this->params['breadcrumbs'][] = $this->title;
$entradas = Yii::$app->db->createCommand('SELECT Titulo, Contenido from blog_cms where Publicar=\'1\'')->queryAll();
$cont = count($entradas);
?>

<div class="site-blog">
    <center> <h1><?= Html::encode($this->title) ?></h1></center>
    <div class="container">
        <!-- Main -->
        <div class="row">
            <?php
            for ($i = 0; $i < $cont; $i++) {
                $fila = $entradas[$i];
                $Titulo = $fila['Titulo'];
                $Contenido = $fila['Contenido'];
                ?>
                <div class="col-xs-4" >
                    <div class="card medium">
                        <div class="card-image">
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/art.jpg">
                        </div>
                        <center> <span  class="card-title blue-text"><?php echo $Titulo ?></span</center>
                        <p><font size="3"><?php echo $Contenido ?></font></p>              
                    </div>
                </div>

                
            <?php } ?>
        </div>            
        <!-- /Main -->
    </div>
   </div>

