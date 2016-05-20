<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage _s
 * @since _s 1.0
 */
 ?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<?php $location = get_field('location');?>
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<?php if(have_posts()): while(have_posts()): the_post();?>
					<?php the_content();?>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>
