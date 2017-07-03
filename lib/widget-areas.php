<?php
// create widget areas: sidebar, footer

    register_sidebar(array(
        'name'=> 'Sidebar',
    	'id' => 'Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
