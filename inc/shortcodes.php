<?php
function button_shortcode ($atts, $content=null) {
  extract(shortcode_atts(array(
      'text'=> ''
    ),$atts ));
    return '
    
    ';
}

add_shortcode('button', 'button_shortcode');
function post_list_shortcode($content= null, $atts) {
  extract( shortcode_atts( array(
		'type' => 'post',
	), $atts) );
	
    $posts_per_page = 6;
    $settings = array(
        'post_per_page' => 20, 
        'post_type' => $type,
        'order' => 'ASC', 
    );
	
    $q = new WP_Query( $settings );	
		
	  $list = '<ul id="thumbs" class="portfolio">';
	while($q->have_posts()) : $q->the_post();
		$list .= '
		  <li><a href="'.get_permalink().'">'.get_the_title().'</a></li>
		';        
	endwhile;
	$list.= '</ul>';
    
    
	wp_reset_query();
	return $list;
}
add_shortcode('post', 'post_list_shortcode');





function recent_work($content= null, $atts) {
  extract( shortcode_atts( array(
  	'id'=> ''
	), $atts) );
	
				global $post;
				$args = array( 'posts_per_page' =>8, 'post_type'=> 'work','order' => 'ASC' );
				$myposts = get_posts( $args );
				
				
	  $list = '<ul id="thumbs" class="portfolio">';
	foreach( $myposts as $post ) : setup_postdata($post); 
	 
	  	$small_thumb_id = get_post_thumbnail_id($post->ID);
								$small_img_url = wp_get_attachment_image_src($small_thumb_id, 'thumbnail');
			$large_thumb_id = get_post_thumbnail_id($post->ID);
								$large_img_url = wp_get_attachment_image_src($large_thumb_id, 'large');					
			$thumb_img = get_post( get_post_thumbnail_id() );
		$list .= '
		  <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="'.$id.'">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.get_the_title().'" href="'.$large_img_url[0].'">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="'.$small_img_url[0].'" alt="'. $thumb_img->post_content.'">
						</li>
		';        
		endforeach;
	$list.= '</ul>';
    
    

	return $list;
}
add_shortcode('portfolio', 'recent_work');


?>