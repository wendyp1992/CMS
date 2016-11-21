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
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/art.jpg">
                    </div>
                    <br>
                    <span class="card-title blue-text"><?php echo $Titulo ?></span>
                    <p align="center"><?php echo $Contenido ?></p>              
                </div>
            </div>
        <?php } ?>
    </div>            
    <!-- /Main -->
</div>

<!--- blog ---->
<div class="blog">
    <div class="head-section">
        <div class="container">
            <h3><span>Our</span><label>blog .</label></h3>
        </div>
    </div>
    <!---- blog-grids ---->
    <div class="blog-grids">
        <div class="container"> 
            <div class="blog-grids-left">
                <div class="blog-grid-left wow bounceIn" data-wow-delay="0.4s">
                    <div class="blog-art-pic">
                        <img src="images/b1.jpg" title="name" />
                    </div>
                    <div class="blog-art-info">
                        <h3><a href="#">Heading</a></h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                        <ul class="blog-art-info-stags">
                            <li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
                            <li class="blog-art-info-stags-right">
                                <ul>
                                    <li><a href="#"> <label class="b-icon1"> </label>24</a></li>
                                    <li><a href="#"> <label class="b-icon2"> </label>9</a></li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="blog-grid-left wow bounceIn" data-wow-delay="0.4s">
                    <div class="blog-art-pic">
                        <img src="images/b2.jpg" title="name" />
                    </div>
                    <div class="blog-art-info">
                        <h3><a href="#">Heading</a></h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                        <ul class="blog-art-info-stags">
                            <li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
                            <li class="blog-art-info-stags-right">
                                <ul>
                                    <li><a href="#"> <label class="b-icon1"> </label>24</a></li>
                                    <li><a href="#"> <label class="b-icon2"> </label>9</a></li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <!---- ---->
                <div class="blog-grid-left-big wow bounceIn" data-wow-delay="0.4s">
                    <div class="blog-grid-left-big-info">
                        <div class="blog-art-info">
                            <h3><a href="#">Heading</a></h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
                            <ul class="blog-art-info-stags">
                                <li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
                                <li class="blog-art-info-stags-right">
                                    <ul>
                                        <li><a href="#"> <label class="b-icon1"> </label>24</a></li>
                                        <li><a href="#"> <label class="b-icon2"> </label>9</a></li>
                                    </ul>
                                </li>
                                <div class="clearfix"> </div>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-grid-left-big-pic">
                        <div class="blog-art-pic">
                            <img src="images/b4.jpg" title="name" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="blog-grids-right wow bounceIn" data-wow-delay="0.4s">
                <div class="blog-grid-left blog-grid-right">
                    <div class="blog-art-pic">
                        <img src="images/b3.jpg" title="name" />
                    </div>
                    <div class="blog-art-info">
                        <h3><a href="#">Heading</a></h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                        <ul class="blog-art-info-stags">
                            <li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
                            <li class="blog-art-info-stags-right">
                                <ul>
                                    <li><a href="#"> <label class="b-icon1"> </label>24</a></li>
                                    <li><a href="#"> <label class="b-icon2"> </label>9</a></li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!---- blog-grids ---->
    </div>
</div>
<!--- blog ---->
