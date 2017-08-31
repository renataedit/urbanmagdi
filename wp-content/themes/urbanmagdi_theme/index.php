<?php
/**
 * The main template file
 *
 * @package urbanmagdi
 */
get_header();

$parallaxTopImg = get_post(16);
$imageTop = wp_get_attachment_image_src(get_post_thumbnail_id($parallaxTopImg->ID), 'single-post-thumbnail');

$parallaxBottomImg = get_post(18);
$imageBottom = wp_get_attachment_image_src(get_post_thumbnail_id($parallaxBottomImg->ID), 'single-post-thumbnail');
?>
<style>
    .parallax-top {
        background-image: url(<?php echo $imageTop[0]; ?>);
    }
    .parallax-bottom{
        background-image: url(<?php echo $imageBottom[0]; ?>);
    }
</style>
<div class="container-fluid parallax">
    <div class="parallax parallax-top text-center" data-type="background"  data-speed="10">
        <article data-type="text" data-speed="5" class="parallax">
            <h1>Urbán Magdolna</h1>
            <h3>fotográfus</h3>
        </article>
    </div>
</div>

<div class="container-fluid about-box" id="about-box">
    <div class="row">
        <?php
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(4), 'single-post-thumbnail');
        ?>
        <div class="col-md-6 nopadding about-image" style="background-image: url(<?php echo $image[0]; ?>);">
        </div>
        <div class="col-md-6">
            <div class="col-md-6 home-textbox about-text">
                <?php
                $about = get_post(4);
                ?>
                <h3 class="post_title"><?= $about->post_title; ?></h3>
                <div>
                    <?= b_excerpt($about->post_content, 600); ?>
                </div>
                <a class="readmore" href="/rolam">Tovább...</a>
            </div>
        </div>
    </div>
</div>
<div class="container" id="blog">
  <div class="row">
    <div class="cols">

          <?php
          global $post;
          $args = array( 'posts_per_page' => 20, 'category' => 2 );

          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          	<div class="box">
              <div class="box-inner">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="box-content">
                  <?= b_excerpt($post->post_content, 400); ?>
                </div>
              </div>
            </div>
          <?php endforeach;
          wp_reset_postdata();

          ?>
    </div>
  </div>
</div>
<div class="container-fluid parallax">
    <div class="parallax-bottom text-center">
    </div>
</div>

<div class="container-fluid contact-box" id="contact-box">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-6 pull-right home-textbox">
                <h3 class="post_title">Kontakt</h3>
                <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
            </div>
        </div>
        <?php
        $contactImgPost = get_post(37);
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($contactImgPost->ID), 'single-post-thumbnail');
        ?>
        <div class="col-md-6 nopadding contact-image" style="background-image: url(<?php echo $image[0]; ?>);">
        </div>
    </div>
    <?php get_footer(); ?>
