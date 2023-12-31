<?php 
  get_header() 
?>



<div class="container">
  <div class="row">

<?php get_sidebar() ?>
  <div class="col-md-10">
    <div class="row">
    <?php 
  if(have_posts()){
    while(have_posts()){
      the_post();
  $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')
?>
    <div class="col-md-6 col-sm-12">
      <div class="card m-3">
        <img src="<?php echo $imagePath[0] ?>" alt="">
        <div class="blog-card-info">
          <h2 class="p-3"><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h2>
          <?php the_excerpt() ?>
          <div class="text-center blog-btn">
            <a href="<?php the_permalink() ?>"> <button>Read More</button></a>
          </div>
        </div>
      </div>
    </div>
<?php  
    }
  } 
?>
    </div>

  </div>


  </div>
</div>

<?php wp_pagenavi(); ?>



<?php
  get_footer();
?>