<?php
get_header();

if (have_posts()) {
    the_post();
    setup_postdata($post);

} else { ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php }

get_footer();