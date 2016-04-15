<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/31/16
 * Time: 11:15 AM
 */
?>

<div class="flexslider">
    <ul class="slides">
        <?php
        if( have_rows('project_image_fields') ):
            // loop through the rows of data
            while ( have_rows('project_image_fields') ) : the_row();
                $image = get_sub_field('project_image');
                //var_dump($image);
                print '
                    <li>
                        <div class="slider-image" style="background-image:url('.$image['url'].')"> &nbsp;</div>
                        <div class="credits">'.$image['caption'].'</div>
                    </li>';
            endwhile;
        else :
            print 'no rows found';
        endif;
        ?>
    </ul>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf wrap'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
    <?php
    $address = get_field('project_address');
    ?>
    <header class="article-header entry-header">
        <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
    </header> <?php // end article header ?>

    <section class="entry-content cf" itemprop="articleBody">
        <?php the_content(); ?>
        <div class="collaborator">Architect - <?php print get_field('project_collaborator'); ?></div>
        <div class="location"><?php print get_field('project_city'); ?>, <?php print get_field('project_state'); ?></div>
        <a class="map-link" href="https://www.google.com/maps/place/<?php print str_replace(' ', '+', $address['address']); ?>" target="_blank">Google Maps</a>
    </section> <?php // end article section ?>

</article> <?php // end article ?>



