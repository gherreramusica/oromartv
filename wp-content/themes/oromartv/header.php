<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <?php wp_head();?>
    <style>
        .header-container{
    position: absolute;
    height: 90px;
    width: 100%;
    .header{
        position:absolute ;
        top: 0;
        left: 0; 
        background-color: #1e1e1e00;
        width: 100%;
        z-index: 5; 
        .wrapper{
            margin: auto;
            max-width: var(--lg-container);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            .menu{
                display: flex;
                align-items: center;
                justify-content: space-between;
                .logo{
                    background-color: var(--secondary-color);
                    padding: 10px;
                    img{
                        color: white;
                        width:70px;
                        height: auto;
                    }
                    a{
                        color: rgb(255, 0, 0);
                    }
                }
                .logo-homepage{
                    background-color: #00000000;
                }
                nav{
                    padding-left: 20px;
                    display: flex;
                    justify-content: space-between;
                    gap: 15px;
                    color: rgb(0, 0, 0);
                    li{
                        font-weight: 200;
                        font-size: 18px; 
                        font-family: 'Sofia Sans', sans-serif;
                        text-transform: uppercase;
                    }
                    li:hover{
                        text-decoration: underline;
                        text-decoration-color: white;
                        text-decoration-thickness: 1px;
                        text-decoration-skip-ink: none;
                        text-underline-offset: 5px;   
                    }
                }
            }
            .right-header{
                display: flex;
                align-items: center;
                justify-content: space-between; 
                .profile-avatar{
                    display: flex;
                    gap: 5px;
                    align-items: center;
                    span{
                        font-size: 12px;
                        font-weight: 200;
                        img{
                            width: 40px;
                            height: 40px;
                        }
                        a{
                            font-size: 18px;
                        }
                    }
                }
                .user{
                    color: white;
                    border-right: 1px solid white;
                    padding: 0px 10px;
                    a{
                        color: white;
                        text-transform: uppercase;
                    }
                }
                .social-media-header{ 
                    a{
                        padding-left: 10px;
                        color: white;
                        font-size: 15px;
                    }
                    a:hover{
                        color: var(--secondary-color);
                    }
                }
                .al-aire{
                    display: flex;
                    justify-content: center;
                    width: 100px;
                    background-color: #ff000000;
                    .vivo{
                        width: 80px;
                        padding-left: 15px;
                        position: relative;
                        text-align: center;
                        span{
                            content: '';
                            position: absolute;
                            top: 35%;
                            left: 0px;
                            width: 8px;
                            height: 8px;
                            border-radius: 100%;
                            background-color: rgb(255, 255, 255);
                            border: 1px solid #ff0000;
                            -webkit-animation: live 1.4s infinite ease-in-out;
                            animation: live 1.4s infinite ease-in-out;
                            -webkit-animation-fill-mode: both;
                            animation-fill-mode: both;
                        }
                        
                        span{
                            animation: blink-animation 1s steps(5, start) infinite;
                            -webkit-animation: blink-animation 1s steps(5, start) infinite;
                          }
                          @keyframes blink-animation {
                            0%, 80%, 100% {  
                              transform: scale(.1);
                              -webkit-transform: scale(.1) ;
                            }
                            40%{
                                transform: scale(1);
                                -webkit-transform: scale(1) ;
                              }
                          }
                        span:nth-child(2){
                            -webkit-animation-delay: .16s;
                            animation-delay: .16s;
                            background-color: #ff0000;
                        }
                    }
                    .vivo-header{
                        padding: 5px 0px;
                        border-radius: 5px 5px 5px 5px;
                        background-color: #00000000;
                        color: #ffffff;  
                        a{
                            color: rgb(255, 255, 255);
                            font-size: 15px;
                            font-weight: 400;
                            font-family: 'Sofia Sans', sans-serif;
                        }
                    }
                }
            }
        }
    }  
}
.nav-menu{
    position: fixed;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100vh;  
    background-color: #000000; 
    padding-top: 70px;
    transform: translateY(-200%);
    transition: .3s;
    a{
        color: white;
    }
    div{
        background-color: #1e1e1e00;
        h3{
            font-weight: 200;
            font-size: 12px;
            color: white;
        }
        hr{
            border: .1px solid #c2c2c2;
        }
    }  
    .nav-menu-wrapper{
        width: 90%;
        margin: auto;
        padding-top: 50px;
        .section-menu{
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: start;
        }
        div{
            margin-bottom: 5px;
        }

    }
    .social-media{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 20px !important;
        margin-bottom: 10px;
        padding-top: 10px;
        border-top: 1px solid #2e2e2e;
        margin: auto;
        border: none;
        width: 90%;
        justify-content: start;
        a{
            color: rgb(255, 255, 255);
            font-family: var(--header-titles-font);
            font-weight: 700;
            font-size: 13px;
        }
    }
}
.show{
    display: block;
    z-index: 4;
    transform: translateY(0%);
    transition: .3s;
}

