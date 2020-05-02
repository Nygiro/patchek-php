<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/onepage-scroll/1.3.1/onepage-scroll.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.min.css">


    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <!-- Fin Favicons -->



    <title>Agence | Patch.ek</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="#">
                        <img src="images/Illustration%204.png" alt="Logo de l'agence Patchek">
                    </a>
                </li>
                <li>
                    <a class="btn">
                        <div class="hamburger-menu">
                            <div class="bar"></div>
                        </div>
                    </a>
                </li>
                <li class="brand">
                    <a href="#">
                        <img src="images/patchek.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/arobase.png" alt="Page contact">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content">
            <ul>
                <li>
                    <a href="">Agence</a>
                </li>
                <li>
                    <a href="">Nos patchs</a>
                </li>
                <li>
                    <a href="">La team</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="main">
        <div class="section">
            <section class="video">
                <div class="sound">
                    <div class="sound--icon fa fa-volume-off"></div>
                    <div class="sound--wave sound--wave_one"></div>
                    <div class="sound--wave sound--wave_two"></div>
                </div>


                <video id="myVideo" preload="auto" loop autoplay>
                    <source src="videos/finale_reduit.mp4" type="video/mp4" />
                    <source src="videos/finale_reduit.webm" type="video/webm" />
                    <source src="videos/finale_reduit.ogv" type="video/ogg" />
                </video>
                <img class="fleche" src="images/felche.png" alt="">
                <i id='playButton' class="fa fa-play-circle" aria-hidden="true"></i>
                <img class="title" src="images/logo_blanc.png" alt="">
                <p class="subtitle  ">Service de création web</p>
            </section>
        </div>
        <div class="section" id="first-agence">
            <section class="agence" id="agence">
                <div class="left-content">
                    <div class="middle">
                        <h1>Agence
                            <span>.</span>ek</h1>
                        <div class="block-center">
                            <img src="images/textareas2.png" alt="">
                            <p>Innovons ensemble pour des projets web créatifs et efficaces.</p>
                            <img src="images/textareas.png" alt="">
                        </div>

                    </div>
                    <img class="logo-agence" src="images/logo.png" alt="">
                    <img class="fleche" src="images/felche.png" alt="">

                </div>
                <div class="right-content">
                    <div class="top">
                        <div class="middle">
                            <p>Nous restons en contact permanent avec vous en s’appuyant sur des méthodes agiles, afin d’identifier
                                au mieux vos besoins. On vous intègre au processus de création, ainsi vous êtes en mesure
                                d’apporter des suggestions au cours de l’élaboration du projet.</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="middle"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section">
            <section class="patch">
                <div class="left-content">
                    <div class="middle">
                        <h1>Patch
                            <span>.</span>ek</h1>
                        <div class="block-center">
                            <img src="images/textareas2.png" alt="">
                            <p>Des solutions novatrices développées pour le web-design, l’UX et le SEO.</p>
                            <img src="images/textareas.png" alt="">
                        </div>
                    </div>
                    <img class="logo-agence" src="images/logo.png" alt="">
                    <img class="fleche" src="images/felche2.png" alt="">

                </div>
                <div class="right-content">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/picto-01.png" alt="Los Angeles" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/picto-02.png" alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/picto-03.png" alt="New york" style="width:100%;">
                            </div>
                            <div class="item">
                                <img src="images/picto-04.png" alt="New york" style="width:100%;">
                            </div>
                            <div class="item">
                                <img src="images/picto-05.png" alt="New york" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                    <div class="bottom">
                        <div class="top-client">
                            <h2>One 2 One</h2>
                            <p>Salle de fitness</p>
                            <a href="http://one2one-larochelle.com/" target="_blank">
                                <img src="images/rightarrow.png" alt="">
                            </a>
                        </div>

                        <div class="bottom-client">
                            <h2>Coppelia</h2>
                            <p>Association de chant</p>
                            <a href="http://associationcoppelia.fr/" target="_blank">
                                <img src="images/rightarrow.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section">
            <section class="team">
                <ul>
                    <li>
                        <div class="pres">
                            <h3>L.Merlin</h3>
                            <h4>Graphiste</h4>
                            <div class="spe">
                                <p>Imprimé</p>
                                <p>Illustrateur</p>
                                <p>Design packaging</p>
                            </div>
                            <div class="tchek">
                                <p>Tchek moi -> </p>
                                <div class="initial">
                                    <p>Lm</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pres">
                            <h3>M.Treve</h3>
                            <h4>Vidéaste</h4>
                            <div class="spe">
                                <p>Motion Design</p>
                                <p>Monteur</p>
                                <p>VFX</p>
                            </div>
                            <div class="tchek">
                                <p>Tchek moi -> </p>
                                <div class="initial">
                                    <p>Mt</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="pres">
                            <h3>R.Moquet</h3>
                            <h4>Graphiste</h4>
                            <div class="spe">
                                <p>Multimédia</p>
                                <p>Photographe</p>
                                <p>Typographe</p>
                            </div>
                            <div class="tchek">
                                <p>Tchek moi -> </p>
                                <div class="initial">
                                    <p>Rm</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pres">
                            <h3>F.Fremin</h3>
                            <h4>Développeur</h4>
                            <div class="spe">
                                <p>Concepteur</p>
                                <p>Intégrateur</p>
                            </div>
                            <div class="tchek">
                                <p>Tchek moi -> </p>
                                <div class="initial">
                                    <p>Ff</p>
                                </div>
                            </div>

                        </div>
                    </li>

                </ul>

            </section>
        </div>
        <section class="contact">
            <div class="left-contact">
                <div class="top-contact">
                    <h2>Contact.ek</h2>
                    <p>patchek.agence@gmail.com</p>
                    <p>Adresse</p>
                    <p>7 Avenue Albert Einstein</p>
                    <p>17000 La Rochelle</p>
                </div>
                <div class="bot-contact">
                    <ul class="num">
                        <li>
                            <div class="initial">Lm</div>
                            <p>06 22 11 35 65</p>
                        </li>
                        <li>
                            <div class="initial">Mt</div>
                            <p>06 35 85 54 33</p>
                        </li>
                        <li>
                            <div class="initial">Rm</div>
                            <p>07 12 89 32 81</p>
                        </li>
                        <li>
                            <div class="initial">Ff</div>
                            <p>06 13 25 65 98</p>
                        </li>
                    </ul>
                    <form class="contact-form" method="post">
                        <input type="text" name="nom" id="" placeholder="Votre nom">
                        <input type="text" name="email" id="" placeholder="Votre email">
                        <textarea name="contenu" id="" cols="25" rows="6" placeholder="Votre message"></textarea>
                        <input type="submit" value="ENVOYER">
                    </form>

                </div>

                <div class="btn-contact">
                    <p>On prend contact ?</p>
                </div>
            </div>
            <div class="right-contact" id="map1">
            </div>
        </section>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/onepage-scroll/1.3.1/jquery.onepage-scroll.min.js"></script>
    <script src="js/google.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb6_7fwIlQrTclV6sJLSh2evmSkkPk34M&language=fr" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/main.js"></script>

</body>

</html>