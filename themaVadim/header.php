<!-- <!DOCTYPE html>
<html lang='<?php //language_attributes(); ?>'>
<head>
	<meta charset="<?php //bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Vadim Pisa">
<meta name="keywords" content="Wp thema">
	<?php //wp_head(); ?>
	<title><?php //bloginfo('name'); ?></title>
</head>
<body>
<header class="header" style="background-image: url('<?php //echo get_template_directory_uri()?>/afb/rusland.jpg')">
<div class="container">
	<nav>
	<?php $argumenten //= array(
	//'theme_location' => 'hoofd',);?>
	<?php //wp_nav_menu($argumenten) ?></nav>
<a href='<?php //echo home_url(); ?>'><h1><?php //bloginfo('name'); ?></h1> </a>
<p><?php //bloginfo('description'); ?></p>
</div>
</header> -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name');?></title>
  <meta name="author" content="Vadim Pisa">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/header.png')">
    <div class="container">
      <nav>
        <?php $argumenten = array(
          'theme_location' => 'hoofd',
        ); ?>
        <?php wp_nav_menu($argumenten); ?>
      </nav>
     <a href="<?php echo home_url();?>"><h1><?php bloginfo('name'); ?></h1></a>
     <p><?php bloginfo('description'); ?></p>
    </div>
  </header>