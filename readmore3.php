<?php 
$halaman='berita';
include 'header.php'; 
?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-50 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img pb-5 ps-5">
                    <img src="img/blog-3.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    <div class="about-experience">15 years experience</div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0">Informasi</h4>
                    <h1 class="display-3 mb-4">Asam Urat</h1>
                    <p class="mb-4">Asam urat atau gout adalah penyakit yang disebabkan oleh penumpukan kristal asam urat di sendi, sehingga menyebabkan peradangan dan nyeri. Gejala asam urat yang umum terjadi adalah: Nyeri yang tidak tertahankan, Pembengkakan, Rasa panas di persendian, Kemerahan                 
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Memantau pertumbuhan dan perkembangan anak.</p>
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Memberikan vaksinasi sesuai dengan jadwal imunisasi nasional.</p>
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Memberikan saran tentang diet dan gizi yang tepat untuk anak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php include 'footer.php'; ?>