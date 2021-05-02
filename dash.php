<?php
session_start();

// print_r( $_SESSION['u_id']);
include_once "includes/header.php";
include_once "dashhead.php";
if(isset( $_SESSION['u_id'])){
?>
<section id="services" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Our Products</h2>
    <p>Recent posts form our Blog</p>
  </header>

  <div class="row">

    <div class="col-sm">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Enameld Wires</span>
        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
        <a href="enameld.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-sm">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Submersible Wires</span>
        <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
        <a href="submersible.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-sm">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Submersible Spares</span>
        <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
        <a href="spares.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <div class="col-sm">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Insulating Materials</span>
        <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
        <a href="insulating.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>

</div>

</section><!-- End Recent Blog Posts Section -->

<?php
}else{
    header("location:index.php");
}
include_once "includes/footer.php";
?>