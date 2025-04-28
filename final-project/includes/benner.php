 <!-- banner_part start -->
         <!-- add-to-card start -->
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
        <div class="carousel-item active" style="background-image: url('images/gari.jpg');">
          <div class="carousel-caption text-center">
            <h1>Welcome to Our Smart Krishi</h1>
            <p>Make your dream country for Farming</p>
            <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/cara2.jpg');">
          <div class="carousel-caption text-center">
            <h1>Smart Krishi</h1>
            <p>Make your dream country for Farming.</p>
            <!-- <a href="#" class="btn btn-light">View Portfolio</a> -->
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/bennar.jpg');">
          <div class="carousel-caption text-center">
            <h1>Smart Krishi</h1>
            <p>Make your dream country for Farming</p>
            <!-- <a href="#" class="btn btn-success">Contact Us</a> -->
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
    <!-- add-to-card end -->
    <!-- <section class="banner_part" id="banner_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-10 col-lg-6 offset-md-1 offset-lg-3">
                    <div class="banner_content text-center">
                        <h1>SMART
                            KRISHI</h1>
                        <p>Make your dream country for Farming</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="banner_extra">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                 <div class="container">
                                    <form class="d-flex" role="search">
                                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form> 
                                    <marquee>Smart Krishi Make your dream country for Farming</marquee>
                                </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- banner_part end -->
