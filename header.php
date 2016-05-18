<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset')?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url');?>"><span><?php bloginfo("name");?></span></a>
                </div>
                
                <div class="navbar-collapse collapse ">
                     <?php $defaults = array(
                        'theme_location'  => 'primary',
                        'menu'            => 'primary',
                        'container'       => false,
                        'menu_class'      => 'nav navbar-nav',
                        'fallback_cb'     => 'wp_page_menu',
                        );
                ?>
 
                <?php wp_nav_menu( $defaults ); ?>    
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->