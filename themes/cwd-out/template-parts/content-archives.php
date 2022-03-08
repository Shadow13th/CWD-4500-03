<?php
/* Template Name: Archive Page Custom */
?>



<?php
$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

/* Make sure that the number fetched is reasonable. If higher than 200 or lower than 2, we're resetting to the default value of 15. */
if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 15;

$my_query = new WP_Query('post_type=post&nopaging=1');
if($my_query->have_posts()) {
  echo '<h1 class="widget-title">Last '.$how_many_last_posts.' Posts <i class="fa fa-bullhorn" style="vertical-align: baseline;"></i></h1>&nbsp;';
  echo '<div class="archives-latest-section"><ol>';
  $counter = 1;
  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
    $my_query->the_post(); 
    ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
    <?php
    $counter++;
  }
  echo '</ol></div>';
  wp_reset_postdata();
}
?>
