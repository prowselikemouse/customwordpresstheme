<?php get_header();  ?>

<div class="main">
  <div class="background_skews">
    <div class="transparent_black_triangle"></div>
    <div class="red_skew"></div>
    <div class="white_triangle"></div>
    <div class="red_skew_back"></div>
    <div class="black_skew_bottom"></div>
    <div class="black_bottom"></div>
  </div>
  <div class="homeContainer container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="headerContainer">
          <div class="head_sub">
            <h2 class="headline"><?php the_title(); ?></h2>
            <div class="subline"><?php the_content(); ?></div>
            <h3 class="subsubline"><?php the_field('header_subheadline'); ?></h3>
          </div> <!-- end head_sub -->
          <a href="#">
            <p class="registerButton"><?php the_field('register_button'); ?></p>
          </a>
          <div class="teaserVideo"><?php the_field('teaser_video'); ?></div>
        </div> <!-- end headerContainer -->
       <div class="historyContainer">
         <h2 class="historyHeadline sectionHeadline"><?php the_field('history_section_title') ?></h2>
          <?php $historyQuery = new WP_Query(array(
            'post_type' => 'history'
          ));?>
          <?php if($historyQuery -> have_posts() ): ?>
            <?php while ($historyQuery -> have_posts() ): ?>
              <?php $historyQuery -> the_post(); ?>
             <div class="historyBox" class="historyImageBox" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($post) ?> );" <?php body_class(); ?>>
                <div class="historyImageBox">
                    <h4 class="historyTitle"><?php the_title(); ?></h4>
                </div> <!-- end historyImageBox -->
                <div class="historyBlurbBox">
                  <div class="historyBlurb"><?php the_excerpt(); ?></div>
                </div> <!-- end historyBlurbBox -->
             </div> <!-- end historyBox -->
                  <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
       </div> <!-- end historyContainer -->

       <div class="partnerContainer">
         <h2 class="partnerHeadline sectionHeadline"><?php the_field('partner_section_title'); ?></h2>
         <div class="partners">
          <?php while( has_sub_field('individual_partners')): ?>
          <div class="individualPartner">
            <a href="<?php the_sub_field('partner_link'); ?>">
              <div class="partnerImage">
                <?php $image = get_sub_field('partner_logo'); ?>
                <img src="<?php echo $image ['sizes']['thumbnail']; ?>" alt="">
              </div>
                <p class="partnerName"><?php the_sub_field('partner_name'); ?></p>
             </a>
          </div>
           <?php endwhile; ?>
         </div>
         <a href=""><p class="partnerButton"><?php the_field('partner_button'); ?></p></a>
       </div> <!-- end partnerContainer -->

       <div class="instagramContainer">
           <div class="instagramTitleContainer">
              <h2 class="instagramHeadline sectionHeadline"><?php the_field('instagram_section_title') ?></h2>
             <a href="https://www.instagram.com/missioncrit/" target="blank"><p class="instagramFollowBox"><?php the_field('instagram_button') ?></p></a>
           </div>
         <div class="instagramImageContainer">
           <div><?php the_field('instagram_feed') ?></div>
         </div> <!-- end instagramImageContainer -->
       </div> <!-- end instagramContainer --> -->

      <?php endwhile; // end the loop?>
    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>