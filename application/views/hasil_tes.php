<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('layout/header.php'); ?>
</head>
<body>
<?php $this->load->view('layout/navbar.php'); ?>
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h2>Hasil Prediksi <span>Jurusan</span></h2>
    </div>
  </section>
  <main id="main">
  <div class="container">
    <div>
    <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
    </script>
  </div>
  <div class="container">
  <h3 style="font-weight:600; font-size:36px; color:var(--color-secondary)">Jurusan yang cocok</h3>
    <p class="fst-italic">
        Jurusan yang cocok dengan hasil tes kecocokan jurusan anda adalah Jurusan ...<br>
        Pada jurusan ini, program studi yang cocok adalah:
    </p>
    <ul style="list-style: none;">
        <li><i class="bi bi-check-circle-fill" style="font: size 24px; color:var(--color-primary)"></i> Teknik Informatika</li>
        <li><i class="bi bi-check-circle-fill" style="font: size 24px; color:var(--color-primary)"></i> Sistem Informasi</li>
        <li><i class="bi bi-check-circle-fill" style="font: size 24px; color:var(--color-primary)"></i> Teknologi Rekayasa Komputer</li>
    </ul>
  </div>
  </main>
  <?php $this->load->view('layout/footer.php'); ?>
</body>
</html>