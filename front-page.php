<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


<div class="hero" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.3)), url(<?php echo header_image()?>);">
  <div class="wrapper">
  	<h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
  </div>
</div>


<div class="content">
    <div class="main">
      <div class="wrapper">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end the loop?>
       
      </div>
    </div> <!-- /main -->
</div> <!-- /.content -->

<?php get_footer(); ?>