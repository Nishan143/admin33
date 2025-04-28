<?php
require_once('functions/function.php');
get_header();
?>
    <!-- add-to-card start -->


    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Full Width Banner Slider</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
        .carousel-item {
          height: 100vh; /* Full screen height */
          background-size: cover;
          background-position: center;
          position: relative;
        }
    
        .carousel-item::before {
          content: "";
          position: absolute;
          top: 0; left: 0;
          height: 100%;
          width: 100%;
          background-color: rgba(0, 0, 0, 0.5); /* dark overlay */
          z-index: 1;
        }
    
        .carousel-caption {
          bottom: 50%;
          transform: translateY(50%);
          z-index: 2;
        }
    
        .carousel-caption h1,
        .carousel-caption p {
          color: #fff;
          text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
        }
    
        .carousel-caption .btn {
          margin-top: 20px;
        }
      </style>
    </head>
    <body>
    
    <!-- Banner Slider Start -->
    <div id="bannerSlider" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerSlider" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#bannerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#bannerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/footer\ green.jpg');">
          <div class="carousel-caption text-center">
            <h1>Welcome to Our Site</h1>
            <p>Modern design meets seamless user experience.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/footer\ beg.jpg');">
          <div class="carousel-caption text-center">
            <h1>Discover New Horizons</h1>
            <p>Explore our latest projects and innovations.</p>
            <a href="#" class="btn btn-light">View Portfolio</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/bennar.jpg');">
          <div class="carousel-caption text-center">
            <h1>Get in Touch</h1>
            <p>Have a project in mind? Let's talk.</p>
            <a href="#" class="btn btn-success">Contact Us</a>
          </div>
        </div>
      </div>
    
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#bannerSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#bannerSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Banner Slider End -->
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
    <!-- add-to-card end -->

   
<?php
    get_footer();
?>