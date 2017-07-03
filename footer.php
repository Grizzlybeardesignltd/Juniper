<div class="footer" data-ix="slide-up">
    <?php echo get_template_part('parts/footer', 'social');?>
    <div class="w-container">
        <div class="w-row">
            <div id="footer-logo" class="column-3 w-col w-col-4"><a href="<?php get_bloginfo('url');?>"><img class="image-11" sizes="(max-width: 479px) 77vw, 176px" src="<?php echo get_template_directory_uri(); ?>/images/Juniper-Logo-White-01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/Juniper-Logo-White-01-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/Juniper-Logo-White-01.png 990w" width="176"></a>
                <?php echo get_template_part('parts/footer', 'contact-info');?>
            </div>
            <div class="w-col w-col-4">
                <?php echo get_template_part('parts/footer', 'form');?>
            </div>
            <div class="w-col w-col-4">
                <?php echo get_template_part('parts/footer', 'navbar');?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
