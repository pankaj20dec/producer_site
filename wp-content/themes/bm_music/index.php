<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage BM_Music
 * @since BM Music 1.0
 */

get_header(); ?>
	<section id="news" class="wheight1 flex-container">
		<div class="section"> 
			<div class="inset">
				<div class="row clearfix">
					<div class="">
						<h1 class="title">News</h1>
						<div class="news-content">
							 <div id="feeds"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="border-bottom"></div>
		</div>
	</section>
	<section id="discography" class="mheight1">
		<div class="section"> 
			<div class="discography-container">
				<div class="inset">
					<h1 class="title">Discography</h1>
					<div class="scrollbar">
						<div class="mCustomScrollbar custom-scrollbar" data-mcs-theme="dark">
							<?php 									 
								$args = array('post_type' => 'discography');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								$name = $meta = get_post_meta( get_the_ID(),'wpcf-name', true );
								$timeStamp = $meta = get_post_meta( get_the_ID(),'wpcf-year', true );
								?>
								<div class="discography-content">
									<div class="discography-thumbs">
										<?php echo the_post_thumbnail(array(120,120));?>
									</div>
									<div class="description">
										<div class="discography-desc">
											<h5><?php the_title(); ?></h5>
											<p><?php echo $name ?></p>
											<p><?php if($timeStamp !== ""){echo date('Y', $timeStamp); }?></p>
										</div>
									</div>	
								</div>
							<?php endwhile;?>
						</div>
					<div class="gradient-effect"></div>
				</div>		
				</div>
				<div class="border-bottom"></div>
			</div>	
		</div>	
	</section>
	<section id="music" class="wheight1">
		<div class="section"> 
			<div class="inset">
				<h1 class="title">Music</h1>
				<div id="player"></div>
			</div>
			<div class="border-bottom"></div>
		</div>
	</section>
	<section id="about" class="wheight1 flex-container">
		<div class="section"> 
			<div class="inset">
				<div class="row clearfix">
					<div class="col-eleven centered">
						<?php 
							
							$page_id = 12;  //Page ID
							$page_data = get_post( $page_id ); 
							$title = $page_data->post_title; 
							$content = $page_data->post_content; 
							$src = wp_get_attachment_image_src( get_post_thumbnail_id($page_data), 'thumbnail_size' );
							$url = $src[0];
							?>
						<h1 class="title"><?php echo $title; ?></h1>
						<div class="about-content">
							<?php echo $content; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="border-bottom"></div>
		</div>
	</section>
	<section id="photos" class="wheight1 flex-container">
		<div class="section"> 
			<div class="inset">
				<h1 class="title">Photos</h1>
				<?php echo do_shortcode('[print_responsive_slider_plus_lightbox]'); ?>
			</div>
			<div class="border-bottom"></div>
		</div>	
	</section>
	<section id="videos" class="">
		<div class="section"> 
			<div class="inset">
				<h1 class="title">Media</h1>
					<ul class="video-slider">
					<?php 									 
						$args = array('post_type' => 'video');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$youtubeId = $meta = get_post_meta( get_the_ID(),'wpcf-youtube-id', true );
						?>
						<li> 
							<iframe width="640" height="360" src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
						</li>
					<?php endwhile;?>
					</ul>
			 </div>
		</div>	
	</section>
	<section id="contact">
		<div class="section">
			<h1 class="title">Contact</h1>
			<a href="#" class="email">contact@email.com</a>
		</div>	
	</section>
<?php get_footer(); ?>
