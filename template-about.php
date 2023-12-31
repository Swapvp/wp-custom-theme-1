<?php
//Template Name:about
get_header()
?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri() ?>/images/about-img.jpg" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
    get_footer();
  ?>