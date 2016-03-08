<?php get_header();  ?>

<div class="container">
  <div class="content">

    <div class="pageContent">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php 
        // the_title();
        $title = the_title(); 
        echo $title;
        ?></h2>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /.pagecontent -->

    <div class="main-gallery">
      <div class="gallery-cell"><img src="<?php bloginfo('template_directory')?>/images/1.jpg" alt="galleryItem"></div>
  </div>
  </div> <!-- /.content -->
</div> <!-- /.container -->

<?php get_footer(); ?>