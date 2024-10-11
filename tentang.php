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

        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">RSKK</h4>
                    </div>
                    <h1 class="display-3 mb-4">VISI & MISI</h1>
                    <h2 class="mb-4">visi</h2>
                    <p>Menjadi RSUD dengan ungulan kesehatan kerja</p>

                    <h2 class="mb-4">misi</h2>
                    <p>Menyelenggarakan Pelayanan Kesehatan Rujukan yang Komprehensif dan Holistik, Berkualitas dengan Unggulan Kesehatan Kerja. & Berkontribusi dalam Pendidikan, Pelatihan, Penelitian dan Pengembangan di bidang Kesehatan Kerja</p>
                </div>
            </div>
        </div>
        <!-- Team End -->

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
            <img src="img/struktur-ORGANISASI.png" width="1300px">
        </div>

        <?php include 'footer.php'; ?>