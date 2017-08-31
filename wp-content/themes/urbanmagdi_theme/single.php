<?php get_header(); ?>
    <div class="article container">
            <?php if (have_posts()) {
                the_post();
                setup_postdata($post);
                ?>
                <h2 class="inner_title"><?php echo the_title(); ?></h2>
                <?php if(has_post_thumbnail()){ ?>
                    <section class="text-center post_thumbnail"><img src="<?php the_post_thumbnail_url('large'); ?>" alt=""></section>
                <?php } ?>
                <section class="post_content"><?php the_content(); ?></section>

                <!-- Post Ends -->
            <?php } else { ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php } ?>
    </div>
<?php get_footer(); ?>