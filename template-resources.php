<?php
/**
 * Template Name: Resources Template
 *
 * @package avx
 */

get_header(); ?>

<div class="page-container">
  <div class="resources-content-wrapper">
    <div class="container resources-content-container">
      <h2>All Resources</h2>

        <?php 
          $args = array(
          'post_type' => "Resources",
          'posts_per_page'   => "-1",
          'order'            => 'DESC',
          ); 
        ?>
        <?php query_posts( $args ); ?>
        <div class="row" data-masonry='{"percentPosition": true }'>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php $featured_img_url = get_the_post_thumbnail_url(); ?>
              <div class="col-sm-3">
                <div class="card shadow">
                  <img src="<?php echo $featured_img_url; ?>" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-title"><?php the_title(); ?></p>
                    <p class="card-category"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></p>
                    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
                  </div>
                </div>
              </div>

          <?php endwhile; // end of the loop. ?>
        </div>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>