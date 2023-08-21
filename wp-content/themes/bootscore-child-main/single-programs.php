<?php
/**
 * Template Post Type: programs
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
              <?php bootscore_post_thumbnail(); ?>
            </header>

            <div class="entry-content">
              <?php 
              $enroll_now_link = get_field('enroll_now_link');
              $enroll_amount = get_field('enroll_amount');
              $program_language = get_field('program_language');
              $program_by_doctor = get_field('program_by_doctor');
              $program_guide = get_field('program_guide');
              $selected_doctors = get_field('selected_doctors');
              $program_duration = get_field('program_duration');
              $program_details = get_field('program_details');
              ?>
              <h1><?php the_title(); ?></h1>
              <ul>
                <li>Enroll Now: <?= $enroll_now_link;?></li>
                <li>₹ <?= $enroll_amount;?></li>
                <li>Language: <?= $program_language;?></li>
                <li>Program Hosted By:<?= $program_by_doctor->post_title;?></li>
                <li>Program Guide: <?= $program_guide;?></li>
                <li>Selected Doctors:<?php foreach($selected_doctors as $selected_doctor){
                    
                    echo $selected_doctor->post_title;}?></li>
                <li>Dureation:<?= $program_duration;?></li>
                <li>Details: <?= $program_details;?></li>
              </ul>
            </div>

          </main>

        </div>
        <?php //get_sidebar(); ?>
      </div>

    </div>
  </div>

<?php
get_footer();
