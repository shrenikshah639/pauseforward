<!-- header section start -->
<?php
get_header();
?>
<!-- header section end -->

<!-- banner section start -->
<section class="banner-wrapper bg-clr">
    <div class="container">
        <div class="row">
            <?php
            $banner_right_side_image = get_field('banner_right_side_image');
            $banner_left_title = get_field('banner_left_title');
            $banner_left_subtitle = get_field('banner_left_subtitle');
            $book_virtual_visit_link = get_field('book_virtual_visit_link');
            $free_assessment_link = get_field('free_assessment_link');
            ?>
            <div class="col-12 col-xl-6 align-self-center">
                <?php if ($banner_left_title) { ?>
                    <h1 class="banner-title"><?= $banner_left_title; ?></h1>
                <?php } ?>
                <?php if ($banner_left_subtitle) { ?>
                    <p class="banner-para"><?= $banner_left_subtitle; ?></p>
                <?php } ?>
                <div class="btn-wrapper">
                    <!-- <button class="btn pfbtn-solid">Book Virtual visit <img src="https://team2.devhostserver.com/pause/wp-content/uploads/2023/08/right-arrrow.png" alt="right-arrow"></button> -->
                    <?php if ($book_virtual_visit_link) { ?>
                        <a href="<?= $book_virtual_visit_link; ?>">
                            <button class="btn pfbtn-solid">Book Virtual visit <i class="fa-solid fa-arrow-right-long"></i></button>
                        </a>
                    <?php } ?>
                    <?php if ($free_assessment_link) { ?>
                        <a href="<?= $free_assessment_link; ?>">
                            <button class="btn pfbtn-outline">Take Free Assessment</button>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-xl-6 align-self-center">
                <?php if ($banner_right_side_image) { ?>
                    <div class="banner-img">
                        <img src="<?= $banner_right_side_image['url']; ?>" alt="homebanner">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- banner section end -->
<!-- every women section start -->
<section class="exp-wrapper pf-space">
    <div class="container">
        <div class="row">
            <?php 
            $menopause_experience_title = get_field('menopause_experience_title');
            $selected_menopause_experiences = get_field('selected_menopause_experiences');
            ?>
            <div class="col-md-12">
                <?php if($menopause_experience_title) {?>
                    <h2 class="sec-title title-space"><?= $menopause_experience_title; ?></h2>
                <?php } ?>
            </div>
            <div id="carouselExampleDark" class="carousel slide exp-inner" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $i=0; 
                    foreach( $selected_menopause_experiences as $menopause_experience ){
                        $active_class = ($i == 0) ? 'active' : '';
                        if($i == 0) {
                            $interval = '10000';
                        }
                        elseif($i == 1) {
                            $interval = '2000';
                        }
                        else {
                            $interval = ''; 
                        }                   
                        $content = $menopause_experience->post_content;
                        $image_url = wp_get_attachment_url(get_post_thumbnail_id($menopause_experience->ID));?>
                        <div class="carousel-item <?= $active_class;?>" data-bs-interval="<?= $interval;?>">
                            <div class="exp-inner-det">
                                <div class="lft-sec">
                                    <?php if($image_url){ ?>
                                        <img src="<?= $image_url;?>" alt="<?= get_the_title();?>">
                                    <?php } ?>
                                </div>
                                <div class="rgt-sec">
                                    <p>
                                        <?= $content;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php $i++; } ?>
                </div>
                <div class="carousel-indicators">
                    <?php 
                    $i=0; 
                    foreach( $selected_menopause_experiences as $menopause_experience ){
                        $active_class = ($i == 0) ? 'active' : '';  
                    ?>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i;?>" class="<?= $active_class;?>" aria-label="Slide 1" aria-current="true"></button>
                    <?php $i++; }?>    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- every women section end -->

<!-- menopause symptoms section start -->
<section class="smpt-wrapper pf-btmspace">
    <div class="container">
        <div class="row">
            <?php
                $symptoms_of_menopause_title = get_field('symptoms_of_menopause_title');
                $symptoms_of_menopause_bottom_title = get_field('symptoms_of_menopause_bottom_title');
            ?>
            <div class="col-md-12">
                <?php if($symptoms_of_menopause_title) {?>
                    <h2 class="sec-title title-space"><?= $symptoms_of_menopause_title;?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="smpt-inner">
            <div class="row">
            <?php if( have_rows('symptoms_of_menopause') ){
                while( have_rows('symptoms_of_menopause') ) {
                    the_row();
                    $symptoms_icon = get_sub_field('symptoms_icon');
                    $symptoms_name = get_sub_field('symptoms_name');?>
                    <div class="col-md-3">
                        <div class="symptoms-list">
                            <?php if($symptoms_icon && $symptoms_name) {?>
                                <img src="<?= $symptoms_icon['url'];?>" alt="<?= $symptoms_name;?>">
                                <span><?= $symptoms_name; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                <?php 
                }        
           }
           ?>
                <div class="col-md-12">
                    <?php if($symptoms_of_menopause_bottom_title) { ?>
                        <p class="smpt-text"><?= $symptoms_of_menopause_bottom_title;?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- menopause symptoms section end -->

<!-- our story section start -->
<section class="story-wrapper pf-btmspace">
    <div class="container">
        <div class="row">
            <?php 
                $our_story_title = get_field('our_story_title');
                $our_story_left_side_image = get_field('our_story_left_side_image');
                $our_story_description = get_field('our_story_description');
                $founder_name = get_field('founder_name');
                $founder_linkedin_link = get_field('founder_linkedin_link');
                $founder_associated_society = get_field('founder_associated_society');
                $founder_associated_society_logo = get_field('founder_associated_society_logo');
                $founder_associated_society_link = get_field('founder_associated_society_link');
            ?>
            <div class="col-12 col-xl-6 align-self-center">
                <?php if($our_story_left_side_image){?>
                <img src="<?= $our_story_left_side_image['url'];?>" alt="Rashi Gandhi">
                <?php }?>
            </div>
            <div class="col-12 col-xl-6 align-self-center">
                <?php if($our_story_title){?>
                    <h2 class="sec-title title-space"><?= $our_story_title;?></h2>
                <?php }?>
                <div class="story-inner">
                    <?= $our_story_description;?>
                    <div class="story-link">
                        <div class="founder-det">
                            <?php if($founder_name){?>
                                <h3><?= $founder_name;?></h3>
                            <?php }?>    
                            <div class="pf-profile">
                                <?php if($founder_linkedin_link){?>
                                    <a href="<?= $founder_linkedin_link;?>"><img src="https://team2.devhostserver.com/pause/wp-content/uploads/2023/08/logos_linkedin-icon.png" alt="linkedin">
                                    <p>Rashi Gandhi</p>
                                    </a>
                                <?php }?>    
                            </div>
                        </div>
                        <div class="ims-det">
                            <?php if($founder_associated_society){?>
                                <h3><?= $founder_associated_society;?></h3>
                            <?php }?>
                            <div class="ims-link">
                                <?php if($founder_associated_society_link && $founder_associated_society_logo){?>
                                    <a href="<?= $founder_associated_society_link; ?>"><img src="<?= $founder_associated_society_logo['url'];?>" alt="Indian Menopause Society">
                                    </a>
                                <?php }?>    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our story section end -->

<!-- our vision section start -->
<section class="vision-wrapper pf-btmspace">
    <div class="container">
        <div class="row">
            <?php
            $our_vision_title = get_field('our_vision_title');
            $our_vision_description = get_field('our_vision_description');
            $get_started_link = get_field('get_started_link');
            ?>
            <div class="col-12 col-xl-8 align-self-center">
                <div class="vision-left">
                    <?php if($our_vision_title) {?>
                        <h2 class="sec-title title-space"><?= $our_vision_title;?></h2>
                    <?php } ?>
                    <?php if($our_vision_description) {?>
                        <p><?= $our_vision_description;?></p>
                    <?php } ?>    
                </div>
            </div>
            <div class="col-12 col-xl-4 align-self-center">
                <div class="vision-right">
                    <a href="<?= $get_started_link;?>"><button class="btn pfbtn-white">Get started</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our vision section end -->

<!-- help section start -->
<section class="help-wrapper pf-btmspace">
    <div class="container">
        <div class="row">
            <?php $help_section_title = get_field('help_section_title');?>
            <div class="col-md-12">
                <?php if($help_section_title) { ?>
                    <h2 class="sec-title title-space"><?= $help_section_title;?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="help-inner-wrapper">
        <?php if( have_rows('help_steps') )
        {
                while( have_rows('help_steps') ) 
                { the_row();
                $help_step_title = get_sub_field('help_step_title');
                $help_step_subtitle = get_sub_field('help_step_subtitle');
                $help_step_description = get_sub_field('help_step_description');
                $help_step_image = get_sub_field('help_step_image');
                ?>
                    <div class="help-box">
                        <div class="row">
                            <div class="col-12 col-xl-2 align-self-center">
                                <div class="help-num">
                                    <h4>0<?= get_row_index();?></h4>
                                </div>
                            </div>
                            <div class="col-12 col-xl-10 align-self-center">
                                <div class="help-detail">
                                    <div class="help-txt">
                                        <?php if($help_step_title) { ?>
                                            <h3><?= $help_step_title; ?></h3>
                                        <?php } ?>
                                        <?php if($help_step_subtitle) { ?>
                                            <h5><?= $help_step_subtitle; ?></h5>
                                        <?php } ?>
                                        <?php if($help_step_description) { ?>
                                            <p><?= $help_step_description; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="help-img">
                                        <?php if($help_step_image) { ?>
                                            <img src="<?=  $help_step_image['url']; ?>" alt="help-image">
                                        <?php } ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php  }
        }?>
        </div>
    </div>
</section>
<!-- help section end -->

<!-- footer section start -->
<?php
get_footer();
?>
<!-- footer section end -->