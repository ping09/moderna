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
								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							</div>
							<?php if(get_the_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large');?>
                    <?php endif;?>
						</div>
						<p>
							<?php echo strip_tags(the_excerpt());?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> <?php the_time('F, j, Y');?></a></li>
								<li><i class="icon-user"></i><a href="#"><?php the_author_posts_link();?></a></li>
								<li><i class="icon-folder-open"></i>
									<a href="<?php the_permalink();?>"><?php
									  $categories = get_the_category();
    								echo $categories[0]->name;  
									?></a>
								</li>
								<li><i class="icon-comments"></i><a href="#"><?php comments_number(); ?>.</a></li>
							</ul>
							<a href="<?php the_permalink();?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				<?php endwhile; endif;?>
				
				<div id="pagination">
					<?php wp_pagenavi(); ?>	
				</div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search" action="<?php bloginfo('home'); ?>/">
						<input class="form-control" type="text" placeholder="Search.." value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					</form>
				</div>
				<?php if(! dynamic_sidebar("Catagories")): ?>
				<div class="widget">
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
						<li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
					</ul>
				</div>
				<?php endif;?>
				<?php if(! dynamic_sidebar('Latest Post') ): ?>
				<div class="widget">
					
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<li>
						<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>
				<?php endif;?>
				<?php if(! dynamic_sidebar('Tags') ):?>
					<p>Add Sidebar here</p>
				<?php endif;?>
				</aside>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>
