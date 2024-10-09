<?php 
$halaman='berita';
include 'header.php'; 
?>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">BERITA</h3>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Blog</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">RSKK</h4>
                    </div>
                    <h1 class="display-3 mb-4">Informasi Terkini</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Remove back pain while working on a physio</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Regular excercise can slow ageing process</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

          <!-- Feature Start -->
          <!-- <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
                    </div>
                    <h1 class="display-3 mb-4">Why Choose Us? Get Your Life Style Back</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-diagnoses fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Licensed Therapist</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Personalized Treatment</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-hospital-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Therapy Goals</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-users fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Practitioners Network</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-spa fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Comfortable Center</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-heart fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Experienced Stuff</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fab fa-pied-piper fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Therapy Goals</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user-md fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Licensed Therapist</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->

        <?php include 'footer.php'; ?>