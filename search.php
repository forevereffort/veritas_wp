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
  
  <div class="module-searchResultsNum">
    <div class="g">
      <div class="r">
        <div class="lg-12">
          <small>2 results for '<?php echo get_search_query(); ?>'</small>
        </div>
      </div>
    </div>
  </div>
  
  <div class="module-searchResultListing">
    <div class="g">
      <div class="r">
        <div class="lg-8 md-10">
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
          ?>
                <a class="eachResult hoverEffect_dim" href="<?php echo get_permalink(); ?>">
                  <h4><?php the_title(); ?></h4>
                  <small><?php the_excerpt(); ?></small>
                </a>
          <?php
              }
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer();