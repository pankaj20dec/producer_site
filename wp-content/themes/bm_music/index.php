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
	<section id="news" class="wheight flex-container">
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
	<section id="discography" class="mheight">
		<div class="section"> 
			<div class="discography-container">
				<div class="inset">
					<h1 class="title">Discography</h1>
					<div class="mCustomScrollbar custom-scrollbar" data-mcs-theme="dark">
						<?php 									 
							$args = array('post_type' => 'latest-release');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$name = $meta = get_post_meta( get_the_ID(),'wpcf-name', true );
							?>
							<div class="discography-content">
								<div class="discography-thumbs">
									<?php echo the_post_thumbnail(array(120,120));?>
								</div>
								<div class="description">
									<div class="discography-desc">
										<h5><?php the_title(); ?></h5>
										<p>Sturgill Simpson</p>
										<p>2015</p>
									</div>
								</div>	
							</div>
						<?php endwhile;?>
						<div class="gradient-effect"></div>
					</div>	
				</div>
				<div class="border-bottom"></div>
			</div>	
		</div>	
	</section>
	<section id="about" class="section">
		<div class="flex-container wheight"> 
			<div class="inset">
				<div class="row clearfix">
					<div class="col-seven centered">
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
						<div class="border-bottom"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="latest-release" class="mheight">
		<div class="flex-container section"> 
			<div class="inset">
				<div class="row clearfix">
					<div class="col-nine centered">
						<h1 class="title">Latest Releases</h1>
							<div class="release-content">
								<div class="slider1">
									<?php 									 
										$args = array('post_type' => 'latest-release');
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
										$name = $meta = get_post_meta( get_the_ID(),'wpcf-name', true );
										?>
										 <div class="slide">
											 <?php echo get_the_post_thumbnail();?>
											 <h3><?php the_title(); ?></h3>
											 <p><?php echo $name?></p>		
										  </div>
									<?php endwhile;?>
								</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section id="latest-release" class="mheight">
		<div class="flex-container section"> 
			<div class="inset">
				<div class="row clearfix">
					<div class="col-nine centered">
						<h1 class="title">Latest Releases</h1>
							<div class="release-content">
								<div class="slider1">
									<?php 									 
										$args = array('post_type' => 'latest-release');
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
										$name = $meta = get_post_meta( get_the_ID(),'wpcf-name', true );
										?>
										 <div class="slide">
											 <?php echo get_the_post_thumbnail();?>
											 <h3><?php the_title(); ?></h3>
											 <p><?php echo $name?></p>		
										  </div>
									<?php endwhile;?>
								</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section id="contact">
		<div class="contact-content section">
			<h1 class="title"><a href="javascript:void(0);" class="contact-us">Contact us</a></h1>
			
		</div>	
	</section>
<?php get_footer(); ?>
