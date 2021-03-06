<!doctype html>
<html class="no-js" lang="<?php print $language_path; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php print $trans['meta']['title']; ?></title>
        <meta name="description" content="<?php print $trans['meta']['description']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="LV2NcOCZMAPFOVO0bCC2sS_jc8wH8yR3CeUffD2FLeI" />
        <link rel="canonical" href="https://www.mopisweb.com/" />

        <link rel="icon" href="dist/logos/favicon.ico">
        <!-- non-retina iPhone pre iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" sizes="57x57">
        <!-- non-retina iPad pre iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-72x72.png" sizes="72x72">
        <!-- non-retina iPad iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-76x76.png" sizes="76x76">
        <!-- retina iPhone pre iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-114x114.png" sizes="114x114">
        <!-- retina iPhone iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-120x120.png" sizes="120x120">
        <!-- retina iPad pre iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-144x144.png" sizes="144x144">
        <!-- retina iPad iOS 7 -->
        <link rel="apple-touch-icon" href="apple-touch-icon-152x152.png" sizes="152x152">
        <!-- Win8 tile -->

        <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body>
        <div id="page" class="page-front">
        	<header id="header" role="banner">
        		<div class="header-inner">
                    <div class="grid-x grid-padding-x header-top">
                        <div class="cell medium-6 small-5">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="http://www.mopisweb.com/">
                                        <img src="dist/logos/logo.svg" alt="Mopis Web Logo" align="Mopis logo">
                                    </a>
                                </div>
                                <nav class="main-nav main-nav-block" role="navigation">
                                    <ul class="menu vertical">
                                        <li><a href="#services"><?php print $trans['nav'][0]; ?></a></li>
                                        <li><a href="#projects"><?php print $trans['nav'][1]; ?></a></li>
                                        <li><a href="#contact"><?php print $trans['nav'][2]; ?></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="cell medium-6 small-7">
                            <div class="header-right">
                                <div class="language-switcher-block">
                                    <ul class="menu horizontal">
                                        <li><a href="/ca" class="<?php print ($language_path == "ca") ? "active" : ""; ?>">cat</a></li>
                                        <li><a href="/es" class="<?php print ($language_path == "es") ? "active" : ""; ?>">esp</a></li>
                                        <li><a href="/en" class="<?php print ($language_path == "en") ? "active" : ""; ?>">en</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-slogan-block">
                        <div class="grid-x grid-padding-x align-center-middle">
                            <div class="cell medium-6">
                                <?php if(!$error_404): ?>
                                <h1 class="appear-effect">
                                    <span><?php print $trans['slogan'][0]; ?>.</span>
                                    <span><?php print $trans['slogan'][1]; ?>.</span>
                                    <span><?php print $trans['slogan'][2]; ?>.</span>
                                    <span><?php print $trans['slogan'][3]; ?>.</span>
                                </h1>
                                <?php else: ?>
                                    <h1>Your page has not been found..</h1>
                                    <a href="./" class="button button-primary">Back to homepage</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>      
                </div>
                <div class="header-video-block">
                    <div class="header-video-filter"></div>
                    <video autoplay loop class="fullwidth" poster="dist/videos/Snapshots/Mock-up.jpg">
                        <source src="dist/videos/MP4/Mock-up.mp4" type="video/mp4">
                        <source src="dist/videos/WEBM/Mock-up.webm" type="video/wgb">
                    </video>
                </div>
        	</header>
            <main id="main" class="main-container" role="main">
                <section class="teaser-section section-padding">
                    <div class="grid-x grid-padding-x align-center-middle">
                        <div class="cell medium-8 text-center" role="contentinfo">
                            <h2><?php print $trans['about']['title']; ?></h2>
                            <p class="bigger"><?php print $trans['about']['featured']; ?></p>
                            <p><?php print $trans['about']['body']; ?></p>
                        </div>
                    </div>
                </section>
                <section id="services" class="services-section section-padding">
                    <div class="services-block grid-x grid-padding-x align-center-middle">
                        <div class="cell medium-10 large-8">
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/008-browser.svg" alt="Programació web">
                                    <h4><?php print $trans['services'][1]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][1]['description']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/004-drupal-logo.svg" alt="Programació Drupal">
                                    <h4><?php print $trans['services'][2]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][2]['description']; ?>
                                    </div>
                                </div>
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/003-wordpress.svg" alt="Programació Wordpress">
                                    <h4><?php print $trans['services'][3]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][3]['description']; ?>
                                    </div>
                                </div>
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/002-php.svg" alt="Programació PHP">
                                    <h4><?php print $trans['services'][4]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][4]['description']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/001-responsive.svg" alt="Disseny i UX">
                                    <h4><?php print $trans['services'][5]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][5]['description']; ?>
                                    </div>
                                </div>
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/006-smartphone.svg" alt="Aplicacions per dispositius mòbils">
                                    <h4><?php print $trans['services'][6]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][6]['description']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/005-target.svg" alt="Anàlisi SEO">
                                    <h4><?php print $trans['services'][7]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][7]['description']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="projects" class="projects-section section-padding section-primary">
                    <div class="projects-block">
                        <div class="grid-x grid-padding-x align-center-middle row-padding">
                            <div class="cell medium-4 project-item">
                                <img class="project-image" src="dist/images/auditoriAlcudia.jpeg" alt="Auditori d'Alcudia">
                                <h3><?php print $trans['projects'][1]['title']; ?></h3>
                                <div class="project-description">
                                    <?php print $trans['projects'][1]['description']; ?>
                                </div>
                                <p><strong>A project by: </strong><br><img src="dist/images/DitsTicketing.png" width="150" alt="DitsMarketing"></p>
                                
                            </div>
                        </div>
                        <div class="grid-x grid-padding-x align-center-middle row-padding">
                            <div class="cell medium-4 project-item">
                                <video autoplay loop width="350" src="dist/videos/MP4/upfo.mp4" poster="dist/images/upfo.jpeg">
                                    <source src="dist/videos/MP4/upfo.mp4" type="video/mp4">
                                </video>
                                <h3><?php print $trans['projects'][2]['title']; ?></h3>
                                <div class="project-description">
                                    <?php print $trans['projects'][2]['description']; ?>
                                </div>
                                <p><strong>A project by: </strong><br>Urban Photographers Association</p>
                                <a href="http://urbanphotofest.com/" class="button button-secondary small">Website</a>
                            </div>
                            <div class="cell medium-4 project-item">
                                <img class="project-image" src="dist/images/sofpromed.jpeg" alt="Sofpromed">
                                <h3><?php print $trans['projects'][3]['title']; ?></h3>
                                <div class="project-description">
                                    <?php print $trans['projects'][3]['description']; ?>
                                </div>
                                <p><strong>A project by: </strong><br>Sofpromed Investigación Clínica, SLU</p>
                            </div>
                        </div>
                    </div>
                </section>
                <footer id="contact" class="footer-section section-padding section-dark">
                    <div class="grid-x grid-padding-x align-center-middle">
                        <div class="cell medium-8">
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell small-6 medium-4 text-center">
                                    <img src="dist/logos/logo-v3.svg" alt="Mopis logo">
                                    <br>
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x row-padding">
                                <div class="cell medium-4 text-center medium-text-left">
                                    <p><?php print $trans['contact']['left']; ?></p>
                                </div>
                                <div class="cell medium-4 text-center">
                                    <ul class="menu vertical">
                                        <li><a href="tel:650514579" class="tel">650 514 579</a></li>
                                        <li><a href="mailto:info@mopisweb.com" target="_blank">Email</a></li>
                                    </ul>
                                </div>
                                <div class="cell medium-4 text-center medium-text-right">
                                    <ul class="menu vertical">
                                        <li><a href="https://www.facebook.com/mopisweb/">Facebook</a></li>
                                        <li><a href="https://www.linkedin.com/in/llu%C3%ADs-andreu-oliver-obrador-5b709716/">Linkedin</a></li>
                                        <li><a href="#">Skype: lluis.cactus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
        <script src="bower_components/modernizr/modernizr.js"></script>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-44802229-19"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-44802229-19');
        </script>
        <script type="application/ld+json">
            {
                    "@context": "http://schema.org",
                    "@type": ["LocalBusiness"],
                    "name": "Mopis Web",
                    "description": "<?php print $trans['about']['featured']; ?>",
                    "openingHours":["Mo-Fri 9:00-17:00"],
                    "url":"http://www.mopisweb.com/",
                    "logo":"dist/logos/logo.svg",
                    "telephone":"0034650514579", 
                    "address": "Avinguda des Tren, Manacor. 07500. Illes Balears, Spain."
            }
        </script>
        <script type="text/javascript" src="dist/js/app.js"></script>
    </body>
</html>

