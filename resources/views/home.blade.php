@extends('layouts.main')
@section('container')
<section class="page-section portfolio" id="portfolio">
  <div class="container">
      <!-- Portfolio Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Menu SIMKA</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
          <div class="divider"></div>
          <div class="divider"></div>
      </div>
      <!-- Portfolio Grid Items-->
      <div class="row justify-content-center">
          <!-- Portfolio Item 1-->
          <div class="col-md-6 col-lg-4 mb-5">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                      <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="Jadwal Pengajian" />
              </div>
          </div>
          <!-- Portfolio Item 2-->
          <div class="col-md-6 col-lg-4 mb-5">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                      <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="Informasi Kegiatan" />
              </div>
          </div>
          <!-- Portfolio Item 3-->
          <div class="col-md-6 col-lg-4 mb-5">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                      <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="Laporan Keuangan" />
              </div>
          </div>
          <!-- Portfolio Item 4-->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                      <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="ICON" />
              </div>
          </div>
          <!-- Portfolio Item 5-->
          <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                      <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="ICON" />
              </div>
          </div>
          <!-- Portfolio Item 6-->
          <div class="col-md-6 col-lg-4">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                      <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="ICON" />
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
