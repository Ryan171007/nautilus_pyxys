<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/settings_and_links.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header_brand.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/initial_brand.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/new_market.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/numbers_confirms.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/final_layer.css">  
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
        <?php get_template_part('sections/header_brand') ?>
    </header>