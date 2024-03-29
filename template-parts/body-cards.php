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
    );
    $posts = get_posts( $args ); $cnt=0;
?>
<div class="bulleted py-5">
  <div class="container">
  <div class="row">
    <h2 class="text-start py-3"><?php print $title; ?></h2>

    <?php if(count($posts) > 0): foreach ( $posts as $post ) : setup_postdata( $post );?>
    <div class="col-lg-4">
      <div class="img-cap">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded-circle img-thumbnail"/>
        <?php else: ?>
            <img src="https://place-hold.it/300x300" class="img-fluid rounded-circle img-thumbnail"/>
        <?php endif; ?>
     </div>
      <h2 class="fw-normal"><?php the_title(); ?></h2>
      <div class="card-content">
        <?php the_content(); ?>
      </div>
      <p class="text-center"><a class="btn btn-secondary btn-round" href="#">Read more</a></p>
    </div><!-- /.col-lg-4 -->
    <?php endforeach;  else: ?>
    <div class="col-lg-4">
      <div class="img-cap"> <img src="https://place-hold.it/300x300" class="rounded-circle"/></div>
      <h2 class="fw-normal">Tactical competencies</h2>
      <div class="card-content">
        <p>
          Shaping the future of an organisation  through technology. 
          Identifying and understanding emerging technologies with disruptive potential. 
          Leading the organisation's technology innovation efforts. Aligning technology vision with business objectives and market trends.
        </p>
      </div>
      <p class="text-center"><a class="btn btn-secondary btn-round" href="#">Read more</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <div class="img-cap"> <img src="https://place-hold.it/300x300" class="rounded-circle"/></div>
      <h2 class="fw-normal">Operational competencies </h2>
      <div class="card-content">
      <p>
        Shaping the future of an organisation  through technology. 
        Identifying and understanding emerging technologies with disruptive potential. 
        Leading the organisation's technology innovation efforts. 
        Aligning technology vision with business objectives and market trends..</p>

      </div>
      <p class="text-center" ><a class="btn btn-secondary btn-round" href="#">Read more</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <div class="img-cap"> <img src="https://place-hold.it/300x300" class="rounded-circle"/></div>
      <h2 class="fw-normal">Operational competencies </h2>
      <div class="card-content">
      <p>
        Shaping the future of an organisation  through technology. 
        Identifying and understanding emerging technologies with disruptive potential. 
        Leading the organisation's technology innovation efforts. 
        Aligning technology vision with business objectives and market trends..</p>

      </div>
      <p class="text-center" ><a class="btn btn-secondary btn-round" href="#">Read more</a></p>
    </div><!-- /.col-lg-4 -->
    
    <?php endif; ?>  
</div>
  </div>
</div>