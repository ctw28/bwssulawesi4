                <!-- HEADLINE -->
                <div class="headline mobile-hide">                          
                    <section class="main-news">
                        <img src="<?= base_url()?>assets/images/berita/thumbs/thumb_1000X1000_<?= $main_news->foto ?>" alt="<?= $main_news->judul_berita ?>">
                        <div class="main-news-label">
                            <span>Berita Utama</span>
                        </div>
                        <div class="main-news-title">
                            <a href="news/<?= urlencode($main_news->seo_title); ?>"><?= $main_news->judul_berita ?></a>
                            <small><?= $main_news->time_indo ?></small>
                        </div>
                    </section>
                    <section class="main-videos">

                        <div class="video-main-1">
                            <div class="embed-responsive embed-responsive-21by9">
                               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FnJ9T7jMvCo" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-main-2">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe src="https://www.youtube.com/embed/mmKjbxASGlQ" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe src="https://www.youtube.com/embed/V6wAyXetXDY" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                </div>

            	<?= $this->load->view('part/support-section');?>
                
				<!-- BERITA BWS -->

                <div class="title-container-content"><i class="fa fa-list"></i> Berita BWS Sulawesi IV Kendari
                    <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                </div>
                <section class="list-container">
                    <?php 
                        foreach ($other_news as $row) {                          
                    ?>
                    <div class="list-item">
                        <img alt="image" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?= $row->foto ?>">
                        <div class="list-item-title">
                            <a href="news/<?= urlencode($row->seo_title); ?>"><?= $row->judul_berita?></a>
                        </div>
                    </div>
                    <?php 
                        } //end for
                    ?> 
                </section>

                <!-- BERITA PUPR -->
                <div class="title-container-content mobile-hide"><i class="fa fa-list"></i> Berita Kementerian PUPR
                    <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                </div>
                <section class="list-container mobile-hide">
                    <div class="list-item">
                        <img alt="image" src="<?= base_url()?>assets/images/c.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img alt="image" src="<?= base_url()?>assets/images/b.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img alt="image" src="<?= base_url()?>assets/images/e.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img alt="image" src="<?= base_url()?>assets/images/d.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img alt="image" src="<?= base_url()?>assets/images/b.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                </section>


                




				<section class="content-part-2">
                    <div class="container-1 mobile-hide">
                        <div class="title-container-content"><i class="fa fa-bullseye "></i> Poling</div>
                        <div class="content-container poling">
                            <p>Apa Pendapat Anda Tentang Tampilan Website ini ?</p>
                            <input type="radio" name="opt" id="opt1" checked> <label for="opt1">Bagus Sekali</label>
                            <input type="radio" name="opt" id="opt2"> <label for="opt2"> Bagus</label>
                            <input type="radio" name="opt" id="opt3"> <label for="opt3"> Biasa</label>
                            <input type="radio" name="opt" id="opt4"> <label for="opt4"> Kurang</label>
                        </div>
                        <div class="title-container-content"><i class="fa fa-bullhorn "></i> Pengumuman</div>
                        <div class="list-item-2">
                            <ul class="content-container ">
                              <?php foreach ($pengumuman->result() as $row) { ?> 
                                <a href="pengumuman/selengkapnya/<?= $row->id_pengumuman ?>"><li><i class="fa fa-caret-right"></i> <?= $row->judul_pengumuman ?></li></a>
                              <?php } ?>
                            </ul>
                        </div>
                        <div class="title-container-content"><i class="fa fa-book"></i> Publikasi</div>
                        <div class="publikasi">
                            <div class="publikasi-item">
                                <img alt="image" src="<?= base_url()?>assets/images/buletin.jpg">
                                <p>Buletin</p>
                            </div>
                            <div class="publikasi-item">
                                <img alt="image" src="<?= base_url()?>assets/images/pulibkasi-hidrologi.jpg">
                                <p>Buletin</p>
                            </div>
                            <div class="publikasi-item">
                                <img alt="image" src="<?= base_url()?>assets/images/publikasi-hidrologi-2.jpg">
                                <p>Buletin</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-2">
                        <div class="title-container-content"><i class="fa fa-bookmark "></i> Events</div>
                        <div class="list-item-3">
                            <?php foreach ($agenda->result() as $row) { ?>
                                <div class="content-container event-item">
                                    <h6><?= $row->judul_agenda ?></h6>
                                    <i class="fa fa-map-marker "></i> <?= $row->tempat ?> <br>
                                    <i class="fa fa-calendar"></i> <?= $row->tgl_agenda; ?>  
                                    <!-- <i class="fa fa-clock-o"></i> 07.00 Wita -->
                                </div>
                            <?php } ?>                           
                        </div>
                        <div class="title-container-content"><i class="fa fa-bookmark "></i> Pengunjung Website</div>
                        <div class="content-container pengunjung-container">
                            <h4>999999999999</h4>
                        </div>
                    </div>

                    <div class="container-3 mobile-hide">
                        <div class="title-container-content"><i class="fa fa-user-circle-o"></i> Layanan</div>
                        <div class="list-item-2">
                            <ul class="content-container ">
                                <a href="<?= base_url()?>permintaan-data"><li><img alt="image" src="<?= base_url()?>assets/images/logo/permintaan-data.png"></li></a>
                                <a href=""><li><img alt="image" src="<?= base_url()?>assets/images/logo/pengaduan.png"></li></a>
                            </ul>
                        </div>                        
                        <div class="poster">
                            <img alt="image" src="<?= base_url()?>assets/images/banner.jpg">
                        </div>
                    </div>
                </section>

                <div class="title-container-content mobile-hide"><i class="fa fa-building "></i> Kegiatan Strategis
                    <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                </div>
                <section class="kegiatan-strategis list-container mobile-hide">
                    <div class="list-item-4">
                        <img alt="image" src="<?= base_url()?>assets/images/ladongi.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendungan ladongi</a>
                            <p>Lokasi : Kabupaten Kolaka Timur<br>
                            Tahun : 2016-2020</p>
                        </div>                        
                    </div>
                    <div class="list-item-4">
                        <img alt="image" src="<?= base_url()?>assets/images/pelosika.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendungan Pelosika</a>
                            <p>Lokasi : Kab. Kolaka Timur dan Konawe<br>
                            Tahun : 2019-2023</p>
                        </div>
                    </div>
                    <div class="list-item-4">
                        <img alt="image" src="<?= base_url()?>assets/images/tongauna.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendung Tongauna</a>
                            <p>Lokasi : Kabupaten Kolaka Timur<br>
                            Tahun : 2016-2018</p>
                        </div>
                    </div>
                    <div class="list-item-4">
                        <img alt="image" src="<?= base_url()?>assets/images/tongauna.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendung Tongauna</a>
                            <p>Lokasi : Kabupaten Kolaka Timur<br>
                            Tahun : 2016-2018</p>
                        </div>
                    </div>
                </section>