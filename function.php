<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function nom_scripts() {
wp_enqueue_style('nom_du_style',get_template_directory_uri().'/bootstrap.css',array(),'1.0.0','all');}

add_action('wp_enqueue_scripts','nom_scripts');

