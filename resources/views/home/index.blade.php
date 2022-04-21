<!DOCTYPE html>
<!--
	Bonativo by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SAHAM | Assurance Bahmou</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- Bootstrap -->
        <link href="{{url('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('css/flexslider.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('icons/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
       
        <!--revolution slider setting css-->
        <link href="{{url('rs-plugin/css/settings.css')}}" rel="stylesheet">
        <link href="{{url('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">


        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">.</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" href="index.html"><img style="width: 300px;height: 50px;position: absolute;top: 0;bottom: 0;left:0" src="images/sahamlogo.png" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Accueil</a></li>
                        <li><a href="#about">Informations</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">offres </a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="{{route('home')}}">Histoir</a></li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Categories <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#auto">Assurance Auto/Moto</a></li>
                                <li><a href="#habitation">Assurance Multirisque Habitation</a></li>
                                <li><a href="#multirisque">Assurance Multirisque Professionnelle</a></li>
                                <li><a href="#">Assurance Prévoyance</a></li>

                                <li><a href="#sante">Assurance Santé</a></li>

                                <li><a href="#loisir">Assurance Loisirs</a></li>

                                
                            </ul>
                        </li>
                         <li><a href="#contact">Contacter-nous</a></li>
                        <li><a href="{{route('login')}}">connection</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>


        <div class="fullwidthbanner" id="home">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg-1.jpg" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                        Votre agence <span>SAHAM Assurance Tiznit</span>
                        </div> <!-- /tp-caption -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                        Bienvenue dans votre agence SAHAM Assurance !
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">Voir plus d'information </a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg-3.jpg" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                        Groupe Fikri <span>Assurance Bahamou</span>
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                        Bienvenue dans votre agence SAHAM Assurance !
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">Voir plus d'information</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 3 -->
                </ul>
            </div>
        </div><!--full width banner-->





        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Agent Général  <span class="alo"> Toutes Branches</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                            Nous sommes une agence  située à <span class="colored-text">Tiznit,Maroc.</span> 
                            </p>
                        </div>
                    </div>
                </div><!-- title row end-->

                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                            <i class="bi bi-speedometer2"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>rapidité de livraison</h3>                         
                                <p>
                                Le service de livraison de polices d'assurance est à la disposition de tous les clients                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                            <i class="ion-ios-people-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Equipe</h3>                         
                                <p>
                                Notre équipe de professionnels hautement qualifiés offre à ses clients une assistance compétente  .</br>
                                Privilèges multiples, facilités dans la performance.                         </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                </div><!--row-->
               
            </div><!--container-->      
        </section><!--about section end-->

         <div class="funfacts parallax-1">
            <div class="container">
                <div class="row">
                    
                   
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                        <h2>Plus de 1000</h2>                          
                            <h5> Clients</h5>
                            <span class="border-line"></span>
                        </div>
                    </div> 
                    <!-- fact cols  -->

                    
                     <!-- fact cols  -->

                </div>
            </div>
        </div>
        
        <section id="services" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Notre <span class="colored-text">Services</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                            Pourquoi vous choisissez <span class="colored-text">Assurance Bahmou</span>
                            </p>
                        </div>
                    </div>
                </div><!-- title row end-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div  class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                            
                            <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <div class="features-text-right">
                                <h3  id="auto" >Assurance Moto</h3>                         
                                <p>
                                Vous êtes aujourd’hui nombreux à rouler en 2 ou trois roues, avec autant d’attentes et de besoins différents. Que vous ayez choisi de rouler en petite ou en grosse cylindrée, SAHAM Assurance s’adapte à vos besoins spécifiques et vous propose une assurance en phase avec vos attentes.
                              </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                            <i class="fa-solid fa-car"></i>
                            </div>
                            <div class="features-text-right">
                                <h3  id="auto">Assurance Auto</h3>                         
                                <p>
                                Assur’Auto est une assurance entièrement modulable et conçue pour répondre au mieux à vos attentes et à votre budget. Souscrire à Assur’Auto, c’est être assuré de bénéficier de solutions d’assurance sur mesure et optimales.                                 </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    
                </div><!--services row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div  class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                            <i class="bi bi-person-workspace"></i>
                            </div>
                            <div class="features-text-right">
                                <h3 id="multirisque" >Assurance Multirisque Professionnelle</h3>                         
                                <p>
                                Conçue pour répondre au mieux aux besoins de cette cible, Assur’Moukawalati permet aux assurés d’avoir accès, via un contrat unique, aux garanties essentielles de la multirisque professionnelle d’une part, et à celle de l’accident de travail d’autre part, «le tout à un tarif très accessible».                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                            <i class="fa-solid fa-bed-pulse"></i>
                                </div>
                            <div class="features-text-right">
                                <h3 id="sante"  >Assurance Santé </h3>                         
                                <p>
                                    Avez-vous pensé à couvrir vos frais de santé ? Assur’Santé est une offre spécialement conçue pour couvrir, en régime de base ou complémentaire, les frais de santé de votre famille. Elle prévoit également le versement d’un capital en cas de décès ou de maladies redoutées.
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div><!--services row-->
                <div class="row">
                <div class="col-sm-6 margin-bottom30">
                        <div id="epargne" class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                            
                            <i class="bi bi-cash"></i>                           </div>
                            <div class="features-text-right">
                                <h3>Assurance  d'Epargne</h3>                         
                                <p>
                                    Un projet personnel important ou une grande dépense imprévue...une surprise nous prend toujours de court, à moins d'y être préparé. Pour faire face à cela, nous mettons à votre disposition un produit d'Epargne qui vous permet de vous constituer une épargne progressive en toute sécurité et à des conditions avantageuses.

                                </p>
                            </div>
                        </div>
                    </div><!--services col-->   
                    <div class="col-sm-6 margin-bottom30">
                        <div id="loisir" class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                           <i class="bi bi-activity"></i>

                        </div>
                            <div class="features-text-right">
                                <h3>Assurance loisirs </h3>                         
                                <p>
                                * L'assurance RC Chasse couvre les conséquences pécuniaires de la responsabilité civile que vous pourriez encourir suite à la pratique de la chasse.            </br> 
                                * Voyagez en toute sérénité et profitez pleinement de votre séjour grâce à l’individuelle voyage de SAHAM Assurance! En optant pour cette offre vous êtes couvert en cas d’accidents corporels, d’invalidité ou de décès survenant au cours de votre voyage.  </br>
                                * La Multirisque Plaisance vous couvre contre les risques liés à l’utilisation de bateaux de plaisance, zodiacs, voilier scooter de mer et jet ski. Profitez de garanties indispensables pour naviguer l'esprit libre !                     </p>
                            </div>
                        </div>
                    </div><!--services col-->
                   
                </div><!--services row-->
                <div class="row">
                <div class="col-sm-6 margin-bottom30">
                        <div id="habitation" class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                            <i class="bi bi-house-door"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Assurance Multirisque Habitation</h3>                         
                                <p>
                                Que vous soyez locataire ou propriétaire de votre logement, l’assurance habitation n’est pas obligatoire. Cependant, souscrire un contrat habitation est vivement conseillé et indispensable pour protéger votre foyer et ses occupants, et vous couvrir contre les aléas de la vie quotidienne                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
        </div>
            </div>
        </section><!--services section end-->
        <div class="testimonials parallax-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="flexslider testislider">
                            <ul class="slides">
                                <li>
                                    <div class="slide-items">
                                        <img src="images/bg-4.png" alt="">
                                        <p>
                                        Que vous soyez particulier, professionnel ou entreprise, nos équipes sont à votre écoute pour vous accompagner dans la réalisation de vos projets et vous conseiller au mieux pour vos besoins d'assurances aussi bien pour votre vie privée que pour votre activité professionnelle.

                                        </p>
                                        <h5>Assurance Bahmou </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="images/bg-4.png" alt="">
                                        <p>
                                        Nous sommes à votre disposition, n'hésitez pas à nous rendre visite ou nous contacter pour prendre RDV, nous serions ravis de pouvoir vous accueillir et répondre au mieux à vos sollicitations.

