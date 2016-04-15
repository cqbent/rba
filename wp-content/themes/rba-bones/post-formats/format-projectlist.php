<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/31/16
 * Time: 11:15 AM
 */

// thumbnail image, title, location
$rows = get_field('project_image_fields' ); // get all the rows
$first_row = $rows[0]; // get the first row
$first_row_image = $first_row['project_image'];
$image = wp_get_attachment_image( $first_row_image['id'], 'large' );
//var_dump($image);
print '<li>
    <a href="'.get_the_permalink().'">
    '.$image.'
    <div class="title">'.get_the_title().'</div>
    <div class="location">'.get_field('project_city').', '.get_field('project_state').'</div>
    </a>
    </li>';
?>