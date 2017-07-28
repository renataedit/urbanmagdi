<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="author" content="" />
    <meta name="keywords"
          content="" />

    <meta name="dc.language" content="en" />
    <meta name="dc.title" content="" />
    <meta name="dc.description" content="" />
    <meta property="og:image" content="" />

    <?php wp_head(); ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento&amp;subset=latin-ext" rel="stylesheet">

</head>
<body <?php body_class('index'); ?> id="page-top">

<!--[if lt IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->
<header>
    <!-- Navigation -->
    <div class="container-fluid">
        <section class="navbar-photochill no-padding">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a id="navbar-brand" class="col-lg-1 page-scroll" href="<?php echo home_url(); ?>">
                                <img src="<?php bloginfo('template_url') ?>/images/logo2.png" alt="Logó" width="200">
                            </a>
                        </div>

                        <?php
                        wp_nav_menu([
                                'menu'            => 'Main Menu',
                                'theme_location'  => 'primary',
                                'depth'           => 2,
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse navbar-exl-collapse',
                                'container_id'    => 'navbar-collapse-1',
                                'menu_class'      => 'nav navbar-nav navbar-screen navbar-right',
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
//                                'walker'          => new PCMyWalkerNavMenu()
                        ]);
                        ?>
                    </div>
                </nav>
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
</header>
<div class="content">
