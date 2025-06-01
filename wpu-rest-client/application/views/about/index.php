<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<style>
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: grey;
        border-radius: 2px;
    }

    .timeline-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 0rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-left: 5px solid gray;
        border-bottom: 1px solid gray;
    }


    .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    }

    .project-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 1.5rem;
    }

    .project-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: all 0.3s ease;
    }
</style>
<div class="container">
    <div class="row mb-5 mt-5">
        <div class="col text-center">
            <h2 class="section-title">About My Project</h2>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="timeline-card project-card">
                <div class="project-image-wrapper">
                    <img src="assets/img/thumbs/1.png" class="project-image" alt="JSON API Project">

                </div>
                <div class="project-content">
                    <h5 class="fw-bold mb-3">JSON API Practice</h5>
                    <p class="text-muted mb-3">Latihan API menggunakan file JSON untuk memahami struktur data dan pengambilan informasi dari sumber eksternal.</p>

                    <a href="<?= base_url(); ?>../json/latihan1.php" class="btn btn-outline-primary btn-sm project-btn">
                        <i class="fas fa-external-link-alt me-1"></i>View Project
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="timeline-card project-card">
                <div class="project-image-wrapper">
                    <img src="assets/img/thumbs/2.png" class="project-image" alt="WPU HUT Project">
                </div>
                <div class="project-content">

                    <h5 class="fw-bold mb-3">WPU-HUT Website</h5>
                    <p class="text-muted mb-3">Latihan API menggunakan file JSON berbasis website.</p>

                    <a href="<?= base_url(); ?>../wpu-hut/latihan2.html" class="btn btn-outline-primary btn-sm project-btn">
                        <i class="fas fa-external-link-alt me-1"></i>View Project
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="timeline-card project-card">
                <div class="project-image-wrapper">
                    <img src="assets/img/thumbs/3.png" class="project-image" alt="WPU Movie Project">
                </div>
                <div class="project-content">

                    <h5 class="fw-bold mb-3">WPU-MOVIE App</h5>
                    <p class="text-muted mb-3">Latihan API menggunakan Public API OMDb API berbasis website.</p>

                    <a href="<?= base_url(); ?>../wpu-movie/index.html" class="btn btn-outline-primary btn-sm project-btn">
                        <i class="fas fa-external-link-alt me-1"></i>View Project
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="timeline-card project-card">
                <div class="project-image-wrapper">
                    <img src="assets/img/thumbs/4.png" class="project-image" alt="WPU Portfolio Project">

                </div>
                <div class="project-content">

                    <h5 class="fw-bold mb-3">WPU-PORTFOLIO</h5>
                    <p class="text-muted mb-3">Portfolio website dengan integrasi YouTube dan Instagram API menggunakan cURL untuk menampilkan konten dinamis.</p>

                    <a href="<?= base_url(); ?>../WPU-PORTOFOLIO/index.php" class="btn btn-outline-primary btn-sm project-btn">
                        <i class="fas fa-external-link-alt me-1"></i>View Project
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="timeline-card project-card">
                <div class="project-image-wrapper">
                    <img src="assets/img/thumbs/5.png" class="project-image" alt="REST Server Project">

                </div>
                <div class="project-content">

                    <h5 class="fw-bold mb-3">WPU-REST-SERVER</h5>
                    <p class="text-muted mb-3">Pembuatan REST API server menggunakan CodeIgniter 3</p>

                    <a href="<?= base_url(); ?>../wpu-rest-server/" class="btn btn-outline-primary btn-sm project-btn">
                        <i class="fas fa-external-link-alt me-1"></i>View Project
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="timeline-card project-card">
                <div class="project-image-wrapper">
                    <img src="assets/img/thumbs/6.png" class="project-image" alt="REST Client Project">

                </div>
                <div class="project-content">

                    <h5 class="fw-bold mb-3">WPU-REST-CLIENT</h5>
                    <p class="text-muted mb-3">Membuat Rest Client menggunakan framework CodeIgniter3</p>

                    <a href="<?= base_url(); ?>home" class="btn btn-outline-primary btn-sm project-btn">
                        <i class="fas fa-external-link-alt me-1"></i>View Project
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>