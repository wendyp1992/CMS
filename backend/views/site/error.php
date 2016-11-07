<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <h1>    Error (# 403)</h1>

    <div class="alert alert-danger">
    <!--    <?= nl2br(Html::encode($message)) ?>-->
    Usted no tiene permisos para realizar esta acción.
        
    </div>

    <p>
        <!--        The above error occurred while the Web server was processing your request.-->
        Error al procesar la solicitud del usuario.
    </p>
    <p>
        <!--        Please contact us if you think this is a server error. Thank you.-->
        Por favor, póngase en contacto con nosotros si usted piensa que esto es un error del servidor. Gracias.


    </p>

</div>
