<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage BM_Music
 * @since BM Music 1.0
 */

get_header(); ?>

	<div id="category" class="content-area">
		<?php if ( have_posts() ) : ?>
		<div class="category-content">
			<div class="row clearfix">
				<div class="col col-eight centered">
					<?php 
					   $term_id = get_queried_object_id();
					   $term = $wp_query->queried_object;
					   $term_name = $term->name;
					   $image = get_field('image', $term);
					   $imageUrl = $image[url];
					   $website = get_field('website', $term);
					   $facebookUrl = get_field('facebook_url', $term);
					   $twitterUrl = get_field('twitter_url', $term);
					   $instagramUrl = get_field('instagram_url', $term);
					   $youtubeUrl = get_field('youtube_url', $term);
					   $downloadPdf = get_field('download_pdf', $term);
					   $pdfUrl = $downloadPdf['url'];
					   $firstName = explode(" ", $term_name);
					?>
					<div class="writer-name">
						<h3><?php echo $term_name; ?></h3>
					</div>
					<div class="writer-img">
						<img src="<?php echo $imageUrl; ?>" alt="<?php echo $term_name; ?>"/>
					</div>
					<div class="website-link">
						<a href="<?php echo $website; ?>"><?php echo $firstName[0]; ?>'s Website</a>
					</div>
					<div class="social-icons">
						<ul>
							<li><a href="<?php echo $facebookUrl; ?>" class="facebook" target="_blank">facebook</a></li>
							<li><a href="<?php echo $twitterUrl;?>" class="twitter" target="_blank">twitter</a></li>
							<li><a href="<?php echo $instagramUrl; ?>" class="instagram" target="_blank">instagram</a></li>
							<li><a href="<?php echo $youtubeUrl; ?>" class="youtube" target="_blank">youtube</a></li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="inset taxonomy-desc">
				<div class="row clearfix">
					<div class="col col-eight centered">
						<?php $content = the_archive_description( '<div class="taxonomy-description">', '<div class="gradient-effect"></div></div>' );?>
					</div>
				</div>
			</div>
		</div>
		<div class="discography">
			<h1 class="title">Discography</h1>
			<div class="inset">
				<div class="row clearfix">
					<div class="mCustomScrollbar custom-scrollbar" data-mcs-theme="dark">
						<div class="col col-nine">
								<?php
									// Start the Loop.
									while ( have_posts() ) : the_post();
									?>	
									<div class="discography-content">
										<div class="row clearfix">
											<div class="col col-two">
												<div class="discography-thumbs">
													<?php echo get_the_post_thumbnail();?>
												</div>
											</div>
											<div class="col col-ten">
												<div class="description">
													<div class="discography-desc">
														<h5><?php the_title(); ?></h5>
														<p>Sturgill Simpson</p>
														<p>2015</p>
													</div>
												</div>	
											</div>
										</div>
									</div>	
									<?php 
									endwhile;
								endif;
								?>
						</div>
					</div>	
					<div class="pdf">
						<a href="<?php echo $pdfUrl; ?>" target="_blank">Download Full Discography</a>
					</div>							
				</div>	
			</div>	
		</div>		
	</div>
	<section id="news" class="wheight">
		<div class="flex-container section"> 
			<div class="inset">
				<div class="row clearfix">
					<div class="">
						<h1 class="title">News</h1>
						<div class="news-content">
							 <div id="feeds"></div>
						</div>
						<div class="border-bottom"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
