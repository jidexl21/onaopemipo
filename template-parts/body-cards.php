<?php 
/** 
 *  Title: Cards Template
 *  Slug: cards
 *  Description: This area add a three item long cards with images section
 *  Guide: Create a category with the name cards
 * 
 **/
 ?>

<?php 
    $section_name = end(explode('-',basename(__FILE__, '.php'))); 

    $cat = get_category_by_slug($section_name);
    $title = ($cat) ? $cat->cat_name: 'Cards';
    $cat_id = ($cat) ? $cat->cat_ID : 9999;
    $args = array(
        'posts_per_page'   => 3,
        'category'         => $cat_id,
        'order'            => 'DESC',
        'post_stats'       => 'publish'
    );
    $posts = get_posts( $args ); $cnt=0;
    $tagsList = array();
?>
<div class="bulleted py-5 bg-gray" id="<?php echo $section_name; ?>">
  <div class="container">
  <div class="row">
    <h2 class="text-start py-3">Competencies</h2>
    <?php if(count($posts) > 0): foreach ( $posts as $post ) : setup_postdata( $post );?>
    <div class="col-lg-4">
      <?php edit_post_link( __( 'Edit', 'textdomain' ), '<div class="floated">', '</div>', null, 'btn btn-default btn-sm btn-edit-post-link' ); ?>
      <?php if(has_post_thumbnail()): ?>
         <div class="img-cap"><img src="<?php the_post_thumbnail_url();?>" class="img-fluid rounded-circle img-thumbnail"/></div>
      <?php else: ?>
         <div class="img-cap"><img src="<?php bloginfo('template_directory');?>/images/icon1.jpg" class="img-fluid rounded-circle img-thumbnail"/></div>
      <?php endif; ?>
      <h2 class="fw-normal"><?php the_title(); ?></h2>
      <div class="card-content">
        <?php the_content();?>
      </div>
      <?php $tags = get_the_tags(); $curr_tag = ($tags)?$tags[0]->slug : "$cnt"; $tagsList[] = $curr_tag; ?>
      <p class="text-center"><a class="btn btn-secondary btn-round" href="javascript:void(0)" role="tab-btn" target="#bubbles-tab-<?php echo $curr_tag;?>" >Read more</a></p>
    </div><!-- /.col-lg-4 -->
  <?php endforeach; endif; ?>
  </div>
  <div class="row">
    <div class="bubbles"> 
      <?php foreach ($tagsList as $tag_item) : ?>
      <div id= "bubbles-tab-<?php echo $tag_item; ?>" class="bubble-container tab-pane" role="tabpanel" aria-labelledby="bubbles-tab-<?php echo $tag_item; ?>">
      <?php  
       $posts = get_posts( array(
        'category_name'         => $tag_item,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page'   => -1,
        'order'            => 'DESC',
        ));
      ?>
         <?php if(count($posts) > 0): foreach ( $posts as $post ) : setup_postdata( $post );?>
          <div class="bubble round"><?php the_title();?>
          <?php edit_post_link( __( 'Edit', 'textdomain' ), '<div class="floated">', '</div>', null, 'btn btn-default btn-sm btn-edit-post-link' ); ?>
            <div class="d-none"><h3 class="headline"><?php the_title();?></h3><?php the_content() ?></div>
          </div>
        <?php endforeach; else: ?>
          <div>No posts  tagged <?php  $tag_item; ?></div>
        <?php endif;?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>