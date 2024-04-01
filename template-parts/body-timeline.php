<?php $section_name = end(explode('-',basename(__FILE__, '.php')));

    $cat = get_category_by_slug($section_name);
    $title = ($cat) ? $cat->cat_name: 'Timeline';
    $cat_id = ($cat) ? $cat->cat_ID : 9999;
    $args = array(
        'posts_per_page'   => -1,
        'cat'         =>  $cat_id,
        'order'            => 'DESC',
    );
  ?>
<!-- timeline -->

<div class="bg-peach py-5" id="<?php echo $section_name; ?>">
<div class="container">

  <div class="page-header">
      <h1 id="timeline"><?php print $title; ?></h1>
  </div>
<?php   $posts = new WP_Query($args);  $cnt=0;?>
  <ul class="timeline"> 

    <?php if($posts->have_posts()): while($posts->have_posts()): $posts->the_post(); ?>
      <li <?php if($cnt % 2 == 0): else : print 'class="timeline-inverted"'; endif;?>>
      <div class="timeline-badge danger"><i class="glyphicon glyphicon-time"></i></div>
        <?php if(has_post_thumbnail()): ?>
            <img src ="<?php the_post_thumbnail_url();?>" height="60px" class="timeline-image"/>
        <?php endif; ?>

        <div class="timeline-panel">
          <div class="timeline-heading">
          <?php edit_post_link( __( 'Edit', 'textdomain' ), '<div class="floated">', '</div>', null, 'btn btn-default btn-sm btn-edit-post-link' ); ?>
            <h4 class="timeline-title"><?php the_title();?></h4>
            <p>
            <?php $from_date = get_post_meta( $post->ID, '_from_date_meta_key', true ); ?>
            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>
            <?php if($from_date): ?>
               <?php echo date_format(date_create($from_date),"Y"); ?> - 
            <?php endif; ?>
              <?php echo get_the_date('Y'); ?>
            </small>
            </p>
          </div>
          <div class="timeline-body">
            <?php the_content(); ?>
          </div>
        </div>
      </li>
    <?php $cnt++; endwhile; else:?>
      <li>
        <div class="timeline-badge danger">
         <i class="glyphicon glyphicon-time"></i>
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Add a timeline item</h4>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo date(get_option('date_format')); ?></small></p>
          </div>
          <div class="timeline-body">
            <p>
              Timeline content comes here. to use this section place items in a category called timeline, or a category that as a slug named timeline <br/>
            </p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge danger">
         <i class="glyphicon glyphicon-time"></i>
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Add another timeline item</h4>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo date(get_option('date_format')); ?></small></p>
          </div>
          <div class="timeline-body">
            <p>
              Timeline content comes here. to use this section place items in a category called timeline, or a category that as a slug named timeline <br/>
            </p>
          </div>
        </div>
      </li>
    <?php endif;?>
  </ul>
</div>
</div>