<?php
get_header();
if ( have_posts() )  {?>
    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) { 
                the_post(); 
                $image_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                $name = get_the_title();
                $link = get_permalink();
                echo 'Webinar Name:'.$name,'<br/>';
                //echo $link;
            }?>
        </div>
    </div>
<?php }
wp_reset_postdata();
 
get_footer();
?>