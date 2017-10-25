<!doctype html>
<html class="no-js" lang="<?php print $language_path; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php print $trans['meta']['title']; ?></title>
        <meta name="description" content="<?php print $trans['meta']['description']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
        <script src="bower_components/modernizr/modernizr.js"></script>
    </head>
    <body>
        <div id="page" class="page-front">
        	<header id="header">
        		<div class="header-inner">
                    <div class="grid-x grid-padding-x header-top">
                        <div class="cell medium-6 small-5">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="#">
                                        <img src="dist/logos/logo.svg" align="Mopis logo">
                                    </a>
                                </div>
                                <nav class="main-nav main-nav-block">
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
            <main id="main" class="main-container">
                <section class="teaser-section section-padding">
                    <div class="grid-x grid-padding-x align-center-middle">
                        <div class="cell medium-8 text-center">
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
                                    <img class="service-item-image" src="dist/images/svg/004-drupal-logo.svg" alt="Programació web">
                                    <h4><?php print $trans['services'][2]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][2]['description']; ?>
                                    </div>
                                </div>
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/003-wordpress.svg" alt="Programació web">
                                    <h4><?php print $trans['services'][3]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][3]['description']; ?>
                                    </div>
                                </div>
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/002-php.svg" alt="Programació web">
                                    <h4><?php print $trans['services'][4]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][4]['description']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/001-responsive.svg" alt="Programació web">
                                    <h4><?php print $trans['services'][5]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][5]['description']; ?>
                                    </div>
                                </div>
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/006-smartphone.svg" alt="Programació web">
                                    <h4><?php print $trans['services'][6]['title']; ?></h4>
                                    <div class="service-item-description">
                                        <?php print $trans['services'][6]['description']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell medium-4 service-item text-center">
                                    <img class="service-item-image" src="dist/images/svg/005-target.svg" alt="Programació web">
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
                                <img class="project-image" src="dist/images/auditoriAlcudia.jpeg">
                                <h3><?php print $trans['projects'][1]['title']; ?></h3>
                                <div class="project-description">
                                    <?php print $trans['projects'][1]['description']; ?>
                                </div>
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
                                <br>
                                <a href="http://urbanphotofest.com/" class="button button-secondary small">www</a>
                            </div>
                            <div class="cell medium-4 project-item">
                                <img class="project-image" src="dist/images/sofpromed.jpeg">
                                <h3><?php print $trans['projects'][3]['title']; ?></h3>
                                <div class="project-description">
                                    <?php print $trans['projects'][3]['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer id="contact" class="footer-section section-padding section-dark">
                    <div class="grid-x grid-padding-x align-center-middle">
                        <div class="cell medium-8">
                            <div class="grid-x grid-padding-x align-center-middle row-padding">
                                <div class="cell small-6 medium-3 text-center">
                                    <img src="dist/logos/logo-v3.svg" alt="Mopis logo">
                                </div>
                            </div>
                            <div class="grid-x grid-padding-x row-padding">
                                <div class="cell medium-4 text-center medium-text-left">
                                    <p><?php print $trans['contact']['left']; ?>
                                    </p>
                                </div>
                                <div class="cell medium-4 text-center">
                                    <ul class="menu vertical">
                                        <li><a href="tel:650514579" class="tel">650 514 579</a></li>
                                        <li><a href="mailto:info@mopisweb.com" target="_blank">info@mopisweb.com</a></li>
                                    </ul>
                                </div>
                                <div class="cell medium-4 text-center medium-text-right">
                                    <ul class="menu vertical">
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Linkedin</a></li>
                                        <li><a href="#">Skype</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
        
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script id="__bs_script__">
		    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
		</script>
        <script type="text/javascript" src="dist/js/app.js"></script>
    </body>
</html>

