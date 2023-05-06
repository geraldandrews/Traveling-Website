<?php get_header(); ?>

<!-- about -->
<section class="about py-5" id="about">
  <div class="container">
    <div class="row">
      <div class="col-10 mx-auto col-md-6 my-5">
        <h1 class="text-capitalize">about</h1>
        <p class="my-4 text-muted w-75">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate beatae
          est hic iusto cupiditate modi!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, facere.
        </p>
      </div>
      <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
        <div class="about-img_container">
          <img src="img/beach.jpeg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>

  <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

</section>
<!-- end of about -->

<?php get_footer(); ?>