.blink {
    animation: blink-animation 1s steps(5, start) infinite;
    -webkit-animation: blink-animation 1s steps(5, start) infinite;
  }
  @keyframes blink-animation {
    to {
      visibility: hidden;
    }
  }
  @-webkit-keyframes blink-animation {
    to {
      visibility: hidden;
    }
  }





  @media only screen and (max-width: 900px) {

    .header-container {
        height: 61px;
        z-index: 5;
        .header {
            padding: 0px;
            border: none;
            .wrapper {
                max-width: 100%;
                .menu {
                    justify-content: space-between;
                    display: flex;
                    .toggle {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        position: relative;
                        width: 50px;
                        height: 60px;
                        background-color: #1d1d1d;
                        .bar {
                            width: 4px;
                            height: 4px;
                            border-radius: 100%;
                            background-color: #ffffff;
                            color: #ff9100;
                            transition: 0.3s;
                        }
                        .bar:before {
                            content: "";
                            background-color: #ffffff;
                            position: absolute;
                            transform: translateY(-7px);
                            width: 4px;
                            height: 4px;
                            border-radius: 100%;
                            transition: 0.3s;
                        }
                        
                          .bar:after {
                            content: "";
                            background-color: #ffffff;
                            position: absolute;
                            transform: translateY(7px);
                            width: 4px;
                            height: 4px;
                            border-radius: 100%;
                            transition: 0.3s;
                        }
                        
                          .bar.show::before {
                            content: "";
                            width: 20px;
                            height: 2px;
                            position: absolute;
                            left: 5px;
                            background-color: #ffffff;
                            transform: rotate(-40deg);
                            transition: 0.3s;
                        }
                        
                          .bar.show::after {
                            content: "";
                            width: 20px;
                            height: 2px;
                            position: absolute;
                            left: 5px;
                            background-color: #ffffff;
                            transform: rotate(40deg);
                            transition: 0.3s;
                        }
                        
                          .bar.show {
                            width: 30px;
                            height: 2px;
                            background-color: #ffffff;
                            background-color: transparent;
                        }
                    }
                    .logo {
                        padding: 0px;
                        img{
                            padding-left: 10px;
                        }
                      }
                    nav {
                        display: none;
                       
                      }  
                  }
              }
          }
      }

  }
    </style>

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
                                <li><a style="color: white" href="<?php echo site_url('/noticias') ?>">NOTICIAS OROMAR</a></li>
                                <li><a style="color: white" href="<?php echo site_url('/deportes') ?>">Deportes Oromar</a></li>
                                <li><a style="color: white" href="<?php echo site_url('/livestream') ?>">Señal en vivo</a></li>
            
                            </nav>
            
                        </div>
            
                        <div class="right-header">
                        <?php if(is_user_logged_in()){?>
                                    <li class="profile-avatar" ><span><?php echo get_avatar(get_current_user_id(), 40); ?></span><span><a style="color: white" href="<?php echo wp_logout_url('/') ?>">Salir</a></span></li>
                                <?php } else { ?>
                                    <div class="user"><div class=""><a href="<?php echo esc_url(site_url('/wp-login.php')) ?>">Ingresar</a></div></div>
                                <?php } ?>
            
                            <div class="social-media-header">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-youtube"></i></a>
                                <a href=""><i class="bi bi-tiktok"></i></a>
                            </div>
                            <div class="al-aire">
                                <div class="vivo-header vivo"><a href="<?php echo site_url('/livestream') ?>"><span></span><span></span><p>AL AIRE</p></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="nav-menu">
            
            <div class="nav-menu-wrapper">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo _x( 'Buscar en Oromartv', 'label' ); ?></span>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar en Oromartv', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="offcanvas-header">
                    <h3>SECCIONES</h3>
                    <hr>
                </div>
                
                <div class="section-menu">
                    <div class="sectionA">
                        <div><a href="<?php echo site_url('/noticias') ?>">NOTICIAS</a></div>
                        <div><a href="<?php echo site_url('/deportes') ?>">DEPORTES</a></div>
                    </div>
                    <div class="sectionB">
                        <div><a href="<?php echo site_url('/livestream') ?>">EN VIVO</a></div>                   
                    </div>
                </div><br>
                <div class="offcanvas-header">
                    <h3>LINKS ÚTILES</h3>
                    <hr>
                </div>
                <div class="section-menu">
                    <div class="sectionA">
                        <div><a href="<?php echo site_url('/noticias') ?>">LÍNEA EDITORIAL</a></div>
                        <div><a href="<?php echo site_url('/deportes') ?>">RENDICIÓN DE CUENTAS</a></div>
                        <div><a href="<?php echo site_url('/noticias') ?>">POLÍTICA DE PRIVACIDAD</a></div>
                    </div>
                    <div class="sectionB">
                        <div><a href="<?php echo site_url('/noticias') ?>">POLÍTICA DE COOKIES</a></div>
                        <div><a href="<?php echo site_url('/deportes') ?>">AVISO LEGAL</a></div>
                        <div><a href="<?php echo site_url('/reporte') ?>">REPORTE DE SEÑAL</a></div>
                    </div>
                </div><br>
                    <div class="offcanvas-header">
                        <h3>OTROS</h3>
                        <hr>
                    </div>
                    <div class="section-menu">
                        <div class="sectionC">
                            <div><a href="<?php echo site_url('/noticias') ?>">PAUTA CON NOSOTROS</a></div>
                            <div><a href="<?php echo site_url('/deportes') ?>">VIDA SANA</a></div>
                            <div><a href="<?php echo site_url('/programas') ?>">TRABAJA CON NOSOTROS</a></div>
                        </div>
                        <div class="sectionD">
                            <div><a href="<?php echo site_url('/noticias') ?>">MI CUENTA</a></div>
                            <div><a href="<?php echo site_url('/deportes') ?>">APP</a></div>
                            <div><a href="<?php echo site_url('/programas') ?>">TRIVIAS</a></div>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-youtube"></i></a>
                                <a href=""><i class="bi bi-tiktok"></i></a>                                                     
                </div>
            </div>           
        </div>