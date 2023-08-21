<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

  <div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-5">
    <div id="primary" class="content-area">

      <?php bs_after_primary(); ?>

      <div class="row">
        <div class="<?= bootscore_main_col_class(); ?>">

          <main id="main" class="site-main">

            <header class="page-header mb-4">
              <h1><?php post_type_archive_title(); ?></h1>
            </header>

            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <div class="card horizontal mb-4">
                  <div class="row g-0">

                    <?php if (has_post_thumbnail()) : ?>
                      <div class="col-lg-6 col-xl-5 col-xxl-4">
                        <?php
                        $program_by_doctor = get_field('program_by_doctor');
                        $program_duration = get_field('program_duration');
                        $program_guide = get_field('program_guide');
                        $enroll_amount = get_field('enroll_amount');
                        $enroll_now_link = get_field('enroll_now_link');
                        ?>
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('medium', array('class' => 'card-img-lg-start')); ?>
                        </a>
                      </div>
                    <?php endif; ?>

                    <div class="col">
                      <div class="card-body">

                        <?php bootscore_category_badge(); ?>

                        <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                          <?php the_title('<h2 class="blog-post-title h5">', '</h2>'); ?>
                        </a>
                        <span>By <?= $program_by_doctor->post_title;?></span>
                        <p>Duration: <?= $program_duration; ?></p>
                        <p><?= $program_guide;?></p>
                        <p>₹ <?= $enroll_amount;?></p>
                        <p><a href="<?= $enroll_now_link;?>" class="add_to_cart_button ajax_add_to_cart" name="<?= get_the_title();?>">Enroll Now</a></p>
                       
                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>

            <footer class="entry-footer">
              <?php bootscore_pagination(); ?>
            </footer>

          </main>

        </div>
      </div>

    </div>
  </div>

<?php
get_footer();
