<?php 
get_header();
the_post();
?>

<div class="container">
       <h2 class="text-center">
       <?php the_title() ?>
       </h2> 
       <div class="text-center my-3">
            <span class="mx-2">
            <?php 
                    the_date();
            ?>
            </span>
                <span class="mx-2">
            <?php 
                    the_author();
            ?>
                </span>
        </div>
        <div class="text-center">
        <?php
        $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')
        ?>

            <img src="<?php echo $imagePath[0] ?>" alt="" width="500">


        </div>

        <div class="my-2">
            
            <?php the_content() ?>
            
        </div>

        <?php comments_template() ?>

      

       
</div>

<?php 
get_footer(); 
?>