A bientôt !                                        </p>
                                        <h5>Assurance Bahmou </h5>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--testimonials-->
        <!-- <div class="price-tables section-padding">
            <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Our <span class="colored-text">Pricing</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                 Vivamus congue diam vitae tortor imperdiet congue.
                            </p>
                        </div>
                    </div>
                    </div>
                  title row end 
                <div class="row">
                    <div class="col-sm-4 margin-bottom30">
                        <div class="price-box text-center">
                            <div class="header ">
                                <h3>Standard</h3>
                                <div class="price">
                                    <h2>$3.99</h2>
                                    <span>Start price / month</span>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li>10 GB Storage Space</li>
                                <li>50 GB Bandwidth</li>
                                <li>Unlimited Users</li>
                                <li>No Time Tracking</li>
                                <li>Enhanced Security</li>
                            </ul>
                            <div class="price-footer">
                                <h4><a href="#" class="btn btn-border-black">Buy Now</a></h4>
                            </div>
                        </div>
                    </div>
                     price col 
                     <div class="col-sm-4 margin-bottom30">
                        <div class="price-box text-center">
                            <div class="header active">
                                <h3>Standard</h3>
                                <div class="price">
                                    <h2>$3.99</h2>
                                    <span>Start price / month</span>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li>10 GB Storage Space</li>
                                <li>50 GB Bandwidth</li>
                                <li>Unlimited Users</li>
                                <li>No Time Tracking</li>
                                <li>Enhanced Security</li>
                            </ul>
                            <div class="price-footer">
                                <h4><a href="#" class="btn btn-border-theme">Buy Now</a></h4>
                            </div>
                        </div>
                    </div>
                     price col 
                     <div class="col-sm-4 margin-bottom30">
                        <div class="price-box text-center">
                            <div class="header">
                                <h3>Standard</h3>
                                <div class="price">
                                    <h2>$3.99</h2>
                                    <span>Start price / month</span>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li>10 GB Storage Space</li>
                                <li>50 GB Bandwidth</li>
                                <li>Unlimited Users</li>
                                <li>No Time Tracking</li>
                                <li>Enhanced Security</li>
                            </ul>
                            <div class="price-footer">
                                <h4><a href="#" class="btn btn-border-black">Buy Now</a></h4>
                            </div>
                        </div>
                    </div>
                     price col 
                </div>
            </div>
        </div>
        pricing   -->
        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Assurance</span> Bahmou Equipe</h1> 
                            <span class="border-line"></span>
                            
                        </div>
                    </div>
                </div>
                <div class="testimonials parallax-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="flexslider testislider">
                            <ul class="slides">
                                <li>
                                    <div class="slide-items">
                                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="images/user.png" class="img-responsive" alt="">

                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4 style="color:black">Ahmed Bahmou</h4>
                            <em style="color:black">Directeur </em>
                        </div>
                    </div >
                    <!-- team col end  -->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="images/user.png" class="img-responsive" alt="">                       
                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4 style="color:black">XXXXXXX</h4>
                            <em style="color:black">XXXXX</em>
                        </div>
                    </div> 
                    <!-- team col end  -->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="images/user.png" class="img-responsive" alt="">                     
                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4 style="color:black">XXXXXXXXXX</h4>
                            <em style="color:black">XXXXXXXXXX</em>
                        </div>
                    </div> 
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="images/user.png" class="img-responsive" alt="">

                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4 style="color:black">Ahmed Bahmou</h4>
                            <em style="color:black">Directeur </em>
                        </div>
                    </div >
                    <!-- team col end  -->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="images/user.png" class="img-responsive" alt="">                       
                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4 style="color:black">XXXXXXX</h4>
                            <em style="color:black">XXXXX</em>
                        </div>
                    </div> 
                    <!-- team col end  -->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="images/user.png" class="img-responsive" alt="">                     
                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4 style="color:black">XXXXXXXXXX</h4>
                            <em style="color:black">XXXXXXXXXX</em>
                        </div>
                    </div> 
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <!-- team section end  -->
        <div class="cta cta-bg">
            <div class="container text-center scroll-to">
                <h1>suivre votre  dossier </h1>
                <a href="#contact" class="btn btn-white btn-radius btn-lg">Connctez-vous</a>
            </div>
        </div>
        <!--call to action--> 

        <section id="work" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Bahmou</span> Assurance</h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                            Découvrez notre offre .
                            </p>
                        </div>
                    </div>
                </div><!--heading row-->


                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-1.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-1.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Assurance Plaisance</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-2.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-2.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6> Assurance Chasse</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-3.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-3.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Assurance d'Epargne</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-4.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-4.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Assurance Santé </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-5.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-5.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Assurance Moto</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-6.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-6.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6> Assurance Auto
