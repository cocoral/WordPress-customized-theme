<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class='home'>
  <div class="container">
    <div class="hero" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.3)), url(<?php echo header_image()?>);">
      <div class="wrapper">
        <h1><?php bloginfo('name'); ?></h1>
        <h2 class='intro'><?php bloginfo('description'); ?></h2>
        <p>Hate dog chase the pig around the house mew, or kick up litter. Get video posted to internet for chasing red dot climb leg play riveting piece on synthesizer keyboard. Attack dog, run away and pretend to be victim steal the warm chair right after you get up pooping rainbow while flying in a toasted bread costume in space for stretch, or hack up furballs.</p>
      </div>
    </div>
  </div>
  
  
  <div class="content">
      <div class="main">
        <div class="wrapper">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; // end the loop?>
            <ul>
              <li><img src=" <?php bloginfo('template_directory')?>/images/eye.svg" alt="icon1"></li>
              <li><img src=" <?php bloginfo('template_directory')?>/images/roll.svg" alt="icon1"></li>
              <li><img src=" <?php bloginfo('template_directory')?>/images/pencil.svg" alt="icon1"></li>
              <li><img src=" <?php bloginfo('template_directory')?>/images/blackborad.svg" alt="icon1"></li>
            </ul>
        </div>
      </div> <!-- /main -->
  </div> <!-- /.content -->
</div>

<?php get_footer(); ?>