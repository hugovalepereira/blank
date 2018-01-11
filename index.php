<DOCTYPE html>
    <html lang="en">
    <html>

    <head>
        <title>Stereognosis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--dependencies-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!--Font Awesome-->
        <script src="https://use.fontawesome.com/6c33db7dfa.js"></script>
        <!--Funções JQUERY-->
        <script src="init.js"></script>
    </head>

    <body>
        <section>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- The slideshow -->
                <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img src="assets/placeholder.jpg" alt="Los Angeles" width="1100" height="500">
                         </div>
                  <div class="carousel-item">
                        <img src="assets/placeholder.jpg" alt="Chicago" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/placeholder.jpg" alt="New York" width="1100" height="500">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <div class="bg__main-color carousel-button"></div>
                    <i class="bg__main-color icono-arrow1-left"></i>
                    <!--<i class="fa fa-angle-left" aria-hidden="true"></i>-->
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <div class="bg__main-color carousel-button"></div>
                   <!-- <i class="fa fa-angle-right" aria-hidden="true"></i>-->
                </a>


            </div>
        </section>

        <!--PURPOSE-->
        <section id="purpose">
            <article class="purpose">
                <div class="purpose__section purpose__section--l purpose-l-click-js">
                    <h2 class="purpose__section-title">Perception</h2>
                    <div class="purpose__section-text--l">
                        <p>Desde o uso generalizado da internet, o conhecimento tem-se tornado cada vez mais acessível a todos mas também mais especializado, obrigando-nos muitas vezes a sentir que temos de escolher uma área, um lado ou um formato.</p>
                    </div>
                </div>

                <div class="purpose__section purpose__section--r purpose-r-click-js">
                    <h2 class="purpose__section-title purpose__section-title--r">Creativity</h2>
                    <div class="purpose__section-text--r">
                        <p>Inspirados pelo The Whole Earth Catalog, que conta com uma grande diversidade de artigos, decidimos resgatar a sua sabedoria e trazê-la para os dias de hoje, produzindo uma revista à imagem do cérebro humano, que é composto por dois hemisférios, sendo um mais ligado à criatividade e arte e o outro à lógica e ciência.
                        Estes dois hemisférios dividem-se e interligam-se através do corpo caloso, mostrando que as duas áreas são igualmente importantes para o bom funcionamento da nossa mente.</p>
                    </div>
                </div>
            </article>
        </section>

        <!--PURPOSE-->
        <section id="support" class="support">
            <div class="row">
                <div class="col-sm-12 col-lg-6 moving-zone">
                    <div class="popup">
                        <div class="popup-text">
                            Support Us.<br>
                            And follow stereognosis <br> wherever you go
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 support-zone">
                    <p class="align-center support-text">Our main support are our fans and followers. <br> Show us your love and get stereognosed...</p>
                    <button class="bg__main-color support-button">Kickstarter Campaign</button>
                </div>
            </div>
        </section>

        <!--FOOTER-->
        <footer class="bg__main-color">
            <div class="container">
                <div class="row footer-content">
                    <div class="footer__description container-fluid col-sm-12 col-md-12 col-lg-3">
                        <h6>Stereognosis</h6>
                        <p class="secondary_text">Stereognosis is a magazine that wants to change your perspective of the knowledge. Is made by three students of the Design and Multimedia Bachelor Degree of the University of Coimbra</p>
                    </div>
                      <div class="footer__info col-sm-6 col-md-6 col-lg-3">
                        <p class="footer__subtitle">Info -</p>
                        <ul>
                            <a href="#purpose" class="footer__link"><li>Purpose</li></a>
                            <a href="index_shop.html" class="footer__link"><li>Shop</li></a>
                            <li>Support Us</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>

                    <div class="footer__social col-sm-6 col-md-6 col-lg-3">
                        <p class="footer__subtitle footer-follow">Follow -</p>
                        <i class="fa fa-instagram icons" aria-hidden="true"></i>
                        <i class="fa fa-twitter icons" aria-hidden="true"></i>
                        <i class="fa fa-facebook icons" aria-hidden="true"></i>
                    </div>
                    <div class="footer__translation col-sm-6 col-md-6 col-lg-3">
                        <span>English</span>
                        <span>/</span>
                        <span>Portuguese</span>
                    </div>
                </div>
            </div>
        </footer>
    </body>

    </html>
