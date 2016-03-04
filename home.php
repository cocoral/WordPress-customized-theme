<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="main">
	<div class="container">
	<?php $page_for_posts = get_option( 'page_for_posts' ); 
	$postsPage = get_page($page_for_posts);
	?>
  	<h2><?php echo $postsPage->post_title ?></h2>
	<p class='intro'><?php echo $postsPage->post_content; ?></p>
  

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

  

  </div> <!-- /.container -->
</main> <!-- /main -->

<?php get_footer(); ?>