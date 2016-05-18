<?php
/**
 * Template Name: Typography
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
					<li><a href="#">Features</a><i class="icon-angle-right"></i></li>
					<li class="active">Typography</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<?php the_content();?>
		<?php endwhile; else : ?>
			<p>No content Found</p>
		<?php endif;?>
	</div>
	</section>

	<?php get_footer();?>
