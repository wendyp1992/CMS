<?php
/* @var $this yii\web\View */

$this->title = 'CMS-BLOG';
?>
<head>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!----start-top-nav-script---->
    <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <!----//End-top-nav-script---->
</head>
<body>
    <div class="bg">
        <!----- start-header---->
        <!--<div class="container">-->

        <!--</div>-->
        <!----- //End-header---->
        <!---- banner-info ---->
        <div class="banner-info">
            <div class="container">
                <h1 class="wow fadeIn" data-wow-delay="0.5s"><span>MI CMS</span><br /><label>Yii2 Application</label></h1>
                <div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
                    <div class="banner-grid text-center">
                        <span class="top-icon1"> </span>
                        <h3></h3>
                    </div>
                    <div class="banner-grid banner-grid-active text-center">
                        <span class="top-icon2"> </span>
                        <h3></h3>
                    </div>
                    <div class="banner-grid text-center">
                        <span class="top-icon3"> </span>
                        <h3></h3>
                    </div>
                    <div class="banner-grid text-center">
                        <span class="top-icon4"> </span>
                        <h3></h3>
                    </div>
                    <div class="banner-grid text-center">
                        <span class="top-icon5"> </span>
                        <h3></h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!---- banner-info ---->

    <!---- about ---->
    <div id="about" class="about">
        <div class="head-section">
            <div class="container">
                <center> <h3><span>Articulos</span><label>Cientificos</label></h3></center>
            </div>
        </div>
        <!--- about-grids ---->
        <div class="about-grids">
            <div class="col-md-4 about-grid about-grid1 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="about-grid-info">
                    <h4><a href="https://www.computer.org/csdl/trans/ts/1985/09/01702108.pdf">SOFTWARE QA</a></h4>
                    <p align="justify">
                        Este documento describe una familia de herramientas que no sólo es compatible desarrollo de software, sino que también asegura la calidad de cada software producto de los requisitos definición al sistema integrado..

                    </p>
                </div>
                <div class="about-grid-pic">
                    <img src="images/qa.jpg" width="300" height="250" title="name" />
                </div>
            </div>
            <div class="col-md-4 about-grid about-grid2 wow fadeInUp" data-wow-delay="0.4s">
                <div class="about-grid-pic">
                    <img src="images/test.jpg" width="300" height="227" title="name" />
                </div>
                <div class="about-grid-info">
                    <h4><a href="http://dspace.ucuenca.edu.ec/bitstream/123456789/23835/1/2015_TIC.EC_24.pdf">TESTING</a></h4>
                    <p align="justify">
                        El presente trabajo describe el proceso realizado y resultados obtenidos al estudiar la documentación técnica de los desarrollos de software (DS) del grupo de investigación en sistemas y tecnologías de la información (STI), grupo adscrito a la UIS.
                    </p>
                </div>
            </div>
            <div class="col-md-4 about-grid about-grid1 wow fadeInRight" data-wow-delay="0.4s">
                <div class="about-grid-info">
                    <h4><a href="http://dl.acm.org/citation.cfm?id=1297927&dl=ACM&coll=DL">SELENIUM</a></h4>
                    <p>
                        El selenio es una herramienta para la creación y ejecución de pruebas web automatizados y es una buena opción para proyectos ágiles en el que se puede utilizar para la creación de pruebas de aceptación correspondientes a las historias de usuario de la aplicación web.
                    </p>
                </div>
                <div class="about-grid-pic">
                    <img src="images/se.jpg" width="300" height="227" title="name" />
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--- /about-grids ---->
    </div>
</div>
<!---- about ----> 

<!--- process --->
<div id="process" class="process">
    <div class="head-section">
        <div class="container">
            <h3><span>Accesos</span><label>Directos</label></h3>
        </div>
    </div>
    <div class="container">
        <div class="process-grids text-center wow bounce" data-wow-delay="0.4s">
            <div class="col-md-3 process-grid process-grid1 wow bounceInUp" data-wow-delay="0.4s">
                <span class="p-icon1"> </span>
                <h4><a href="../../frontend/web/site/blog">Blog</a></h4>
            </div>
            <div class="col-md-3 process-grid process-grid2 wow bounceInDown" data-wow-delay="0.4s">
                <span class="p-icon2"> </span>
                <h4><a href="http://mundogya.com/UnitTesting/#/">Unit Test</a></h4>
            </div>
            <div class="col-md-3 process-grid process-grid3 wow bounceInUp" data-wow-delay="0.4s">
                <span class="p-icon3"> </span>
                <h4><a href="">making</a></h4>
            </div>
            <div class="col-md-3 process-grid process-grid4 wow bounceInDown" data-wow-delay="0.4s">
                <span class="p-icon4"> </span>
                <h4><a href="#">success</a></h4>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--- process --->

</div>
<!---- work-with-us---->
<div class="work-with-us text-center">
    <div class="container">
        <h4> FRAMEWORK YII2!</h4>
        <p>Yii es un framework PHP moderna de alto rendimiento mejor para el desarrollo de aplicaciones web y APIs.</p>
        <a class="catch-me wow shake" data-wow-delay="0.3s" href="www.mundogya.com">Contacto</a>
    </div>
</div>
<!---- work-with-us---->
<!--- portfolio ---->
<!---- Team ----->
</body>
