<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf projects-list">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							$obj = get_queried_object();
							//var_dump($obj);
							print '<h1 class="page-title">Projects: '.$obj->name.'</h1>';
							print display_project_categories($obj->name);
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
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
