<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-light main">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>profil/sejarah">Sejarah</a>
                    <a class="dropdown-item" href="<?= base_url()?>profil/visi-misi">Visi dan Misi</a>
                    <a class="dropdown-item" href="<?= base_url()?>profil/tugas-dan-fungsi">Tugas dan Fungsi</a>
                    <a class="dropdown-item" href="<?= base_url()?>profil/struktur-organisasi">Struktur Organisasi</a>
                    <a class="dropdown-item" href="<?= base_url()?>profil/info-pejabat">Info Pejabat</a>
                    <a class="dropdown-item" href="<?= base_url()?>profil/lokasi-kantor">Lokasi Kantor</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Informasi SDA</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>">Data SDA</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Peta SDA</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publikasi</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>">Buku Tahunan</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Leaflet</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Hidrologi</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>">Foto</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Video</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan Publik</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>">Saran dan Pengaduan</a>
                    <a class="dropdown-item" href="<?= base_url()?>permintaan-data">Permintaan Data</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">TKPSDA</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">P3A</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>">Database P3A</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Usulan Perbaikan</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Peta Lokasi P3A</a>
                    <a class="dropdown-item" href="<?= base_url()?>">Pelaporan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
            </li>
        </ul>
    </div>
</nav>