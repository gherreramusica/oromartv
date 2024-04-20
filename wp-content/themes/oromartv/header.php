<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>
    
    <?php wp_head();?>
</head>
<body class="dark">

         
            

      
      
       
        <div class="header-container">
            <header class="header" >
                <div class="wrapper">
                    <div class="menu">
                        <div class="toggle"><div class="bar"></div></div>
                            <div class="logo logo-homepage">
            
                                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/imagenes/OTV400.png" alt=""></a>
                            </div>
                            <nav>
                                <li><a style="color: white" href="<?php echo site_url('/noticiasoromar') ?>">NOTICIAS OROMAR </a></li>
                                <li><a style="color: white" href="https://oromartv.com/category/deportes-nti/">DEPORTES OROMAR</a></li>
                                <li><a style="color: white" href="<?php echo site_url('/noticieros') ?>">NOTICIEROS ANTERIORES</a></li>   
                                <li><a style="color: white" href="<?php echo site_url('/reportes') ?>">REPORTE DE SEÑAL</a></li>       
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
                                <div class="vivo-header vivo"><a href="<?php echo site_url('/tv-en-vivo') ?>"><span></span><span></span><p>AL AIRE</p></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <?php include('offcanvas.php') ?>