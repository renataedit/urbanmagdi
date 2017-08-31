<?php get_header(); ?>
<div class="article container">
    <h2 class="inner_title"><?php echo single_cat_title("", false); ?></h2>
    <div class="archive_posts">
        <div class="row">
            <div class="cols">
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();
                        setup_postdata($post);
                        ?>
                        <div class="box">
                            <div class="box-inner">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="box-content">
                                    <?= b_excerpt($post->post_content, 400); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="pagination">
        <?php
        global $wp_query;
        $big = 99999999;

        $args = array(
            'base'         => str_replace($big, '%#%', get_pagenum_link($big)),
            'format'       => '?paged=%#%',
            'total'        => $wp_query->max_num_pages,
            'current'      => max(1, get_query_var('paged')),
            'show_all'     => false,
            'end_size'     => 2,
            'mid_size'     => 3,
            'prev_next'    => True,
            'prev_text'    => '« ' . __('Previous Page', 'corozon'),
            'next_text'    => __('Next Page', 'corozon') . ' »',
            'type'         => 'plain',
            'add_args'     => False,
            'add_fragment' => ''
        );
        ?>

        <div class="pagination-in">
            <?php echo paginate_links( $args ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
