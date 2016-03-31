<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">

    <?php $historyQuery = new WP_Query(array(
		'post_type' => 'history'
	));?>
	<?php if($historyQuery -> have_posts() ): ?>
		<?php while ($historyQuery -> have_posts() ): ?>
			<?php $historyQuery -> the_post(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
    		
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>