<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?><!-- recupere les scripts et les styles -->
   
</head>

<body <?php body_class(); ?>>
  <header class="header">
  

   <nav>
   <a href="<?php echo home_url( '/' ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
    </a>
   <ul>
   <li><a href="#">MAGASIN</a></li>
   <li><a href="#">ARCHITECTE D'INTERIEUR</a></li>
   <li><a href="#">A PROPOS</a></li>
   <li><a href="#">BLOG</a></li>
   <li><a href="#">CONTACT</a></li>
   <li><a href="#">Whislist  + icone </a></li>
   
   </ul>
   </nav>
  </header>

    <?php wp_body_open(); ?>