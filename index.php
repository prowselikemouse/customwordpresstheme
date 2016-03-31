<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header();  ?>

<div class="main">
	<div class="transparent_black_triangle"></div>
  <div class="red_skew"></div>
  <div class="black_skew_bottom_index"></div>
  <div class="black_bottom_index"></div>
  <div class="indexContainer container">

    <div class="content">
    	<div class="head_sub">
          <h2 class="headline">Mission Crit 2</h2>
          <h3 class="subline">April 11, 2015</h3>
        </div> <!-- end head_sub -->
        <div class="aboutBox">
        	<div class="aboutParagraph"><?php the_content(); ?></div>
        	<div class="aboutImageBox"><img src="" alt=""></div>
        </div> <!-- end aboutBox -->

        <div class="pressBox">
        	<h2>Press Links 2015</h2>
        	<div class="pressLinksBox">
        		<div class="pressLink"></div>
        		<div class="presslinkMiddle"></div>
        		<div class="pressLink"></div>
        	</div>
        </div> <!-- end pressBox -->
        <div class="partnerBox">
        	<h2>Partners 2015</h2>
        	<div class="partnerLogoBox">
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        		<div class="partnerLogo"></div>
        	</div> <!-- end partnerLogoBox -->
        	<div class="partnerNextPreviousBox">
        		<h3 class="partnerPrevious">< 2014</h3>
        		<h3 class="partnerNext">2016 ></h3>
        	</div>
        </div>
    		<?php get_template_part( 'loop', 'copy' );	?>
    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>