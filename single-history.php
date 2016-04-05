<?php get_header(); ?>

<div class="main">
<div class="background_skews">
  <div class="transparent_black_triangle"></div>
  <div class="red_skew"></div>
  <div class="black_skew_bottom_single"></div>
  <div class="black_bottom_single"></div>
</div>
  <div class="singleContainer container">


    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="head_sub">
          <h1 class="headline"><?php the_title(); ?></h1>
          <h2 class="subline"><?php the_field('race_date'); ?></h2>
          <h3 class="subsubline"><?php the_field('race_location'); ?></h3>
        </div>
        <div class="contentPhotoContainer">
          <div class="aboutBlurb"><?php the_content(); ?></div>
          <?php $image = get_field('post_image'); ?> 
          <div class="aboutPhoto">
            <img src="<?php echo $image['url']; ?>" alt="">
          </div>
        </div> <!-- .contentPhotoContainer -->
        <h2 class="pressLinkHeadline sectionHeadline"><?php the_field('press_section_title'); ?></h2>
        <div class="allPressLinks">
           <div class="pressContainer">
             <?php while( has_sub_field('press_link_1')): ?>
              <p class="pressLinkTitle"><?php the_sub_field('publication_title_1'); ?></p>
              <?php $image = get_sub_field('press_link_image_1'); ?>
              <div class="pressLinkImage">
                <img src="<?php echo $image['url']; ?>" alt="">
              </div> <!-- .pressLinkImage -->
             <?php endwhile; ?>
             </div> <!-- .presscontainer -->
             <div class="pressContainer">
             <?php while( has_sub_field('press_link_2')): ?>
              <p class="pressLinkTitle"><?php the_sub_field('publication_title_2'); ?></p>
              <?php $image = get_sub_field('press_link_image_2'); ?>
              <div class="pressLinkImage">
                <img src="<?php echo $image['url']; ?>" alt="">
              </div> <!-- .pressLinkImage -->
             <?php endwhile; ?>
             </div> <!-- .presscontainer -->
             <div class="pressContainer">
             <?php while( has_sub_field('press_link_3')): ?>
              <p class="pressLinkTitle"><?php the_sub_field('publication_title_3'); ?></p>
              <?php $image = get_sub_field('press_link_image_3'); ?>
              <div class="pressLinkImage">
                <img src="<?php echo $image['url']; ?>" alt="">
              </div> <!-- .pressLinkImage -->
             <?php endwhile; ?>
             </div> <!-- .presscontainer -->
        </div> <!-- .allPressLinks -->
        <div class="pastPartnerContainer">
          <h2 class="partnerLinkHeadline sectionHeadline"><?php the_field('post_partner_section_title'); ?></h2>
          <div class="partnerContainer">
            <?php $image = get_field(partner_logos); ?>
            <div class="pastPartnerLogoImage">
              <img src="<?php echo $image['url']; ?>" alt="">
            </div>
            <a href=""><p class="partnerButton postPartnerButton"><?php the_field('post_partner_button'); ?></p></a>
          </div>
        </div>

             
      <?php endwhile; // end the loop?>

  
    </div> <!-- /.content -->

    </div> <!-- /.container -->


<?php get_footer(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
       
       

        