
<?php 
    $section_name = end(explode('-',basename(__FILE__, '.php'))); 

    $cat = get_category_by_slug($section_name);
    $title = ($cat) ? $cat->cat_name: 'Cards';
    $desc = ($cat) ? $cat->description: 'The category Description';
    $cat_id = ($cat) ? $cat->cat_ID : 9999;
    
    $args = array(
        'category_name' => $section_name,
        'post_status' => 'publish',
        'post_type' => 'post',
        'posts_per_page' => 2,
        );

    $posts = query_posts($args);  $cnt=0;
?>
<!-- Contact form-->
<section class="section bg-gray" id="<?php echo $section_name; ?>">
<div class="container">
  <div class="col-md-6 mx-auto">
  <!--Section heading-->
  <h2 class="section-heading h1 pt-4 text-center"><?php echo $title;?></h2>
  <!--Section description-->
  <p class="section-description text-center">
    <?php echo $desc;?>
  </p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-12 col-xl-12 py-5">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div id="contact-form">
        <?php the_content(); ?>
      </div>
      <?php edit_post_link( __( 'Edit', 'textdomain' ), '<div class="floated">', '</div>', null, 'btn btn-default btn-sm btn-edit-post-link' ); ?>
      <?php endwhile;  else: ?>
          <form id="contact-form" name="contact-form">

            <div class="row>">
              <div class="col-md-12 text-left">Name</div>
            </div>
              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="input-group input-group-lg">
                        <input type="text" placeholder="Firstname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                      </div>
                  </div>
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="input-group input-group-lg">
                        <input type="text" id="lastname" name="lastname" placeholder="lastname" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="row py-5">
                  <!--Grid column-->
                  <div class="col-md-12 ">
                      <label for="email" class="">Your email</label>
                      <div class="input-group input-group-lg">
                          <input type="text" id="email" placeholder="email" name="email" class="form-control">
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <!-- <div class="row">
                  <div class="col-md-12">
                      <div class="md-form">
                          <input type="text" id="subject" name="subject" class="form-control">
                          <label for="subject" class="">Subject</label>
                      </div>
                  </div>
              </div> -->
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12 pb-5">
                    <label for="message">Your message</label>
                      <div class="input-group input-group-lg">
                 
                          <textarea type="text" id="message" name="message" rows="3" class="form-control md-textarea"></textarea>
                      
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center">
              <a class="btn btn-lg btn-secondary btn-round-lg" onclick="javascript:void(0);">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <?php endif; ?>
      <!--Grid column-->

      <!--Grid column-->

  </div>
  </div>
</div>
</section>