<?php
get_header(); ?>
<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_parent_theme_file_uri("/images/ocean.jpg") ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Welcome to our blog! </h1>
    <div class="page-banner__intro">
      <p>Keep with our latest news...</p>
    </div>
  </div>
</div>
<div class="container container--narrow page-section">
  <?php
  if (have_posts()) {       // Check if there are posts to display.
    while (have_posts()) {  // Loop through each post.
      the_post();             // Set up the post data for the current post.
      // Code to display the post goes here.
      ?>
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="metabox">Posted by <?php the_author_posts_link( ); ?> on <?php echo get_the_date(); ?> posted in <?php echo get_the_category_list(", "); ?></div>
        <!-- Display the categories the post belongs to, separated by commas -->
        <div class="generic-conent"> <?php the_content(); ?>
          <p><a class="btn btn--blue" href="<?php permalink_link(); ?>">Continue reading &raquo;</a></p>
        </div>
      </div>
      <?php
    }
  } else {                    // If no posts are found.
    echo 'No posts found.';
  }
  ?>
  <?php echo paginate_links( ); ?>
</div>


<?php get_footer();

?>