</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-7.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-7.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Assurance Voyage</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-8.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-8.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6> Assurance Habitation
</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-9.jpeg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-9.jpeg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Services d’assistance</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                   
                </div><!--work row-->
            </div>
        </section><!--work section end-->


      C <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Actualités </span> assurance Bahmou</h1> 
                            <span class="border-line"></span>
                           
                        </div>
                    </div>
                </div>
                <!-- heading row -->
            </div>
            <!-- container -->

            <div class="news-wrapper  container-fluid">
                <div class='row'>
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">  2022</h4>
                            <h3 class="title">Les voitures qui sont dépassés 15 ans n'ont pas le droit de bénéficier de sevices dépanage </h3>
                            <span class="border-line"></span>
                            <p class="author">Par SAHAM</p>
                        </div>
                    </a>
                </div>
                <!-- news col -->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-2.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date"> 2022</h4>
                            <h3 class="title">Lancement de noveau  programme Fid's <br> SAHAM de fidélité unique et exclusif qui <br> vous permet de bénéficier d’avantages <br> chez nous .
                                
                            </h3>
                            
                            <span class="border-line"></span>
                            <p class="author">Par SAHAM</p>
                        </div>
                    </a>
                </div>
                <!-- news col -->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-3.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date"> 2022</h4>
                            <h2 class="title">Lancement de Assur’Auto Premium est un produit unique comprenant à la fois des prestations d’assurance et d’assistance et visant à vous offrir un accompagnement de Bout en Bout en cas d’accident pour vous, vos passagers ou votre véhicule. </h2>
                            <span class="border-line"></span>
                            <p class="author">Par SAHAM</p>
                        </div>
                    </a>
                </div>
                <!-- news col -->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">2022</h4>
                            <h2 class="title">Assur’Auto Premium est un produit unique comprenant à la fois des prestations d’assurance et d’assistance et visant à vous offrir un accompagnement de Bout en Bout en cas d’accident pour vous, vos passagers ou votre véhicule. </h2>
                            <span class="border-line"></span>
                            <p class="author">Par SAHAM</p>
                        </div>
                    </a>
                </div>
                <!-- news col -->
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!-- news section end -->
        <div class="cta">
            <div class="container text-center scroll-to">
                <h1>L'assurance sur mesure pour optimiser votre budget!</h1>
                <a href="https://www.google.com/maps/dir/30.4170614,-9.5784862/SAHAM+Assurance+-+Groupe+Fikri+G.F.+Assurances+Bahamou,+n%C2%B04,+bloc+C,+Tiznit+85000/@30.054335,-9.899633,10z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0xdbb113ffc7fec9d:0x7ba9f369623b2a19!2m2!1d-9.736697!2d29.6973271!3e0" class="btn btn-border-black btn-radius btn-lg">Y Allez</a>
            </div>
        </div>
        <!-- call to action--> 


        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-1">
                        <div class="row contact-details">
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-location-outline"></i>
                                <h4>n°4, bloc C - Amicale des fonctionaires
