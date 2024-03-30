<?php 
    $section_name = end(explode('-',basename(__FILE__, '.php'))); 

    $cat = get_category_by_slug($section_name);
    $title = ($cat) ? $cat->cat_name: 'Cards';
    $cat_id = ($cat) ? $cat->cat_ID : 9999;
    $args = array(
        'posts_per_page'   => -1,
        'category'         => $cat_id,
        'order'            => 'DESC',
    );
    $posts = get_posts( $args ); $cnt=0;
?>
<div class="intro" id="<?php print $section_name;?>">
  <div class="container center-text">
    <div class="content py-5 ">
     <?php if(count($posts) > 0): foreach ( $posts as $post ) : setup_postdata( $post );?>
     <?php edit_post_link( __( 'Edit', 'textdomain' ), '<div class="floated">', '</div>', null, 'btn btn-default btn-sm btn-edit-post-link' ); ?>
      <h3 class="saira-condensed-semibold text-center"><?php the_title(); ?></h3>
        <?php the_content(); ?>
      <?php endforeach; else: ?>
        <h3 class="saira-condensed-semibold text-center">Intro Text comes here</h3>
        <p>Create a post and add it to a category with slug "intro"</p>
        <p>Once created the content should show up here.</p>

        <p class="mt3"><a class="btn btn-secondary btn-lg btn-round-lg pt3">Schedule a call</a></p>
      <?php endif; ?>
   </div>
  </div>
</div>