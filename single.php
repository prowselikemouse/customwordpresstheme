<?php get_header(); ?>

<div class="main">
  <div class="transparent_black_triangle"></div>
  <div class="red_skew"></div>
  <div class="black_skew_bottom_page"></div>
  <div class="black_bottom_page"></div>
  <div class="pageContainer container">

    <div class="content">
    <?php $historyQuery = new WP_Query(array(
    'post_type' => 'history'
  ));?>
    <?php if($historyQuery -> have_posts() ): ?>
      <?php while ($historyQuery -> have_posts() ): ?>
        <?php $historyQuery -> the_post(); ?>
        <h1 class="historyHeadline"><?php the_title(); ?></h1>
      <?php endwhile; ?>
    <?php endif; ?>
    </div> <!-- /.content -->

<?php get_footer(); ?>


    <div class="content">
      <?php // Start the loop ?>
        <div class="pageHead">
          <h3 class="pageHeadline">Get in touch</h3>
        </div> <!-- end pageHead -->
        <form class="contactForm" action="">
          <input class="oneLineInput" type="text" name="name" placeholder="name">
          <input class="oneLineInput" type="text" name="email" placeholder="email">
          <input class="messageInput" type="text" name="message" placeholder="message">
          <input class="contactSendButton" type="submit" value="send">
        </form>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->