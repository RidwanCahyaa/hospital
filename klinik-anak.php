<?php 
$halaman='klinik';
include 'header.php'; 
?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <img src="img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    <div class="about-img-inner">
                        <img src="img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                    </div>
                    <div class="about-experience">15 years experience</div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0">Layanan Umum</h4>
                    <h1 class="display-3 mb-4">Klinik Anak</h1>
                    <p class="mb-4">Klinik anak adalah fasilitas kesehatan yang khusus menyediakan layanan medis untuk anak-anak, mulai dari bayi hingga remaja. Klinik ini biasanya memiliki tim profesional yang terlatih dalam menangani berbagai masalah kesehatan yang spesifik pada anak, termasuk pemeriksaan rutin, imunisasi, pengobatan penyakit, dan konsultasi tentang perkembangan anak.</p>
                    <div class="mb-4">
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

<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">__</h4>
            </div>
            <h1 class="display-3 mb-4">Jadwal Dokter</h1>
            <p class="mb-0"></p>
        </div>
        <div class="row g-4 justify-content-center">
            <table style="width:100%">
                <tr>
                    <th>Dokter</th>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
                <tr>
                    <td>Ridwan Cahya</td>
                    <td>Senin, Rabu & Kamis</td>
                    <td>09:00-11:00</td>
                </tr>
                <tr>
                    <td>Acep Arimansyah</td>
                    <td>Selasa & Jumat</td>
                    <td>08:00-11:30</td>
                </tr>
                <tr>
                    <td>Ridwan Cahya</td>
                    <td>Senin, Rabu & Kamis</td>
                    <td>09:00-11:00</td>
                </tr>
                <tr>
                    <td>Acep Arimansyah</td>
                    <td>Selasa & Jumat</td>
                    <td>08:00-11:30</td>
                </tr>
                <tr>
                    <td>Ridwan Cahya</td>
                    <td>Senin, Rabu & Kamis</td>
                    <td>09:00-11:00</td>
                </tr>
                <tr>
                    <td>Acep Arimansyah</td>
                    <td>Selasa & Jumat</td>
                    <td>08:00-11:30</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- Team End -->

<?php include 'footer.php'; ?>