<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>
    <?php wp_head();?>
   
</head>
<body class="body-archive">
<div class="top-banner">
            <div class="ad-top">
            </div>
        </div>
        <div class="header-container">
            <header class="header-noticias" >
                <div class="header-noticias-wrapper">
                    <div class="menu">
                        <div class="toggle"><div class="bar"></div></div>
                            <div class="logo-noticias">
            
                                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/imagenes/OTV400.png" alt=""></a>
                            </div>
                            <nav>
                                <li><a style="color: white" href="<?php echo site_url('/') ?>">Inicio</a></li>
                                <li><a style="color: white" href="<?php echo site_url('/noticiasoromar') ?>">Noticias Oromar</a></li>
                                <li><a style="color: white" href="https://oromartv.com/category/deportes-nti/">Deportes Oromar</a></li>
                                <li><a style="color: white" href="<?php echo site_url('/tv-en-vivo') ?>">Señal en vivo</a></li>
            
                            </nav>
            
                        </div>
            
                        <div class="right-header">
                        <?php if(is_user_logged_in()){?>
                                    <li class="profile-avatar" ><span><?php echo get_avatar(get_current_user_id(), 40); ?></span><span><a style="color: white" href="<?php echo wp_logout_url('/') ?>">Salir</a></span></li>
                                <?php } else { ?>
                                    <div class="user"><div class=""><a href="<?php echo esc_url(site_url('/wp-login.php')) ?>">Ingresar</a></div></div>
                                <?php } ?>
                            <div class="social-media-header">
                                <a href="https://twitter.com/oromartv"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://facebook.com/oromartvec"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/oromartelevision"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCzFe9cWL6OUi141xZj1pzkA"><i class="bi bi-youtube"></i></a>
                                <a href="https://tiktok.com/oromartelevision"><i class="bi bi-tiktok"></i></a>
                            </div>
                            <div class="al-aire">
                                <div class="vivo-header vivo-header-noticias vivo"><a href="<?php echo site_url('/livestream') ?>"><span></span><span></span><p>Al AIRE</p></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <?php include('offcanvasful.php') ?>