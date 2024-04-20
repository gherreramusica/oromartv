<?php /* Template Name: Noticias */ ?>

        <?php get_header('noticias'); ?>
         <!-- <div class="notification"><div class="notification-wrapper"><div class="ticker"><span><i class="fa-solid fa-circle-dot"></i></span><h3>URGENTE</h3><p class="news-ticker">Armada estadounidense volverá a operar en Manta-Ecuador</p></div><span class="x"><i class="fa-solid fa-x"></i></span></div></div>  -->
         <button onclick="topFunction()" id="myBtn" title="Ir arriba"><i class="bi bi-chevron-up"></i></button>
    <script>
    // Tu función JavaScript aquí
    function topFunction() {
    // Inicia el desplazamiento suave
    window.scrollTo({top: 0, behavior: 'smooth'});
}

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
            document.getElementById("myBtn").style.opacity = "1";
        } else {
            document.getElementById("myBtn").style.opacity = "0";
        }
    }
    </script>
         <div class="noticias-top">
                <div class="noticias-top-wrapper">
                <?php
                        // Establecer la zona horaria a Guayaquil
                        date_default_timezone_set('America/Guayaquil');

                        // Arreglo de programas de noticias
                        $programasNoticias = array(
                        
                        'Monday' => array(
                                array(
                                'nombre' => 'Desde Tempranito',
                                'hora_inicio' => strtotime('06:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 7am',
                                'hora_inicio' => strtotime('07:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 12pm',
                                'hora_inicio' => strtotime('12:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                        'nombre' => 'Noticias Oromar Estelar',
                                        'hora_inicio' => strtotime('21:00'), // Convertir a formato de tiempo
                                        'descripcion' => 'Lunes a Viernes a las 06h00',
                                        'duracion' => 60, // Duración del programa en minutos
                                        'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                        ),
                                ),
                        'Tuesday' => array(
                                array(
                                'nombre' => 'Desde Tempranito',
                                'hora_inicio' => strtotime('06:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 7am',
                                'hora_inicio' => strtotime('07:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 12h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 12pm',
                                'hora_inicio' => strtotime('12:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 21h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                        'nombre' => 'Noticias Oromar Estelar',
                                        'hora_inicio' => strtotime('21:00'), // Convertir a formato de tiempo
                                        'descripcion' => 'Lunes a Viernes a las 06h00',
                                        'duracion' => 60, // Duración del programa en minutos
                                        'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                        ),
                                ),
                        'Wednesday' => array(
                                array(
                                'nombre' => 'Desde Tempranito',
                                'hora_inicio' => strtotime('06:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 7am',
                                'hora_inicio' => strtotime('07:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 12pm',
                                'hora_inicio' => strtotime('12:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                        'nombre' => 'Noticias Oromar Estelar',
                                        'hora_inicio' => strtotime('21:00'), // Convertir a formato de tiempo
                                        'descripcion' => 'Lunes a Viernes a las 06h00',
                                        'duracion' => 60, // Duración del programa en minutos
                                        'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                        ),
                                ),
                        'Thursday' => array(
                                array(
                                'nombre' => 'Desde Tempranito',
                                'hora_inicio' => strtotime('06:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 7am',
                                'hora_inicio' => strtotime('07:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 12pm',
                                'hora_inicio' => strtotime('12:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                        'nombre' => 'Noticias Oromar Estelar',
                                        'hora_inicio' => strtotime('21:00'), // Convertir a formato de tiempo
                                        'descripcion' => 'Lunes a Viernes a las 06h00',
                                        'duracion' => 60, // Duración del programa en minutos
                                        'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                        ),
                                ),
                        'Friday' => array(
                                array(
                                'nombre' => 'Desde Tempranito',
                                'hora_inicio' => strtotime('06:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 06h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 7am',
                                'hora_inicio' => strtotime('07:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 07h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                array(
                                'nombre' => 'Noticias Oromar 12pm',
                                'hora_inicio' => strtotime('12:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Lunes a Viernes a las 12h00',
                                'duracion' => 60, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                 array(
                                         'nombre' => 'Noticias Oromar Estelar',
                                         'hora_inicio' => strtotime('21:00'), // Convertir a formato de tiempo
                                         'descripcion' => 'Lunes a Viernes a las 21h00',
                                         'duracion' => 60, // Duración del programa en minutos
                                         'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                         ),
                                ),
                        'Sunday' => array(
                                array(
                                'nombre' => 'Noticias Oromar Dominical',
                                'hora_inicio' => strtotime('20:00'), // Convertir a formato de tiempo
                                'descripcion' => 'Domingos 20h00',
                                'duracion' => 30, // Duración del programa en minutos
                                'imagen' => 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg',
                                ),
                                
                        )
                        );
                        

                        // Obtener la hora actual en formato de tiempo
                        $horaActual = time();

                        // Encontrar el programa actual
                        $programaActual = null;
                        $diaActual = date('l'); // Obtener el día actual

                        if (isset($programasNoticias[$diaActual])) {
                        foreach ($programasNoticias[$diaActual] as $programa) {
                                // Convertir la hora de inicio del programa a la zona horaria local
                                $horaInicioLocal = strtotime(date('Y-m-d H:i:s', $programa['hora_inicio']));
                                
                                if ($horaActual >= $horaInicioLocal && $horaActual <= ($horaInicioLocal + $programa['duracion'] * 60)) {
                                $programaActual = $programa;
                                break;
                                }
                        }
                        }

                        // Verificar si hay un programa actual
                        if ($programaActual) {
                        echo '
                        <div class="main-video"><h2>En Vivo: ' . $programaActual['nombre'] . '</h2><br><script type="text/javascript" src="https://services.brid.tv/player/build/brid.min.js"></script> <div id="Brid_11765074" class="brid" style="width:16;height:9;" > </div> <script type="text/javascript"> $bp("Brid_11765074", {"id":"38283","width":"16","height":"9","video":"1403286"}); </script>
                        </div>
                    ';
                        } else {
                                echo '<div class="main-video">' . do_shortcode('[ultimo_video_publicado]') . '</div>';
                        }
                ?>

                       
                        <div class="last-updates">
                                <h2>ÚLTIMAS NOTICIAS</h2><BR>
                                <ul>
                                <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 7,
                                                'category__not_in' => array(14266, 942),
                        
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                        <li><a href="<?php the_permalink() ?>"><?php the_title () ?></a></li>
                                        <?php } ?>
                                </ul>
                        </div>
                        <div class="Destacados">
                                <ul>
                                <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 1,
                                                'category_name' => 'entrevistas',
                                                'post_type' => 'video',
                        
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                        <li>
                                                <h2>LA ENTREVISTA DEL DÍA</h2><br>
                                        <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
                                                <article>
                                                        
                                                       <div class="imagen"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('custom_size')  ?>" alt=""></a></div> 
                                                        <div class="card"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></div>
                                                                                   
                                                </article>
                                        </li>
                                        <?php } ?>
                                        
                                </ul>
                        </div>
                        <div class="Editoriales">
                                <ul>
                                <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 5,
                                                'category_name' => 'economia',
                                                

                        
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                        <li>    
                                                <article>
                                                        <div class="card"><a href="<?php the_permalink() ?>"><h3><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></h3></a></div>
                                                        <div class="imagen"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('main-post') ?>" alt=""></a></div>
                                                </article>
                                                
                                        </li>
                                        <?php } ?>
                                        
                                </ul>
                        </div>
                        <div class="recomendaciones">
                                <ul>
                                <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 5,
                                                'category_name' => 'politica',
                        
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                        <li>    
                                                <article>
                                                        <div class="card"><a href="<?php the_permalink() ?>"><h3><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></h3></a></div>
                                                        <div class="imagen"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('main-post') ?>" alt=""></a></div>
                                                </article>
                                                
                                        </li>
                                        <?php } ?>
                                        
                                </ul>
                        </div>
                        <div class="last-programs">
                                <div><h2>ÚLTIMAS EMISIONES</h2></div>
                                <ul class="last-programs-flex">
                                <?php
                                                        $homePagePosts = new WP_Query(array(
                                                                'post_type' => 'video',
                                                                'posts_per_page' => 6,
                                                                'category_name' => 'noticieros-anteriores',
                                                                                
                                        
                                                        ));
                                                        while($homePagePosts->have_posts()) {
                                                                $homePagePosts->the_post(); ?>
                                        <li><div><a href="<?php the_permalink () ?>"><img src="<?php the_post_thumbnail_url('custom-size') ?>" alt=""></a></div><div><a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a></div></li>
                                        <?php } ?>
                                </ul>
                        </div>
                </div>
         </div>
         
         <div class="ad-banner-top">
                                    <div class="article-ad">
                                        <div class="rotate"><p>Publicidad</p></div>
                                        <!-- GPT AdSlot 2 for Ad unit 'ANUNCIO_MEDIO' ### Size: [[980,120],[980,90],[970,250],[970,90],[930,180],[728,250],[728,90],[480,320],[468,90],[336,280],[250,360],[320,100],[320,50],[300,250],[300,100],[300,50],[250,250],[200,200]] -->
<div id='div-gpt-ad-2377957-2'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-2377957-2'); });
  </script>
</div>
<!-- End AdSlot 2 -->


                                    </div>
        </div>  
         <div class="homepage-noticias">
                
                
                        <div class="main-out">
                         
                        <div class="noticias-banner">
                                        <div class="imagen">
                                        <div class="overlay-noticias-banner"></div>
                                        <img src="https://oromartv.com/wp-content/uploads/2024/04/asamble-nacional_11zon.jpeg" alt="">
                                        
                                                <div class="body-wrapper"><h3 class="noticias-heading-title">Política</h3></div></div>
                                                
                                                <main class="main-middle-noticias">
                                        
                                                <?php
                                                $homePagePosts = new WP_Query(array(
                                                        'posts_per_page' => 1,
                                                        'category_name' => 'politica'
                                                       
                                                ));
                                                 while($homePagePosts->have_posts()) {
                                                        $homePagePosts->the_post(); ?>
                                                        <section class="main-post">
                                                                <div class="">
                                                                        <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('main-post') ?>" alt=""></a></div>
                                                                        <div class="content"><p>
                                                                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                                                        <p class="date"><?php echo get_the_date() ?></p></div>
                                                                </div>
                                                         </section>
                                                        <?php }
                                                 ?>
                                                <?php
                                                $homePagePosts = new WP_Query(array(
                                                        'posts_per_page' => 4,
                                                        'category_name' => 'politica',
                                                        'offset' => 1
                                                ));
                                                 while($homePagePosts->have_posts()) {
                                                        $homePagePosts->the_post(); ?>
                                                        <section class="list-post">
                                                                <div class="list-cards">
                                                                        <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('custom-size') ?>" alt=""></a></div>
                                                                        <div class="content">
                                                                        <h2><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></a></h2>
                                                                        <p class="date"><?php echo get_the_date() ?></p></div>
                                                                </div>
                                                                <?php }?>
                                                        </section>
                                        </main>
                                </div>
                                <main class="main-middle-noticias">
                                <div class="body-wrapper"><h3 class="noticias-heading-title">SEGURIDAD</h3></div>
                        
                                        <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 1,
                                                'category_name' => 'seguridad'       
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                                <section class="main-post">
                                                        <div class="">
                                                                <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('square') ?>" alt=""></a></div>
                                                                <div class="content">
                                                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        
                                                                <p class="date"><?php echo get_the_date() ?></p></div>
                                                        </div>
                                                 </section>
                                                <?php }
                        
                                         ?>
                                        <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 4,
                                                'category_name' => 'seguridad',
                                                'offset' => 1
                        
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                                <section class="list-post">
                                                        <div class="list-cards">
                                                                <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('custom-size') ?>" alt=""></a></div>
                                                                <div class="content">
                                                                <h2><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></a></h2>
                        
                                                                <p class="date"><?php echo get_the_date() ?></p></div>
                                                        </div>
                                                        <?php }?>
                                                </section>
                        
                                </main>
                                <div class="noticias-banner">
                                
                                        <div class="imagen">
                                        <div class="overlay-noticias-banner"></div>        
                                        <img src="https://oromartv.com/wp-content/uploads/2024/04/Bolsa-de-Valores.webp" alt="">
                                        
                                                <div class="body-wrapper"><h3 class="noticias-heading-title">ECONOMÍA</h3></div></div>
                                        <main class="main-middle-noticias">
                                        
                                                <?php
                                                $internacionalesPosts = new WP_Query(array(
                                                        'posts_per_page' => 1,
                                                        'category_name' => 'economia'
                                                ));
                                                 while($internacionalesPosts->have_posts()) {
                                                        $internacionalesPosts->the_post(); ?>
                                                        <section class="main-post">
                                                                <div class="">
                                                                        <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('square') ?>" alt=""></a></div>
                                                                        <div class="content"><p>
                                                                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                                                        <p class="date"><?php echo get_the_date() ?></p></div>
                                                                </div>
                                                         </section>
                                                        <?php }
                                                 ?>
                                                <?php
                                                $internacionalesPosts = new WP_Query(array(
                                                        'posts_per_page' => 4,
                                                        'category_name' => 'economia',
                                                        'offset' => 1
                                                ));
                                                 while($internacionalesPosts->have_posts()) {
                                                        $internacionalesPosts->the_post(); ?>
                                                        <section class="list-post">
                                                                <div class="list-cards">
                                                                        <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('custom-size') ?>" alt=""></a></div>
                                                                        <div class="content">
                                                                        <h2><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></a></h2>
                                                                        <p class="date"><?php echo get_the_date() ?></p></div>
                                                                </div>
                                                                <?php }?>
                                                        </section>
                                        </main>
                                </div>
                                
                                <main class="main-middle-noticias">
                                <div class="body-wrapper" ><h3 class="noticias-heading-title">Internacionales</h3></div>
                                        <?php
                                        $saludPosts = new WP_Query(array(
                                                'posts_per_page' => 1,
                                                'category_name' => 'internacionales',
                        
                        
                                        ));
                                         while($saludPosts->have_posts()) {
                                                $saludPosts->the_post(); ?>
                                                <section class="main-post">
                                                        <div class="">
                                                                <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('main-post') ?>" alt=""></a></div>
                                                                <div class="content">
                                                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        
                                                                <p class="date"><?php echo get_the_date() ?></p></div>
                                                        </div>
                                                 </section>
                                                <?php }
                        
                                         ?>
                                        <?php
                                        $saludPosts = new WP_Query(array(
                                                'posts_per_page' => 4,
                                                'category_name' => 'internacionales',
                                                'offset' => 1
                        
                                        ));
                                         while($saludPosts->have_posts()) {
                                                $saludPosts->the_post(); ?>
                                                <section class="list-post">
                                                        <div class="list-cards">
                                                                <div class="card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('custom-size') ?>" alt=""></a></div>
                                                                <div class="content">
                                                                <h2><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></a></h2>
                        
                                                                <p class="date"><?php echo get_the_date() ?></p></div>
                                                        </div>
                                                        <?php }?>
                                                </section>

                                               
                        
                                </main>
                               <?php
                                $homePagePosts = new WP_Query(array(
                                        'posts_per_page' => 5,
                                        'category__not_in' => array(14266, 942), 

                                ));

                                while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                <section class="unitarios">
                                       
                                         <div class="card"><a href="<?php the_permalink() ?>"><p><?php echo wp_trim_words( get_the_title(), 20, '<span class="leer-mas">...</span>'); ?></p></a></div>
                                         <div class="thumb"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('main-post') ?>" alt=""></a></div>
                                 </section>
                                 <?php } ?>
                                
                        </div>
                        <div class="sidebar">
                                <!-- <div class="latest">
                                        <div>
                                                <h2>LO ÚLTIMO</h2><br>
                                        <?php
                                        $homePagePosts = new WP_Query(array(
                                                'posts_per_page' => 5,
                                                'category__not_in' => array(14266),
                                        ));
                                         while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4><br>
                                        <?php }?>
                                        </div>
                                </div> -->
                                <div class="most-popular most-popular-noticias">
                                        <div><h2>LO MÁS VISTO</h2><br>
                                                                        <?php
                                                        
                                                        $args = array(
                                                        'posts_per_page' => 4,
                                                        'meta_key' => 'post_views',
                                                        'orderby' => 'meta_value_num',
                                                        'order' => 'DESC'
                                                        );
                                                        
                                                        $popular_posts = new WP_Query( $args );
                                                        while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
                                                        
                                                        <li><h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4></li><br>
                                                        <?php 
                                                        
                                                        endwhile; ?>
                                        </div>
                                </div>
                               
                               <!-- <div class="newsletter">
                                <div class="mail-chimp">
                                        <div id="mc_embed_shell">
        
                                                <div id="mc_embed_signup">
                                                                <h2>Suscríbete a nuestra Newsletter</h2><br>
                                                                <p>Recibe las noticias de última hora en tu correo</p>
                                                        <form action="https://oromartv.us10.list-manage.com/subscribe/post?u=87992478698b2160f5217831e&amp;id=4abab499a5&amp;f_id=00dbc8e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" novalidate="">
                                                                <div id="mc_embed_signup_scroll">
                                                                
                                                                        <div class="mc-field-group">
                                                                                <input type="email" placeholder="e-mail" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
                                                                        </div>
                                                                        <div id="mce-responses" class="clear foot">
                                                                                <div class="response" id="mce-error-response" style="display: none;"></div>
                                                                                <div class="response" id="mce-success-response" style="display: none;"></div>
                                                                        </div>
                                                                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                                                                                /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                                                                                <input type="text" name="b_87992478698b2160f5217831e_4abab499a5" tabindex="-1" value="">
                                                                        </div>
                                                                        <div class="optionalParent">
                                                                                <div class="clear foot">
                                                                                        <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Enviar">
                                                                                        
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </form>
                                                        <div class="terminos"><p>Al enviar mi información acepto las <a href="">políticas de privacidad</a> y <a href="">términos y condiciones</a>  </p></div>
                                                </div>
                                         </div>
        
                                </div>
                                </div> -->
                                <div class="newsletter-cf7">
                                                <h3>Suscríbete a nuestra Newsletter</h3><br>
                                                <div class="cf7"><?php echo do_shortcode('[contact-form-7 id="a8d6f15" title="Newsletter"]') ?></div>
                                                <div class="terminos"><p>Al enviar mi información acepto las <a href="">políticas de privacidad</a> y <a href="">términos y condiciones</a>  </p></div>
                                </div>
                                <div class="single-sideads">
                                        <div class="single-ads">
                                                <p>Publicidad</p>
                                                <!-- GPT AdSlot 3 for Ad unit 'INTELIGENTE' ### Size: [[300,600],[300,250],[250,250],[200,200],[250,360]] -->
                                                <div id='div-gpt-ad-2377957-3'>
                                                <script>
                                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-2377957-3'); });
                                                </script>
                                                </div>
                                                <!-- End AdSlot 3 -->
                                        </div>
                                </div>
                        </div>
                                </div>
              
        

        <?php get_footer(); ?>