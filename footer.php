<footer>
  <div class='container'>
    <div class="footerColumn">
      <p><?php bloginfo( 'name' ); ?></p>
      <p>&copy; Coded by Coral <?php echo date('Y'); ?></p>
      
    </div>
    <div class="footerColumn">
      <?php wp_nav_menu(array(
        'theme_location' => 'social',
      )); ?>
    </div>
    <div class="footerColumn">
       <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>  
    </div>
    
    <div class='footerColumn'>
      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            
            <input type="search" class="search-field"
                placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
      </form>
    </div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>