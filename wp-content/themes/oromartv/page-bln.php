<?php /* Template Name: BLN */ ?>

<?php get_header('live'); ?>
        

        <div class="bln-container">
                
        <div class="bln-container-wrapper">
        <div class="logo">
            <img src="https://oromartv.com/wp-content/uploads/2024/04/GUERREROS-EN-LA-REDES.png" alt="">
        </div>
        <div class="guerreros-heading"><h1>ASPIRANTES A BLN</h1></div>
        <div class="overlay"></div>
        
    </div>
    <div class="ad-banner-top">
                        <div class="article-ad">
                                <div class="rotate"><p>Publicidad</p></div>
                                    
                                        <!-- GPT AdSlot 2 for Ad unit 'ANUNCIO_SUPERIOR' ### Size: [[980,120],[980,90],[970,250],[970,90],[930,180],[728,250],[728,90],[480,320],[468,90],[336,280],[250,360],[320,100],[320,50],[300,250],[300,100],[300,50],[250,250],[200,200]] -->
<div id='div-gpt-ad-1619955-2'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1619955-2'); });
  </script>
</div>
<!-- End AdSlot 2 -->
                        </div>
                </div>
    <div class="bln-main-wrapper">
        <div class="voting">
            <div class="title-branded">
                <div class="branding-logo">
                    <p>Gracias al auspicio de</p><a href="https://cablefamilia.com/contactanos/"><img src="https://oromartv.com/wp-content/uploads/2024/04/cable-familia-300x300-1.png" alt=""></a>
                </div>
                <h2>VOTACIONES</h2><p>Selecciona a tu aspirante favorito y haz click en "votar". Tu voto será registrado una sola vez</p>
            </div>
            <div class="encuesta">
              <div class="encuesta-wrapper"><?php echo do_shortcode('[yop_poll id="1"]'); ?></div>  
            </div>
        </div>
        <div class="ad-banner-medium">
                        <div class="article-ad">
                                <div class="rotate"><p>Publicidad</p></div>
                                    
                                        
<!-- GPT AdSlot 1 for Ad unit 'ANUNCIO_MEDIO' ### Size: [[980,120],[980,90],[970,250],[970,90],[930,180],[728,250],[728,90],[480,320],[468,90],[336,280],[250,360],[320,100],[320,50],[300,250],[300,100],[300,50],[250,250],[200,200]] -->
<div id='div-gpt-ad-1619955-1'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1619955-1'); });
  </script>
</div>
<!-- End AdSlot 1 -->
                        </div>
                </div>
        <div class="bln-heading"><h2>ÚLTIMAS NOTICIAS</h2></div>
        <div class="bln-news">
            
        <?php
                                $homePagePosts = new WP_Query(array(
                                        'posts_per_page' => 5,
                                        'category_name' => 'bln', 
                                        'post_type'     => array('post', 'video'),
                                ));

                                while($homePagePosts->have_posts()) {
                                                $homePagePosts->the_post(); ?>
                                <section class="unitarios">
                                       
                                         <div class="card"><a href="<?php the_permalink() ?>"><p><?php echo wp_trim_words( get_the_title(), 20, '<span class="leer-mas">...</span>'); ?></p></a></div>
                                         <div class="thumb"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('main-post') ?>" alt=""></a></div>
                                 </section>
                                 <?php } ?>
        </div>
        <div class="bln-sidebar">
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
                               
                                <div class="newsletter-cf7">
                                                <h3>¿Quieres asistir a BLN en vivo?</h3><br>
                                                <div class="cf7"><?php echo do_shortcode('[contact-form-7 id="e19633f" title="Reservaciones"]') ?></div>
                                                <div class="terminos"><p>Al enviar mi información acepto las <a href="">políticas de privacidad</a> y <a href="">términos y condiciones</a>  </p></div>
                                </div>
                                <div class="single-sideads">
                                        <div class="single-ads">
                                                <p>Publicidad</p>
                                                
                                        </div>
                                </div>
                        </div>
    </div>
    
    <!-- <div class="GER-live">
        <div class="overlay"></div>

    </div> -->
</div>

<?php get_footer(); ?>