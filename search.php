<?php get_header(); ?>
<main>
  <div class="module-topFoldSearchBarWrap">
    <div class="g">
      <div class="r">
        <div class="lg-11 md-10">
          <div class="formWrap">
            <form class="searchNav" action="<?php echo site_url(); ?>">
              <input class="searchInput" type="text" name="s" placeholder="Type here" value="<?php echo get_search_query(); ?>" />
  
              <label class="searchIcon hoverEffect_dim">
                <input type="submit" />
                <svg class="searchBtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path id="Icon_material-arrow-forward" data-name="Icon material-arrow-forward" d="M16,6,14.238,7.763l6.975,6.987H6v2.5H21.212l-6.975,6.987L16,26,26,16Z" transform="translate(-6 -6)" />
                </svg>
              </label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php
    $args = array(
      's' => get_search_query(),
      'post_type' => array('post', 'page', 'concern', 'insight', 'press', 'treatment', 'video'),
      'posts_per_page' => -1
    );

    $the_query = new WP_Query( $args );
    $total_post_count = $the_query->found_posts;
  ?>

  <div class="module-searchResultsNum">
    <div class="g">
      <div class="r">
        <div class="lg-12">
          <?php
            if( $total_post_count > 1 ){
          ?>
              <small><?php echo $total_post_count; ?> results for '<?php echo get_search_query(); ?>'</small>
          <?php
            } else if ( $total_post_count == 1 ) {
          ?>
              <small>1 result for '<?php echo get_search_query(); ?>'</small>
          <?php
            } else {
          ?>
              <small>nothing for '<?php echo get_search_query(); ?>'</small>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  
  <div class="module-searchResultListing">
    <div class="g">
      <div class="r">
        <div class="lg-8 md-10">
          <?php
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post();
          ?>
                <a class="eachResult hoverEffect_dim" href="<?php echo get_permalink(); ?>">
                  <h4><?php the_title(); ?></h4>
                  <small><?php the_excerpt(); ?></small>
                </a>
          <?php
              }
            }
        
            wp_reset_postdata();
          ?> 
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer();