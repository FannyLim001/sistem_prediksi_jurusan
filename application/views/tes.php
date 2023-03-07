<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/header.php'); ?>
</head>
<body>
    <?php $this->load->view('layout/navbar.php'); ?>
    <!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="container">
      <div class="row justify-content-center gy-6">

        <div class="col-lg-5 col-md-8">
          <img src="<?= base_url('assets/template/assets/img/hero-carousel/hero-carousel-1.svg') ?>" alt="" class="img-fluid img">
        </div>

        <div class="col-lg-9 text-center">
          <h2>Tes Kecocokan Jurusan PCR</h2>
          <p>Tes kecocokan jurusan berdasarkan jenis sekolah menengah, jurusan sekolah, beserta beberapa nilai dari jurusan sekolah</p>
        </div>

      </div>
    </div>
  </div><!-- End Carousel Item -->
</div>
</section><!-- End Hero Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container">

    <div class="row gy-5 gx-lg-5 justify-content-center">

      <div class="col-lg-8">
      <form action="<?= site_url('hasil'); ?>" method="post">
        <div class="row">
        <div class="col-md-6">
                <select class="form-control" style="width: 100%;" name="sekolah">
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="MA">MA</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control" style="width: 100%;" name="jurusan">
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                </select>
            </div>
        </div>
          <div class="form-group mt-3">
            <input type="number" class="form-control" name="nilai1" id="subject" placeholder="Nilai Matematika" required>
          </div>
          <div class="form-group mt-3">
            <input type="number" class="form-control" name="nilai2" id="subject" placeholder="Nilai Fisika" required>
          </div>
          <div class="form-group mt-3">
            <input type="number" class="form-control" name="nilai3" id="subject" placeholder="Nilai Bahasa Inggris" required>
          </div><br>
          <div class="text-center"><button type="submit" style="color:var(--color-white); background:var(--color-primary); font-family:var(--font-secondary); padding:8px 23px; border-radius:4px; border:none">Prediksi Hasil Jurusan</button></div>
        </form>
      </div><!-- End Contact Form -->
    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php $this->load->view('layout/footer.php'); ?>
</body>
</html>