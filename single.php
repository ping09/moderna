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
					<li><a href="<?php bloginfo('url');?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php if(have_posts()) : while(have_posts()) : the_post();?>
					<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#"><?php the_title();?></a></h3>
							</div>
							<img src="img/dummies/blog/img1.jpg" alt="" />
						</div>
						<p>
							<?php the_content();?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> <?php the_time('F, j, Y');?></a></li>
								<li><i class="icon-user"></i><a href="#"><?php the_author();?></a></li>
								<li><i class="icon-folder-open"></i><a href="#"><?php the_category( ' ' ); ?></a></li>
								<li><i class="icon-comments"></i><a href="#"><?php comments_number(); ?>.</a></li>
							</ul>
						</div>
				</article>
				<?php endwhile; endif;?>
				<?php comments_template();?>
			
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>
