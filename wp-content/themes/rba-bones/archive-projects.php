<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf projects-list">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							print '<h1 class="page-title">Projects</h1>';
							print display_project_categories();
							?>
							<ul class="grid-list">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php
									get_template_part( 'post-formats/format-projectlist' );
									?>
								<?php endwhile; ?>
								<?php endif; ?>
							</ul>


						</main>

					<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
