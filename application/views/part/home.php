                <!-- HEADLINE -->
                <section class="headline">                          
                    <div class="main-news">
                        <img src="<?= base_url()?>assets/images/berita/thumbs/thumb_1000X1000_<?= $main_news->foto ?>" alt="<?= $main_news->judul_berita ?>">
                        <div class="main-news-label">
                            <span>Berita Utama</span>
                        </div>
                        <div class="main-news-title">
                            <h2><a href="news/<?= urlencode($main_news->seo_title); ?>"><?= $main_news->judul_berita ?></a></h2>
                            <small class="main-news-info"><?= $main_news->time_indo ?></small>
                        </div>
                    </div>

                    <div class="main-videos mobile-hide">
                        <div class="video-main-1">
                            <a data-fancybox href="<?= $videos['videoEmbed'][0] ?>">
                                <div class="play"></div>
                                <img alt="video-thumb" src="<?= $videos['videoThumb'][0]?>">
                            </a>
                        </div>
                        <div class="video-main-2">
                            <a data-fancybox href="<?= $videos['videoEmbed'][1] ?>">
                                <div class="play"></div>
                                <img alt="video-thumb" src="<?= $videos['videoThumb'][1]?>">
                            </a>
                            <a data-fancybox href="<?= $videos['videoEmbed'][2] ?>">
                                <div class="play"></div>
                                <img alt="video-thumb" src="<?= $videos['videoThumb'][2]?>">
                            </a>
                        </div>
                    </div>
                </section>

            	<?= $this->load->view('part/support-section');?>
                
				<!-- BERITA BWS -->
                <section>
                    <div class="content-title"><i class="fa fa-list"></i> Berita BWS Sulawesi IV Kendari
                        <a class="pull-right" href="<?= base_url()?>publikasi/berita">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                    </div>
                    <div class="list-container">
                        <?php 
                            foreach ($other_news as $row) {                          
                        ?>
                        <div class="list-item">
                            <img alt="image" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?= $row->foto ?>">
                            <div class="list-item-title">
                                <h5><a href="news/<?= urlencode($row->seo_title); ?>"><?= $row->judul_berita?></a></h5>
                            </div>
                        </div>
                        <?php 
                            } //end for
                        ?>
                    </div>
                </section>

                <!-- BERITA PUPR -->
                <section class="mobile-hide">
                    <div class="content-title"><i class="fa fa-list"></i> Berita Kementerian PUPR
                        <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                    </div>
                    <div class="list-container">
                        <?php 
                            foreach ($other_news as $row) {                          
                        ?>
                        <div class="list-item">
                            <img alt="image" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?= $row->foto ?>">
                            <div class="list-item-title">
                                <h5><a href="news/<?= urlencode($row->seo_title); ?>"><?= $row->judul_berita?></a></h5>
                            </div>
                        </div>
                        <?php 
                            } //end for
                        ?>
                    </div>
                </section>


				<section>
                    <div class="container-1">
                        <div class="mobile-hide">
                            
                        <div class="content-title"><i class="fa fa-bullseye "></i> Poling</div>
                        <div class="content-container poling">
                            <form action="">                            
                                <p>Apa Pendapat Anda Tentang Tampilan Website ini ?</p>
                                <input type="radio" name="opt" id="opt1" checked> <label for="opt1">Bagus Sekali</label>
                                <input type="radio" name="opt" id="opt2"> <label for="opt2"> Bagus</label>
                                <input type="radio" name="opt" id="opt3"> <label for="opt3"> Biasa</label>
                                <input type="radio" name="opt" id="opt4"> <label for="opt4"> Kurang</label>
                                <input type="submit" name="submit" value="Submit" class="btn btn-warning btn-custom">
                            </form>
                        </div>
                        </div>

                        <div class="content-title"><i class="fa fa-bullhorn "></i> Pengumuman</div>
                        <div class="content-container">
                            <ul class="list-item-2">
                              <?php foreach ($pengumuman->result() as $row) { ?> 
                                <li><a href="pengumuman/selengkapnya/<?= $row->id_pengumuman ?>"><i class="fa fa-caret-right"></i> <?= $row->judul_pengumuman ?></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                        
                        <div class="content-title mobile-hide"><i class="fa fa-book"></i> Publikasi</div>
                        <div class="publikasi ">
                            <div class="publikasi-item mobile-hide">
                                <img alt="image" src="<?= base_url()?>assets/images/buletin.jpg">
                                <p>Buletin</p>
                            </div>
                            <div class="publikasi-item mobile-hide">
                                <img alt="image" src="<?= base_url()?>assets/images/pulibkasi-hidrologi.jpg">
                                <p>Buletin</p>
                            </div>
                            <div class="publikasi-item mobile-hide">
                                <img alt="image" src="<?= base_url()?>assets/images/publikasi-hidrologi-2.jpg">
                                <p>Buletin</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-2">

                        <div class="content-title mobile-hide"><i class="fa fa-bookmark "></i> Temukan Kami</div>
                        <div class="content-container">
                            <div class="social-media-container mobile-hide">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-youtube-play"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </div>
                        </div>
                        <div class="content-title mobile-hide"><i class="fa fa-bookmark "></i> Events</div>
                        <?php foreach ($agenda->result() as $row) { ?>
                            <div class="content-container event-item mobile-hide">
                                <h6><?= $row->judul_agenda ?></h6>
                                <i class="fa fa-map-marker "></i> <?= $row->tempat ?> <br>
                                <i class="fa fa-calendar"></i> <?= $row->tgl_agenda; ?>  
                                <!-- <i class="fa fa-clock-o"></i> 07.00 Wita -->
                            </div>
                        <?php } ?>                           
                        <div class="content-title"><i class="fa fa-bookmark "></i> Pengunjung Website</div>
                        <div class="content-container pengunjung-container">
                            <h4>999999999999</h4>
                        </div>
                    </div>

                    <div class="container-3">
                        <div class="content-title"><i class="fa fa-user-circle-o"></i> Layanan</div>
                        <div class="list-item-2">
                            <ul class="content-container ">
                                <li><a href="<?= base_url()?>permintaan-data"><img alt="image" src="<?= base_url()?>assets/images/logo/permintaan-data.png"></a></li>
                                <li><a href="<?= base_url()?>layanan-publik/saran-pengaduan"><img alt="image" src="<?= base_url()?>assets/images/logo/pengaduan.png"></a></li>
                            </ul>
                        </div>                        
                        <div class="poster mobile-hide">
                            <img alt="image" src="<?= base_url()?>assets/images/banner.jpg">
                        </div>
                    </div>
                </section>

                <section class="mobile-hide">                    
                    <div class="content-title"><i class="fa fa-building "></i> Kegiatan Strategis
                        <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                    </div>
                    <div class="list-container">
                        <div class="list-item item-2">
                            <img alt="image" src="<?= base_url()?>assets/images/ladongi.jpg">
                            <div class="list-item-title-2">
                                <h5><a href="">Bendungan ladongi</a></h5>
                                <p>Lokasi : Kabupaten Kolaka Timur<br>
                                Tahun : 2016-2020</p>
                            </div>                        
                        </div>
                        <div class="list-item item-2">
                            <img alt="image" src="<?= base_url()?>assets/images/pelosika.jpg">
                            <div class="list-item-title-2">
                                <h5><a href="">Bendungan Pelosika</a></h5>
                                <p>Lokasi : Kab. Kolaka Timur dan Konawe<br>
                                Tahun : 2019-2023</p>
                            </div>
                        </div>
                        <div class="list-item item-2">
                            <img alt="image" src="<?= base_url()?>assets/images/tongauna.jpg">
                            <div class="list-item-title-2">
                                <h5><a href="">Bendung Tongauna</a></h5>
                                <p>Lokasi : Kabupaten Kolaka Timur<br>
                                Tahun : 2016-2018</p>
                            </div>
                        </div>
                        <div class="list-item item-2">
                            <img alt="image" src="<?= base_url()?>assets/images/tongauna.jpg">
                            <div class="list-item-title-2">
                                <h5><a href="">Bendung Tongauna</a></h5>
                                <p>Lokasi : Kabupaten Kolaka Timur<br>
                                Tahun : 2016-2018</p>
                            </div>
                        </div>
                    </div>
                </section>