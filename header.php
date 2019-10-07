<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?><!-- recupere les scripts et les styles -->
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <a href="<?php echo home_url( '/' ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
    </a>
  </header>

    <?php wp_body_open(); ?>