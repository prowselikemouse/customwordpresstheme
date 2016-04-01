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
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="">
          </div>
        </div> <!-- .contentPhotoContainer -->

             
      <?php endwhile; // end the loop?>

  
    </div> <!-- /.content -->

    </div> <!-- /.container -->


<?php get_footer(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
       
       

        