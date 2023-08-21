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
            ?>
                <article class="post-<?= get_the_ID();?> col-12 col-sm-6 col-lg-3">
                        <a href="<?= $link; ?>"><img src="<?= $image_url;?>" alt="" height="220px" width="220px"/></a>
                        <div class="product-name text-center"><?= $name; ?></div>
                </article>
            <?php }?>
        </div>
    </div>
<?php }
wp_reset_postdata();
 
get_footer();
?>