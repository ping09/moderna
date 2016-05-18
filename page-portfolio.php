<?php
/**
 * Template Name: Portfolio
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
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="web"><a href="#" title="">Web design</a></li>
					<li class="icon"><a href="#" title="">Icons</a></li>
					<li class="graphic"><a href="#" title="">Graphic design</a></li>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
							<?php
								global $post;
								$args = array( 'posts_per_page' =>8, 'post_type'=> 'work','order' => 'ASC' );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) : setup_postdata($post); 
							?>
							<?php
								$thumb_id = get_post_thumbnail_id($post->ID);
								$img_url = wp_get_attachment_image_src($thumb_id, 'large');
							?>
							<!-- Item Project and Filter Name -->
								<li class="col-lg-3 photography" data-id="id-0" data-type="<?php the_field('type');?>">
									<div class="item-thumbs">
									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title();?>" href="<?php echo $img_url[0];?>">
									<span class="overlay-img"></span>
									<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
									<!-- Thumb Image and Description -->
								<?php the_post_thumbnail('medium');?>
									
									</div>
								</li>
								<!-- End Item Project -->
								<!-- Item Project and Filter Name -->
								
							<?php endforeach; ?>	
								
							<!-- End Item Project -->
						</ul>
					</section>
				</div>
				<!--<div class="row">-->
				<!--	<section id="projects">-->
				<!--	<ul id="thumbs" class="portfolio">-->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/1.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/2.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/3.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/4.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 photography" data-id="id-4" data-type="web">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/5.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 photography" data-id="id-5" data-type="icon">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/6.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/7.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/7.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--		 Item Project and Filter Name -->
				<!--		<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="graphic">-->
				<!--		 Fancybox - Gallery Enabled - Title - Full Image -->
				<!--		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/8.jpg">-->
				<!--		<span class="overlay-img"></span>-->
				<!--		<span class="overlay-img-thumb font-icon-plus"></span>-->
				<!--		</a>-->
				<!--		 Thumb Image and Description -->
				<!--		<img src="img/works/8.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">-->
				<!--		</li>-->
				<!--		 End Item Project -->
				<!--	</ul>-->
				<!--	</section>-->
				<!--</div>-->
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>
