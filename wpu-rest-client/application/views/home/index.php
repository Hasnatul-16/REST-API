<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
  .section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: gray;
    border-radius: 2px;
  }

  .timeline-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border-left: 5px solid gray;
    border-bottom: 1px solid gray;
  }

  .timeline-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 1rem;
  }

  .timeline-icon {
    width: 50px;
    height: 50px;
    background: gray;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    margin-bottom: 1rem;
  }
</style>

<div class="jumbotron" id="home">
  <div class="container">
    <div class="text-center">
      <img src="<?= base_url(); ?>assets/img/profile.jpg" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Hasnatul Fadillah</h1>
      <h3 class="lead">Mahasiswi | Programmer | Data Analyst</h3>
    </div>
  </div>
</div>


<!-- Portfolio -->
<section class="section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5 mt-5">
        <h2 class="section-title"> About Me</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="timeline-card">
          <div class="timeline-icon">
            <i class="fas fa-baby"></i>
          </div>
          <img src="assets/img/thumbs/kota.jpg" alt="Kota Payakumbuh">
          <h5 class="fw-bold mb-3">Kelahiran</h5>
          <p class="text-muted">Lahir di Kota Payakumbuh tanggal 16 Juni 2003, di tengah keindahan alam Sumatera Barat.</p>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="timeline-card">
          <div class="timeline-icon">
            <i class="fas fa-school"></i>
          </div>
          <img src="assets/img/thumbs/mtsn.jpg" alt="Pendidikan Dasar">
          <h5 class="fw-bold mb-3">Pendidikan Dasar</h5>
          <p class="text-muted">Sekolah Dasar di SDN 03 Sungai Kamuyang dan Sekolah Menengah Pertama di MTsN 1 Payakumbuh..</p>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="timeline-card">
          <div class="timeline-icon">
            <i class="fas fa-user-graduate"></i>
          </div>
          <img src="assets/img/thumbs/man.jpg" alt="MAN 2 Payakumbuh">
          <h5 class="fw-bold mb-3">Sekolah Menengah</h5>
          <p class="text-muted">Lulus dari MAN 2 Kota Payakumbuh jurusan MIPA tahun 2022 .</p>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-4 mb-4">
        <div class="timeline-card">
          <div class="timeline-icon">
            <i class="fas fa-university"></i>
          </div>
          <img src="assets/img/thumbs/uin.jpg" alt="UIN Imam Bonjol Padang">
          <h5 class="fw-bold mb-3">Pendidikan Tinggi</h5>
          <p class="text-muted">Menempuh pendidikan di Universitas Islam Negeri Imam Bonjol Padang angkatan 2022.</p>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="timeline-card">
          <div class="timeline-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <img src="assets/img/thumbs/fst.jpg" alt="Fakultas Sains dan Teknologi">
          <h5 class="fw-bold mb-3">Program Studi</h5>
          <p class="text-muted">Fokus pada Program Studi Sistem Informasi di Fakultas Sains dan Teknologi.</p>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="timeline-card">
          <div class="timeline-icon">
            <i class="fas fa-palette"></i>
          </div>
          <img src="assets/img/thumbs/gambar.jpg" alt="Hobi Menggambar">
          <h5 class="fw-bold mb-3">Hobi & Minat</h5>
          <p class="text-muted">Memiliki hobi menggambar . Warna kesukaan adalah biru.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact bg-light" id="contact">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5 mt-5">
        <h2 class="section-title"> Contact</h2>
      </div>
    </div>


    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-secondary text-white mb-4 text-center">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <ul class="list-group mb-4">
          <li class="list-group-item">
            <h3>Location</h3>
          </li>
          <li class="list-group-item">My Home</li>
          <li class="list-group-item">Sungai Kamuyang,kec Luak</li>
          <li class="list-group-item">West Sumatera, Indonesia</li>
        </ul>
      </div>

      <div class="col-lg-6">

        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn bg-secondary text-white">Send Message</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>