85000 Tiznit</h4>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-email-outline"></i>
                                <h4>assurances.bahmou@sahamassurance.com</h4>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-telephone-outline"></i>
                                <h4>05286-00303 </h4>
                            </div>
                        </div><!--contact details-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

                   
                        <div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
                <div class="slide-items">
					<img  style="
  width: 200px;
  height: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
border-radius: 20%;" src="images/bg-4.png" alt="" >
                    </div>
				</div>

				<form action="{{ route('logout') }}" class="contact100-form validate-form" method="post">
                                        @csrf
					<span class="contact100-form-title">
						Contact Form
                                            </span>
                                            @if(session()->has('message'))
                                                <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif

					<div class="form-group col-xs-12 controls validate-input" data-validate = "Name is required">
                    	<i class="fa fa-user" aria-hidden="true"></i>
						<input class="form-control" type="text" name="name" placeholder="Nom et prénom">
						<span class="focus-form-control"></span>
						<span class="symbol-form-control">
						
                                            </span>
                                            @error('name')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

					<div class="form-group col-xs-12 controls validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
						<input class="form-control" type="text" name="email" placeholder="Email">
						<span class="focus-form-control"></span>
						<span class="symbol-form-control">
                        
						</span>
                                            </div>
                                            <div class="form-group col-xs-12 controls validate-input" data-validate = "Subject is required">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
		        			<input class="form-control" type="text" name="subject" placeholder="Objet">
						<span class="focus-form-control"></span>
						<span class="symbol-form-control">
							<i class="fa fa-envelope" aria-hidden="true"></i>
                                                </span>
                                                @error('subject')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
    
                        
					<div class="form-group col-xs-12 controls validate-input" data-validate = "Message is required">
						<textarea class="form-control" name="content" placeholder="Message"></textarea>
                                        <span class="focus-form-control"></span>
                                        @error('content')
                                           <span class="text-danger"> {{ $message }} </span>
                                         @enderror
                                        </div>
                
					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
							Envoyer 
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>



                    </div>
                </div>
            </div>
        </section><!--contact section end-->

        <footer class="footer">
            <div class="container text-center">
                <span class="alo">Assurance Bahmou</span>
                <ul class="social list-inline">
                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                    <li><a href="https://fr-fr.facebook.com/pages/category/Insurance-company/Assurance-Bahmou-%D8%AA%D8%A3%D9%85%D9%8A%D9%86%D8%A7%D8%AA-%D8%A8%D8%AD%D9%85%D9%88-288587061572985/"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                </ul>
                <span class="copyright">&copy; Copyright 2022. Assurance Bahamou </span>
            </div>
        </footer>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{url('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{url('js/moderniz.min.js')}}" type="text/javascript"></script>
        <script src="{{url('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="{{url('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{url('js/jquery.flexslider-min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/parallax.min.js')}}"></script> 
        <script type="text/javascript" src="{{url('js/jquery.prettyPhoto.js')}}"></script>	       
        <script type="text/javascript" src="{{url('js/jqBootstrapValidation.js')}}"></script>
        <!--revolution slider scripts-->
        <script src="{{url('rs-plugin/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{url('rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>  
        <script src="{{url('js/template.js')}}" type="text/javascript"></script>
        <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


    </body>
</html>
