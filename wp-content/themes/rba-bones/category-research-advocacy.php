<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf research-list">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							$obj = get_queried_object();
							//var_dump($obj);
							print '<h1 class="page-title">'.single_cat_title('',false).'</h1>';
							?>
							<ul class="grid-list table-grid">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<li>
										<?php the_post_thumbnail( 'bones-thumb-600' ); ?>
										<a href="<?php print get_the_permalink(); ?>">
											<div class="title"><?php the_title(); ?></div>
										</a>
									</li>

								<?php endwhile; ?>
								<?php endif; ?>
							</ul>


						</main>

					<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
