<?php
/**
 * Template Post Type: doctor
 * @version 5.3.1
 */
get_header();
?>

  <div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-4">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

      <?php the_breadcrumb(); ?>

      <div class="row">
        <div class="<?= bootscore_main_col_class(); ?>">

          <main id="main" class="site-main">

            <header class="entry-header">
                <?php 
                $image_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                $name = get_the_title();
                $link = get_permalink();
                ?>
              <?php the_post(); ?>
              <?php bootscore_category_badge(); ?>
              <h1><?php the_title(); ?></h1>
              <?php bootscore_post_thumbnail(); ?>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>

          </main>

        </div>
        <?php //get_sidebar(); ?>
      </div>

    </div>
  </div>

<?php
get_footer();
