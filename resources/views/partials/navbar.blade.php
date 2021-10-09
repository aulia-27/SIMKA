<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">SIMKA (Logo)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Jadwal Pengajian") ? 'active' : '' }}" href="/jadwal-pengajian">Jadwal Pengajian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Informasi Kegiatan") ? 'active' : '' }}" href="informasi-kegiatan">Informasi Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Informasi Keuangan") ? 'active' : '' }}" href="informasi-keuangan">Laporan Keuangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>