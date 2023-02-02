<?php get_header(); ?>
<?php
    while (have_posts()) : the_post();
        ?>
        
        
<main>
      <div class="module-topFoldLeftTitleText" data-gsapStaggerInViewFadeIn>
        <div class="g">
          <div class="r">
            <div class="lg-6 lg-offset-3 mdlg-10 mdlg-offset-1">
              <div class="textWrap">
                <h1><?php the_title() ;?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="module-leftPara">
        <div class="g">
          <div class="r rowMargin">
            <div class="mdlg-6 mdlg-offset-3">
              <div class="paraWrap">
              <?php the_content(); ?>  
            </div>


            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
    endwhile;
    ?>

<?php get_footer(); ?>