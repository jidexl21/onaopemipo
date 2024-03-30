<?php 
/** 
 *  Title: Home Split-Text
 *  Description: This area adds a two item long Section
 *  Guide: Create a category with the slug "splittext"
 * 
 **/
 ?>

<?php 
    $section_name = end(explode('-',basename(__FILE__, '.php'))); 

    $cat = get_category_by_slug($section_name);
    $title = ($cat) ? $cat->cat_name: 'Cards';
    $cat_id = ($cat) ? $cat->cat_ID : 9999;
    $args = array(
        'posts_per_page'   => 2,
        'category'         => $cat_id,
        'order'            => 'DESC',
    );
    $posts = get_posts( $args ); $cnt=0;
?>
<div class="bg-off-white-split-reverse">
  <div class="container">
    <div class="row featurette">
    <?php if(count($posts) > 0): foreach ( $posts as $post ) : setup_postdata( $post );?>
      <div class="col-md-6">
      <?php edit_post_link( __( 'Edit', 'textdomain' ), '<div class="floated">', '</div>', null, 'btn btn-default btn-sm btn-edit-post-link' ); ?>
      <?php the_content(); ?>
      </div>
    <?php endforeach; else: ?>
      <div class="col-md-6 ">
        <h2 class="lead"> This is dummy text.<br/> To create content, Create a post in a category 
            category with the slug "splittext" <br/>

           Only the last two matching items will be displayed
          The content will be displayed here and in the next space
        </h2>
      </div>
      <div class="col-md-6">
        <p>
        In the vast ocean of technology, each wave and tide has guided me to the shores of innovation. My journey reflects a passion for delivering value, steering EMEA's digital future, and leveraging Enterprise Data and Digital Transformation.
        </p>
        </p>
        Recognizing the role of technology as a crucial enabler, I've cultivated expertise across diverse domains. As the Chief Enterprise Architect, I collaborate closely with executives to make organizational data actionable in today's dynamic technological landscape.
        </p>
        </p>
        My trailblazing journey includes orchestrating a digital transformation blueprint for Access Corporation, contributing to a 25% revenue growth. Success extends to key players like First Bank of Nigeria, Polaris Bank, Nedbank South Africa, and Ahlibank, affirming their dominance in the technology and data landscape across EMEA.
        </p>
        </p>
        As a go-to resource for Technology Transformation, Data Transformation, and Digital Automation, I am a lifelong learner committed to achieving goals for key stakeholders globally.
        </p>
      </div>
    <?php endif; ?>
    </div><!--/.row .featurette -->
  </div>

</div>
<div class="spacer-textured">
&nbsp;
</div>

