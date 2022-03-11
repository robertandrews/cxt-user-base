<?php
/*
Plugin Name:    Context User Base Changer
Description:    Customise URL base of author archive indexes.
Text-Domain:    cxt-user-base
Version:        1.1
Author:         Robert Andrews
Author URI:     http://www.robertandrews.co.uk
License:        GPL v2 or later
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
*/

// Set the new URL base, eg. http://example.com/{new_base}/bill-gates/
$new_base = 'user';

/**
 * Acknowledgement:
 * Code by Debjit Saha, isitwp
 * http://wpsnipp.com/index.php/functions-php/change-the-author-slug-url-base/
 */
add_action('init', 'change_author_base');
function change_author_base()
{
    global $wp_rewrite;
    $author_slug = $new_base; // change slug name
    $wp_rewrite->author_base = $author_slug;
}

?>
