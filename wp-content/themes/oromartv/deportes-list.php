<div>  
                                    <div class="category-lmt category-deportes"><p>Entrevistas Destacadas</p></div>
                                           
                                    <div class="noticias-list-flex ">
                                             
                                        <div class="noticias-card-top">
                                        <?php
                                                $interviewPagePosts = new WP_Query(array(
                                                'posts_per_page' => 1,
                                                'category_name' => 'entrevistas',
                                                'post_type' => 'video'
                                                
                                                ));?>
                                                <?php if ($interviewPagePosts->have_posts() ) : while ($interviewPagePosts->have_posts() ) :$interviewPagePosts->the_post(); ?>
                                            <div class="last-interview">
                                                <div class="title"><?php the_title();?></div>
                                                <div class="thumbnail"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('custom-size');?>" alt=""></a></div>
                                            </div>
                                            <?php endwhile; wp_reset_postdata(); else: ?>
                                                            <article>
                                                                <p>No hay contenido a mostrar</p>
                                                            </article>
                                                            <?php endif; ?>
                                        </div>
                                                
                                                <?php
                                                    $interviewPagePosts = new WP_Query(array(
                                                    'posts_per_page' => 4,
                                                    'category_name' => 'entrevistas',
                                                    'post_type' => 'video',
                                                    'offset' => 1
                                                    ));?>
                                                    <?php if ($interviewPagePosts->have_posts() ) : while ($interviewPagePosts->have_posts() ) :$interviewPagePosts->the_post(); ?> 
                                        <div class="noticias-card-fila noticias-card-fila-hover noticias-card-fila-column deportes-card-fila noticias-card-fila-deportes">
                                            <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                                            <div class="date date-deportes"><p class="">
                                                        <?php
                                                            // Obtener la marca de tiempo de la entrada
                                                            $post_timestamp = get_the_time('U');

                                                            // Obtener la fecha relativa "hace tantos días"
                                                            $post_date_diff = human_time_diff($post_timestamp, current_time('timestamp')) . ' atrás';

                                                            // Mostrar la fecha relativa
                                                            echo $post_date_diff;
                                                            ?></p>
                                            </div>
                                                    
                                        </div>
                                        <?php endwhile; else: ?>
                                                    <article>
                                                        <p>No hay contenido a mostrar</p>
                                                    </article>
                                                    <?php endif; ?>
                                    </div>
                                                
                                                         
                                </div>  
                                <div class="titulo-vertical titulo-vertical-deportes ">
                                    <h2>ENTREVISTAS</h2>
                                </div> 