<?php

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
 <div class="background_skews">
    <div class="transparent_black_triangle"></div>
   <div class="red_skew"></div>
   <div class="black_skew_bottom_page"></div>
   <div class="black_bottom_page"></div>
 </div>
 <div class="pageContainer">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2 class="subline contactSubline"><?php the_title(); ?></h2>
       <div class="contactInfo">
          <?php the_content(); ?>
         <div class="directContact">
           <h3 class="directContactSectionTitle subsubline"><?php the_field('direct_contact_info_section_title'); ?></h3>
           <p class="directContactNameRole"><?php the_field('direct_contact_info_name/role'); ?></p>
              <?php while( has_sub_field('direct_contact_method')): ?>
           <div class="contactInfoSpecific">
             <p class="contactInfoIcon"><?php the_sub_field('direct_contact_method_icon'); ?></p>
             <p class="contactInfoText"><?php the_sub_field('direct_contact_info') ?></p>
           </div> <!-- end contactInfoSpecific -->
           <?php endwhile; ?>
         </div> <!-- end directContact -->
       </div> <!-- end contactInfo -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>