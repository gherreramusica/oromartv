<footer>
    <div class="logo-footer">
        <a href="<?php bloginfo('url'); ?>"><img width="" src="<?php bloginfo('template_url'); ?>/imagenes/OTV400.png" alt=""></a>
    </div>
    <div class="footer-bar">
        <ul>
                            <li><a style="color: white" href="<?php echo site_url('/noticieros') ?>">Noticieros Anteriores</a></li>
                            <li><a style="color: white" href="https://oromartv.com/category/deportes-nti/">Deportes Oromar</a></li>
                            <li><a style="color: white" href="<?php echo site_url('/noticiasoromar') ?>">Noticias Oromar</a></li>
                            <li><a style="color: white" href="<?php echo site_url('/tv-en-vivo') ?>">Señal en vivo</a></li>
                            <li><a style="color: white" href="<?php echo site_url('/reportes') ?>">Contacto</a></li>
                            <?php if(is_user_logged_in()){?>
                                <li class="" ><a style="color: white" href="<?php echo wp_logout_url('/') ?>">Salir</a></li>
                            <?php } else { ?>
                                <li class="" ><a style="color: white" href="<?php echo esc_url(site_url('/wp-signup.php')) ?>">Ingresar</a></li>                    
                            <?php } ?>
        </ul>
    </div>
    <div class="social-media-footer">
                                <a href="https://twitter.com/oromartv"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://facebook.com/oromartvec"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/oromartelevision"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCzFe9cWL6OUi141xZj1pzkA"><i class="bi bi-youtube"></i></a>
                                <a href="https://tiktok.com/oromartelevision"><i class="bi bi-tiktok"></i></a>
                        </div>
</footer>
    </div>
    <div class="adress" style=" font-size:13px; background-color: #1e1e1e; color: gray; text-align:center; padding-bottom: 50px;"><p>Avenida Manta-Montecristi Km 6 1/2. Edificio Oromartv. Manta, Ecuador.</p></div>
   
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>     -->
</body>
<?php wp_footer(); ?>
</html>