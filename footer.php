<!-- If is fullwidth need conditional to enable/disable this section -->
</div>
</div>
<footer id="footer">
    <?php echo get_template_part('parts/footer', 'social');?>
    <div class="container">
        <div class="row">
            <!-- This is where the range slider would define how many widget areas display -->
            
            <div id="footer-logo" class="col-md-4">
                <!-- Link in logo here -->
                <a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Juniper-Logo-White-01.png" alt="<?php bloginfo('name');?>"></a>
                <?php echo get_template_part('parts/footer', 'contact-info');?>
            </div>
            
            <div class="col-md-4">
                <?php echo get_template_part('parts/footer', 'form');?>
            </div>
            
            <div class="col-md-4">
                <?php gt_footer_nav();?>
            </div>
        </div>
    </div>
</footer>
<!-- Tracking Code option to go here -->
<?php wp_footer(); ?>
</body>
</html>
