<div class="comentario-titulo">
    <div class="logo-comentarios">
        <a href="<?php bloginfo('url'); ?>"><img width="50px" src="<?php bloginfo('template_url'); ?>/imagenes/OTV400.png" alt=""></a>
    </div>
    <div>
        <h3>Comentarios</h3>
        <?php if ( have_comments() ) : ?>
            <h4 class="comments-title">
                <?php
                printf(
                    _nx(
                        'Un comentario a "%2$s"',
                        '%1$s comentarios a "%2$s"',
                        get_comments_number(),
                        'comments title',
                        'twentythirteen'
                    ),
                    number_format_i18n( get_comments_number() ),
                    '' . get_the_title() . ''
                );
                ?>
            </h4>
        <?php endif; ?>
    </div>
</div>
<div class="comentario-principal">
    <?php comment_form(); ?>
</div>

<?php
$page_id = 293;
// Obtener solo los comentarios aprobados
$args = array(
    'status' => 'approve',
    'post_id' => $page_id,
);

// Consulta de comentarios
$comments_query = new WP_Comment_Query();
$comments = $comments_query->query($args);

// Organizar los comentarios por comentario padre
$parent_comments = array();
foreach ($comments as $comment) {
    if ($comment->comment_parent == 0) {
        $parent_comments[$comment->comment_ID] = $comment;
    }
}

// Mostrar comentarios padres y sus respuestas
foreach ($parent_comments as $parent_id => $parent_comment) {
    // Mostrar el comentario padre
    ?>
    <div class="oromartv-comments">
        <div class="oromartv-comment-wrapper">
            <div class="author-photo">
                <?php echo get_avatar(get_comment_author_email($parent_comment), 40); ?>
            </div>
            <div class="comment-wrapper">
                <div class="top-card">
                    <div class="author-name"><?php echo get_comment_author($parent_comment); ?></div>
                    <div class="post-date">
                        <?php
                        // Obtener la marca de tiempo del comentario
                        $parent_comment_timestamp = strtotime($parent_comment->comment_date);
                        // Obtener la fecha relativa "hace tantos días"
                        $parent_comment_date_diff = human_time_diff($parent_comment_timestamp, current_time('timestamp')) . ' atrás';
                        // Mostrar la fecha relativa
                        echo $parent_comment_date_diff;
                        ?>
                    </div>
                </div>
                <div class="post-content"><?php comment_text($parent_comment); ?></div>
                <div class="reply-like">
                    <div class="reply-post">
                        <?php
                        // Mostrar el enlace "Responder" para el comentario padre
                        comment_reply_link(array(
                            'depth' => 1,
                            'max_depth' => 2,
                            'before' => '<span class="reply-link">',
                            'after' => '</span>'
                        ), $parent_comment->comment_ID, $parent_comment->comment_post_ID);
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mostrar respuestas (comentarios hijos) dentro del comentario padre -->
        <?php
        $child_args = array(
            'parent' => $parent_id,
            'status' => 'approve',
        );

        $child_comments = get_comments($child_args);

        foreach ($child_comments as $child_comment) {
            ?>
            <div class="child-comment">
                <div class="author-photo">
                    <?php echo get_avatar(get_comment_author_email($child_comment), 20); ?>
                </div>
                <div class="comment-wrapper">
                    <div class="top-card">
                        <div class="author-name"><?php echo get_comment_author($child_comment); ?></div>
                        <div class="post-date">
                            <?php
                            // Obtener la marca de tiempo del comentario
                            $child_comment_timestamp = strtotime($child_comment->comment_date);
                            // Obtener la fecha relativa "hace tantos días"
                            $child_comment_date_diff = human_time_diff($child_comment_timestamp, current_time('timestamp')) . ' atrás';
                            // Mostrar la fecha relativa
                            echo $child_comment_date_diff;
                            ?>
                        </div>
                    </div>
                    <div class="post-content"><?php comment_text($child_comment); ?></div>
                    <div class="reply-like">
                        <div class="reply-post">
                            <?php
                            // Mostrar el enlace "Responder" para el comentario hijo
                            comment_reply_link(array(
                                'depth' => 1,
                                'max_depth' => 2,
                                'before' => '<span class="reply-link">',
                                'after' => '</span>'
                            ), $child_comment->comment_ID, $child_comment->comment_post_ID);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
?>
