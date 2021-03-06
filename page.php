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


    <?php get_sidebar(); ?>

  </div> <!-- /.content -->
</div> <!-- /.container -->

<?php get_footer(); ?>