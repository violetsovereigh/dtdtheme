<?php
function work_post_types(){
    register_post_type( 'work', array(
        'public'=>true,
        'labels'=>array(
            'name'=>'Works',
        ),
        'menu_icon'=>'dashicons-admin-appearance',
    ));
   
}
add_action('init' , 'work_post_types' );
?>