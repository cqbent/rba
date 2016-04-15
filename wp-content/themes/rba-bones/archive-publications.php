<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf publications">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							print '<h1 class="page-title">Publications</h1>';
							?>
							<div class="publications-list">

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php
									// if post year != $year then set $year
									$post_year = get_the_date('Y');
									if ($post_year != $year) {
										$year = $post_year;
										print '<div class="publication-year">'.$year.'</div>';
									}
									$pub_author = get_field('publication_author') ? 'by '.get_field('publication_author') : '';
									?>
									<div class="post publication-item">
										<div class="col-1 image">
											<?php the_post_thumbnail( 'thumbnail' ); ?>
											&nbsp;
										</div>
										<div class="col-2 content">
											<div class="publication">
												<span class="pubname"><?php print get_field('publication_name') ?>,</span>
												<span class="pubdate"><?php print get_the_date('M Y'); ?></span>
											</div>
											<div class="pubtitle">
												<a href="<?php print get_field('publication_link'); ?>" target="_blank">
													<span class="title"><?php the_title(); ?></span>
													<span class="author"><?php print $pub_author; ?></span>
												</a>
											</div>
											<div class="description">
												<?php the_content(); ?>
											</div>
										</div>

									</div>
								<?php endwhile; ?>
								<?php endif; ?>

							</div>

						</main>

					<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
