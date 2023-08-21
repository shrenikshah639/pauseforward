<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */
$pf_gen_footer_logo = get_field('pf_gen_footer_logo','option');
$pf_footer_first_column_information = get_field('pf_footer_first_column_information','option');
$pf_menopause_society_logo = get_field('pf_menopause_society_logo','option');
$pf_menopause_logo_link = get_field('pf_menopause_logo_link','option');
$pf_contact_title = get_field('pf_contact_title','option');
$pf_phone_icon = get_field('pf_phone_icon','option');
$pf_phone_number = get_field('pf_phone_number','option');
$pf_home_icon = get_field('pf_home_icon','option');
$pf_address = get_field('pf_address','option');
$pf_social_title = get_field('pf_social_title','option');
$pf_instagram_icon = get_field('pf_instagram_icon','option');
$pf_gen_ig_link = get_field('pf_gen_ig_link','option');
$pf_facebook_icon = get_field('pf_facebook_icon','option');
$pf_gen_fb_link = get_field('pf_gen_fb_link','option');
$pf_twitter_icon = get_field('pf_twitter_icon','option');
$pf_twitter_link = get_field('pf_twitter_link','option');

?>

<footer class="pf-mainfooter">

    <div class="<?= bootscore_container_class(); ?>">
     
      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-xl-3 col-lg-3 col-md-3 footer-inner ft-logo">
          <?php if($pf_gen_footer_logo){ ?>
            <a href="<?= home_url(); ?>">
              <img src="<?= $pf_gen_footer_logo['url'];?>" alt="pauseforward" />
            </a>
          <?php } ?>  
          <?php if($pf_footer_first_column_information){ ?>
            <p><?= $pf_footer_first_column_information;?></p>
          <?php } ?>  
          <?php if($pf_menopause_society_logo){ ?>  
            <a href="<?= $pf_menopause_logo_link;?>">
              <img src="<?= $pf_menopause_society_logo['url'];?>" alt="Indian Menopause Society"/>
            </a>
          <?php } ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-xl-2 col-lg-2 col-md-2 footer-inner ft-comp">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-xl-2 col-lg-2 col-md-2 footer-inner ft-prog">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-xl-3 col-lg-3 col-md-3 footer-inner ft-contact">
          <?php if($pf_contact_title) {?>
          <div class="ft-title">
              <h5><?= $pf_contact_title;?></h5>
            </div>
           <?php }?> 
            <div class="ct-det">
              <ul>
                <?php if($pf_phone_number && $pf_phone_icon) { ?>
                  <li>
                    <a href="tel:+91<?= $pf_phone_number;?>">
                      <img src="<?= $pf_phone_icon['url'];?>" alt="phone number">
                      <span>+91 <?= $pf_phone_number;?></span>
                    </a>
                </li>
                <?php } ?>
                <?php if($pf_address && $pf_home_icon) { ?>
                  <li>
                      <img src="<?= $pf_home_icon['url'];?>" alt="address">
                      <span><?= $pf_address;?></span>
                  </li>
                <?php } ?>
              </ul>
            </div>
        </div>
        
        <!-- Footer 5 Widget -->
        <div class="col-xl-2 col-lg-2 col-md-2 footer-inner ft-social">
          <?php if($pf_social_title) {?>
            <div class="ft-title">
              <h5><?= $pf_social_title;?></h5>
            </div>
            <?php }?>
            <div class="ft-social-inner">
              <?php if($pf_gen_ig_link && $pf_instagram_icon) {?>
                <a href="<?= $pf_gen_ig_link; ?>"><img src="<?= $pf_instagram_icon['url'];?>" alt="instagram"></a>
              <?php } ?>
              <?php if($pf_twitter_link && $pf_twitter_icon) {?>
                <a href="<?= $pf_twitter_link;?>"><img src="<?= $pf_twitter_icon['url']; ?>" alt="twitter"></a>
              <?php } ?>
              <?php if($pf_gen_fb_link && $pf_facebook_icon) {?>
                <a href="<?= $pf_gen_fb_link; ?>"><img src="<?= $pf_facebook_icon['url'];?>" alt="facebook"></a>
              <?php } ?>
            </div>
        </div>

      </div>
    </div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
