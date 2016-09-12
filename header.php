<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic|Lato:300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity@1.1/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@1.1/dist/flickity.pkgd.min.js"></script>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">


      <div class='logoWrapper'>
        <a class='logo' href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <div class="logoImg"> <img src=" <?php bloginfo('template_directory')?>/images/logo.png" alt=""></div>
          <div class='logoWords'>
            <h5><?php bloginfo( 'name' ); ?></h5>
            <h5><?php echo date('Y'); ?></h5>
          </div>         
        </a>
      </div>

    <input type="checkbox" id="nav__dropDownMenu_checkbox">
    <label for="nav__dropDownMenu_checkbox" class="nav__menuBtn" id="nav__menuBtn">
      <div class="nav__menuBtn_bar"></div>
    </label>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

