<?php
/**
 * Template Name: Front Page
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

	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
            <?php $args = array(
            	'post_type' => 'slider',
            	'post_per_page'=> 3,
            	'order'=> 'ASC'
            );?>
           	 <?php query_posts($args);?>
           	 <?php if(have_posts()) : while(have_posts()): the_post();?>
           	 	<li>
	                <?php the_post_thumbnail('slider_img');?>
	                <div class="flex-caption">
	                    <h3><?php the_title();?></h3> 
						<p><?php the_content();?></p> 
						<a href="<?php the_field('url');?>" class="btn btn-theme"><?php the_field('learn_more');?></a>
	                </div>
              </li>
           	 <?php endwhile; endif;?>
           	 <?php wp_reset_query();?>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					
						<?php
						global $post;
						$args = array( 'posts_per_page' =>8, 'post_type'=> 'services','order' => 'ASC' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>
						
						    <?php 
						        $job_link= get_post_meta($post->ID, 'job_instructions', true); 
						    ?>
						    <div class="col-lg-3">
									<div class="box">
										<div class="box-gray aligncenter">
											<h4><?php the_title();?></h4>
											<div class="icon">
											<i class="<?php the_field('icon');?>"></i>
											</div>
											<p>
											 <?php the_content();?>
											</p>
												
										</div>
										<div class="box-bottom">
											<a href="#">Learn more</a>
										</div>
									</div>
								</div>
						<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
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
								<li class="col-lg-3 design" data-id="id-0" data-type="web">
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
			</div>
		</div>

	</div>
	</section>
	<?php get_footer();?>
