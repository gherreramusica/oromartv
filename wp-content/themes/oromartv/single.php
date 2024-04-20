<?php
//Template Name: Standard
?>
<?php get_header('noticias'); ?>
        
        <div class="single-container">
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
                <div class="single-main">
                        <div class="left-side-bar">
                                <a class="category-single" href="<?php the_permalink() ?>"><p class="categoria"><?php
                                        $categories = get_the_category();

                                        // Verifica si hay al menos una categoría
                                        if ($categories) {
                                        $first_category = $categories[0]; // Obtén la primera categoría

                                        // Muestra la primera categoría en un enlace
                                        echo '<a class="category-single" href="' . get_category_link($first_category->term_id) . '">';
                                        echo '<p class="categoria">' . $first_category->name . '</p>';
                                        echo '</a>';
                                        }
                                ?></p></a>
                        </div>
                       
                        <div class="main-single">
                                <section class="single">
                                        
                                        <?php
                
                                        /* Start the Loop */
                                        while ( have_posts() ) : the_post(); 
                                        $post_views = get_post_views(get_the_ID());?>
                
                                        <p class="vistas"><i class="bi bi-eye-fill" style="padding-right: 10px;"></i><?php echo sprintf( _n( '%s vista', '%s vistas', $post_views, 'your_textdomain' ), $post_views );?></p>
                
                                        <?php
                                        endwhile; ?>
                                        <div class="single-content">
                                               
                                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                                <div class="the-extract"><p><?php the_excerpt() ?></p></div>                              
                                                <div class="single-card"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('square')?>" alt=""></a></div>                                              
                                                <div class="avatar-div"><span class="avatar"><?php
                                                    // Obtener el ID del autor de la publicación actual
                                                    $author_id = get_the_author_meta('ID');

                                                    // Mostrar el avatar del autor
                                                    echo get_avatar($author_id, 90); // El segundo parámetro es el tamaño del avatar en píxeles
                                                    ?></span></div> 
                                                <div class="author"><p><?php echo get_the_author() ?></p></div>       
                                                <div class="the-date"><p class="date"><?php echo get_the_date() ?></p></div>
                                                <div class="social-media">
                                                        <div class="icon"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Foromartv.com%2F<?php the_permalink() ?>"><i class="bi bi-facebook"></i></a></div>
                                                        <div class="icon"><a href="https://twitter.com/intent/tweet?url=https://<?php the_permalink() ?>&text=Tu%20mensaje%20aquí"><i class="bi bi-twitter-x"></i></a></div>
                                                        <div class="icon"><a href="whatsapp://send?text=Ver%20enlace%20aquí%20https://<?php the_permalink() ?>"><i class="bi bi-whatsapp"></i></a></div>
                                                        <div class="icon"><a href=""><i class="bi bi-envelope"></i></a></div>
                                                
                                                        <div class="icon icon-comment" id="iconComment"><a href="<?php the_permalink() ?>?showComments=1"><i class="bi bi-chat-left-fill"></i></a></div>
                                                        <div class="commentCount"><?php
                                                            $comments_count = get_comments_number(); // Obtiene el número de comentarios
                            
                                                            if ($comments_count != 0) {
                                                                echo '<p>(' . $comments_count . ')</p>';
                                                            } else {
                                                                echo '';
                                                            }
                                                            ?></div>
                                                </div>
                                               
                                                <div class="the-content"><p><?php  the_content() ?></p></div>
                                                <div class="google">
                                                        <a href="https://news.google.com/publications/CAAqBwgKMIeOtwswlKnOAw?ceid=US:es-419&oc=3"><img  src="<?php bloginfo('template_url') ?>/imagenes/gnews.webp" alt=""></a>
                                                        <a href="https://news.google.com/publications/CAAqBwgKMIeOtwswlKnOAw?ceid=US:es-419&oc=3"><p style="font-size: 15px">Síguenos también en Google News</p></a>
                                                </div>
                                        </div>
                                </section>
                                
                
                        </div>
                                                        
                                                        
                                                        <script>
                                                        // Función para agregar la clase si la URL contiene "?showContent=1"
                                                        function agregarClaseSiEsNecesario() {
                                                        var url = window.location.href;
                                                        var singlePage = document.querySelector('.main-single');

                                                        if (url.includes('?showComments=1')) {
                                                                document.body.classList.add('overflow');
                                                                singlePage.classList.add('opacity-effect')
                                                        }
                                                        }

                                                        // Llamar a la función cuando la página se carga
                                                        window.onload = function() {
                                                        agregarClaseSiEsNecesario();
                                                        };
                                                        </script>
    
                                                        <?php $show_comments = isset($_GET['showComments']) && $_GET['showComments'] == 1;

                                                // Mostrar la sección de comentarios solo si $show_comments es verdadero
                                                if ($show_comments) {
                                                comments_template('/single-comments.php');
                                                }
                                                ?>
        
                                                
                             
                                        
                        <div class="right-side-bar">
                                <div class="single-sideads">
                                        <div class="single-ads">
                                                <p>Publicidad</p>
                                                <!-- /22840647716/INTELIGENTE -->
                                                <div id='div-gpt-ad-1712370911252-0' style='min-width: 200px; min-height: 200px;'>
                                                <script>
                                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1712370911252-0'); });
                                                </script>
                                                </div>
                                        </div>
                                </div>
                
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
                        </div>
                </div>
                <div class="single-related">
                        <div class="body-wrapper"><h2 class="noticias-heading-title">MÁS NOTICIAS</h2></div>
                        <div class="related-post">
                
                        <?php
                                                $homePagePosts = new WP_Query(array(
                                                        'posts_per_page' => 8,
                                                        'offset' => 1
                
                                                ));
                                                 while($homePagePosts->have_posts()) {
                                                        $homePagePosts->the_post(); ?>
                                <div>
                                        <div class="related-card">
                                        <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('single-size')?>" alt=""></a>
                                        </div>
                                        <a href="<?php the_permalink() ?>">
                                                <h2><?php echo wp_trim_words( get_the_title(), 10, '<span class="leer-mas">...</span>'); ?></h2>
                                        </a>
                                </div>
                                <?php } ?>
                        </div>
                        <!-- <div class="body-wrapper"><h2 class="noticias-heading-title">LO MÁS RECIENTE</h2></div>
                        <div class="related-post">
                
                        <?php
                                                $homePagePosts = new WP_Query(array(
                                                        'posts_per_page' => 4,
                                                        'offset' => 1
                
                                                ));
                                                 while($homePagePosts->have_posts()) {
                                                        $homePagePosts->the_post(); ?>
                                <div>
                                        <a href="<?php the_permalink() ?>"><img width="100%" src="<?php the_post_thumbnail_url('custom-size')?>" alt=""></a>
                                        <a href="<?php the_permalink() ?>">
                                                <h2><?php the_title() ?></h2>
                                        </a>
                                </div>
                                <?php } ?>
                        </div> -->
                
                </div>
              

        </div>
        
        
        

        <?php get_footer(); ?>