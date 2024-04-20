<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>
    <?php wp_head();?>
</head>
<body class="body-single">
    
<header class="header-noticias" >
            <div class="header-noticias-wrapper">
                <div class="menu">
                    <div class="toggle"><div class="bar"></div></div>
                        <div class="logo-noticias">
                        
                            <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/imagenes/OTV400.png" alt=""></a>
                        </div>
                        <nav>
                            <li><a style="color: white" href="<?php echo site_url('/noticiasoromar') ?>">Noticias</a></li>
                            <li><a style="color: white" href="https://oromartv.com/category/deportes-nti/">Deportes</a></li>
                            <li><a style="color: white" href="<?php echo site_url('/tv-en-vivo') ?>">Señal en vivo</a></li>
                                               
                        </nav>
                        
                    </div>
                
                    <div class="right-header">
                    <?php if(is_user_logged_in()){?>
                                <li class="profile-avatar" ><span><?php echo get_avatar(get_current_user_id(), 40); ?></span><span><a style="color: white" href="<?php echo wp_logout_url('/') ?>">Salir</a></span></li>
                            <?php } else { ?>
                                <div class="user"><div class=""><a href="<?php echo esc_url(site_url('/wp-login.php')) ?>">Iniciar Sesión</i></a></div></div>                    
                            <?php } ?>  
                        <!-- <div class="social-media-header">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-tiktok"></i></a>
                        </div> -->
                        <div class="al-aire">
                            <div class="vivo-header vivo-header-noticias vivo"><a href="<?php echo site_url('/tv-en-vivo') ?>"><span></span><span></span><p>Al AIRE</p></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="nav-menu">
            <div class="nav-menu-wrapper">
                <!-- <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button' ); ?></button>
                </form> -->
                <div class="offcanvas-header">
                    <h3>SECCIONES</h3>
                    <hr>
                </div>
                
                <div class="section-menu">
                    <div class="sectionA">
                        <div><a href="<?php echo site_url('/noticiasoromar') ?>">NOTICIAS OROMAR</a></div>
                        <div><a href="https://oromartv.com/category/deportes-nti/">DEPORTES OROMAR</a></div>
                    </div>
                    <div class="sectionB">
                        <div><a href="<?php echo site_url('/tv-en-vivo') ?>">TV VIVO</a></div>                   
                    </div>
                </div><br>
                <div class="offcanvas-header">
                    <h3>LINKS ÚTILES</h3>
                    <hr>
                </div>
                <div class="section-menu">
                    <div class="sectionA">
                        <div><a href="<?php echo site_url('/noticieros') ?>">NOTICIEROS ANTERIORES</a></div>
                        <div><a href="https://oromartv.com/category/noticias-oromar/entrevistas/">ENTREVISTAS</a></div>
                        <div><a href="https://oromartv.com/category/programas/acorralada/">ACORRALADA</a></div>
                        <div><a href="https://oromartv.com/category/el-color-de-la-pasion-2/">EL COLOR DE LA PASIÓN</a></div>
                    </div>
                    <div class="sectionB">
                    <div><a href="https://oromartv.com/category/programas/novelas/mi-corazon-es-tuyo-2/">MI CORAZÓN ES TUYO</a></div>
                        <div><a href="https://oromartv.com/category/salud/">VIDA SANA</a></div>
                        <div><a href="https://oromartv.com/category/lomastrend/">LO MÁS TREND</a></div>
                        <div><a href="<?php echo site_url('/reportes') ?>">REPORTE DE SEÑAL</a></div>
                    </div>
                </div><br>
                    <div class="offcanvas-header">
                        <h3>OTROS</h3>
                        <hr>
                    </div>
                    <div class="section-menu">
                        <div class="sectionC">
                            <div><a href="<?php echo site_url('/') ?>">MI CUENTA</a></div>
                            <div><a href="<?php echo site_url('/') ?>">PAUTA CON NOSOTROS</a></div>
                            <div><a href="<?php echo site_url('/') ?>">TRABAJA CON NOSOTROS</a></div>                      
                            <div><a href="<?php echo site_url('/') ?>">AVISO LEGAL</a></div>
                        </div>
                        <div class="sectionD">
                            
                            <div><a href="<?php echo site_url('/politica-editorial') ?>">LÍNEA EDITORIAL</a></div>
                            <div><a href="<?php echo site_url('/') ?>">RENDICIÓN DE CUENTAS</a></div>
                            <div><a href="<?php echo site_url('/') ?>">POLÍTICA DE PRIVACIDAD</a></div>
                            <div><a href="<?php echo site_url('/politica-de-cookies') ?>">POLÍTICA DE COOKIES</a></div>
                           
                        </div>
                    </div>
                </div>
                <div class="social-media">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href="https://twitter.com/oromartv"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://facebook.com/oromartvec"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/oromartelevision"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCzFe9cWL6OUi141xZj1pzkA"><i class="bi bi-youtube"></i></a>
                                <a href="https://tiktok.com/oromartelevision"><i class="bi bi-tiktok"></i></a>                                                     
                </div>
            </div>           
        </div>