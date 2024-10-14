<?php 
$halaman='tentang';
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
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang RSKK</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Tentang RSKK</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img pb-7 ps-7">
                    <img src="img/profil.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    <!-- <div class="about-experience">15 years experience</div> -->
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0">Profil</h4>
                    <h1 class="display-3 mb-4">Visi & Misi</h1>
                    <h4 class="mb-4">Visi</h4>
                    <p class="mb-4">Menjadi RSUD dengan unggulan kesehatan kerja berstandar internasional pada tahun 2030. </p>
                    <h4 class="mb-4">Misi</h4>
                    <p class="mb-4">1. Menyelenggarakan pelayanan kesehatan rujukan yang komprehensif dan holistik, berkualitas dengan unggulan kesehatan kerja. </p>
                    <p class="mb-4">2. Berkontribusi dalam pendidikan, pelatihan, penelitian dan pengembangan di bidang kesehatan kerja.</p>
                    <p class="mb-4">Sebagai salah satu upaya dalam mewujudkan Misi tersebut, BLUD RSKK telah mendapatkan predikat Akreditasi Paripurna pada tahun 2022. BLUD RSKK aktif dalam berbagai kegiatan dan senantiasa meningkatkan kualitas pelayanannya dengan mengirim Sumber Daya Manusia (SDM) BLUD RSKK mengikuti berbagai pelatihan peningkatan kompetensi.</p>
                    <p class="mb-4">Dalam pemberian layanan kesehatan kepada masyarakat, BLUD RSKK menganut nilai-nilai berikut:</p>
                    
                        <h6 class="text-secondary"><i class="text-primary me-2"></i>a. Profesional,</h6>
                        <h6 class="text-secondary"><i class="text-primary me-2"></i>b. Akuntabilitas,</h6>
                        <h6 class="text-secondary"><i class="text-primary me-2"></i>c. Transparansi,</h6>
                        <h6 class="text-secondary"><i class="text-primary me-2"></i>d. Integritas,</h6>
                        <h6 class="text-secondary"><i class="text-primary me-2"></i>e. Kerja sama.</h6>
                        <p class="mb-4">Nilai-nilai yang dianut BLUD RSKK tersebut diharapkan dapat tercermin dalam setiap layanan yang diberikan, sehingga dapat meningkatkan kualitas pelayanan kesehatan masyarakat yang diberikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">RSKK</h4>
                    </div>
                    <h1 class="display-3 mb-4">STRUKTUR ORGANISASI</h1>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        <div class="container py-5">
            <img src="img/struktur-ORGANISASI.png" width="1100px">
        </div>

        <?php include 'footer.php'; ?>