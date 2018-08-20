
<!DOCTYPE html>
<html lang="en">
    <head>

        <?php $this->load->view('desain/css'); ?>

        <script>
        $(function($.scrollify()) {

            section : ".section",

        });
      </script>

    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
      <?php $this->load->view('desain/navbar'); ?>
        <!-- End Navbar -->

        <div class="wrapper">

            <div class="main">
                <!--
                ==================================================
                Slider Section Start
                ================================================== -->

                <section id="section" class="page1">
                    <?php $this->load->view('desain/banner'); ?>
                </section>

                    <!--/#main-slider-->
                <!--
                ==================================================
                  About
                ================================================== -->

                <section id="about" class="section-tabs"  >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                    <h2>
                                        INTERMEDIA ?
                                    </h2>
                                    <p>
                                        Unit kegiatan mahasiswa yang berdiri sejak 17 Desember 2011 dan didirikan di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) AMIKOM Purwokerto. Intermedia merupakan suatu wadah untuk para mahasiswa sebagai tempat menggali potensi diri baik dalam hardskill maupun softskill dari mahasiswa itu sendiri.

                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                    <img src="<?php echo base_url()?>assets/images/team.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- /#about -->

                <!--
               ==================================================
                 VISI MISI
               ================================================== -->

                <section id="section" class="page3">
                    <div id="call-to-action">
                        <div class="space-20"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block">
                                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">VISI</h2>
                                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Mencerdaskan Kehidupan Bangsa Dalam Dunia Teknologi.</p>
                                    </div>
                                    <div class="block">
                                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">MISI</h2>
                                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Meningkatkan pengetahuan dan kemampuan anggota UKM INTERMEDIA dalam bidang IT,<br>Menyalurkan kemampuan anggota UKM INTERMEDIA kepada mahasiswa dan masyarakat umum.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--
                    ==================================================
                        DIVISI
                    ================================================== -->

                    <div id="service-page" class="pages service-page" style="">
                        <div class="container">
                            <h2 class="title wow fadeInDown " style="text-align-last:  center;" data-wow-delay=".3s" data-wow-duration="500ms">DIVISI</h2>

                            <div class="row">
                                <div class="col-md-1"></div>

                                <div class="col-md-10">

                                    <div class="block">
                                        <div class="row service-parts">
                                            <div class="col-md-4">
                                                <div class="block  wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                                    <i class="now-ui-icons design-2_html5"></i>
                                                    <h4>PEMROGRAMAN</h4>
                                                    <p>To discuss about programming that the process of taking an algorithm and encoding it into a notation, so that it can be execute</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                                    <i class="now-ui-icons design_image"></i>
                                                    <h4>MULTIMEDIA</h4>
                                                    <p>We concerned with the computer-controlled integration of media where every type of information can be processed digitally.</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                    <h4>JARINGAN</h4>
                                                    <p>Discuss about network security, how to repair hardware and software</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>

                            </div>
                        </div>
                    </div>
                </section>


                <!--
                ==================================================
                NEWS
                ================================================== -->

                <section id="section" >
                    <div class="works page4" style="padding-top: 20px;padding-bottom: 10px;">
                    <div class="container">
                        <div class="section-heading">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">BERITA TERBARU</h2>
                            <p class="wow fadeInDown" data-wow-delay=".5s">
                                Beberapa berita   </p>
                        </div>
                        <div class="row" style="margin-top:5px ;">
                            <div class="col-sm-4 col-xs-12">
                                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo base_url()?>assets/images/blog/post-2.jpg" alt="" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blogpost-title" style="font-size: 12px;">
                                            <a href="#" style="color: green;">IBM intermedia 2018</a>
                                        </h4>
                                        <div class="blog-meta" style="font-size: 10px;color: black;">
                                            <span>Dec 11, 2020</span>
                                            <span>by <a href="">Admin</a></span>
                                            <span><a href="">business</a>,<a href="">people</a></span>
                                        </div>
                                        <p>Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                        </p>
                                        <a href="./Read-article.php" class="btn btn-dafault btn-details">Lanjutkan Baca</a>
                                    </div>

                                </article>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo base_url()?>assets/images/blog/post-2.jpg" alt="" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blogpost-title" style="font-size: 12px;">
                                            <a href="#" style="color: green;">Roadshow 2017</a>
                                        </h4>
                                        <div class="blog-meta" style="font-size: 10px; color: black;">
                                            <span>Dec 11, 2020</span>
                                            <span>by <a href="">Admin</a></span>
                                            <span><a href="">business</a>,<a href="">people</a></span>
                                        </div>
                                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed
                                        </p>
                                        <a href="./Read-article.php" class="btn btn-dafault btn-details">Lanjutkan Baca</a>
                                    </div>

                                </article>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo base_url()?>assets/images/blog/post-2.jpg" alt="" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blogpost-title" style="font-size: 12px;">
                                            <a href="#" style="color: green;">Pebelajaran Intermedia</a>
                                        </h4>
                                        <div class="blog-meta" style="font-size: 10px;color: black;">
                                            <span>Dec 11, 2020</span>
                                            <span>by <a href="">Admin</a></span>
                                            <span><a href="">business</a>,<a href="">people</a></span>
                                        </div>
                                        <p>Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                        </p>
                                        <a href="./Read-article.php" class="btn btn-dafault btn-details">Lanjutkan Baca</a>
                                    </div>

                                </article>
                            </div>

                        </div>
                    </div>
                    </div>
                </section> <!-- #works -->

                <!--
                ==================================================
                Media partners
                ================================================== -->
                <section id="section">
                    <div id="clients">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Media Partners</h2>
                                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                                <div id="clients-logo" class="owl-carousel row">
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-5.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/images/clients/logo-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


                <!--
                ==================================================
                Executive
                ================================================== -->
                <div id="call-to-action" >
                    <div class="container">
                        <h3 class="title wow fadeInDown" style="color: #FFFFFF" data-wow-delay=".3s" data-wow-duration="500ms">EXECUTIVE</h3>
                        <div class="row" >

                            <div class=" col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class=" col-md-2 col-sm-2 col-xs-4">
                                        <p class="category" style="color: #FFFFFF" >KETUM</p>
                                        <img src="<?php echo base_url()?>assets/img/avatar.jpg" alt="Rounded Image" class="rounded-circle img-raised" >
                                    </div>
                                    <div class=" col-md-2 col-sm-2 col-xs-4">
                                        <p class="category" style="color: #FFFFFF">WAKIL</p>
                                        <img src="<?php echo base_url()?>assets/img/avatar.jpg" alt="Circle Image" class="rounded-circle img-raised" >
                                    </div>
                                    <div class=" col-md-2 col-sm-2 col-xs-4">
                                        <p class="category" style="color: #FFFFFF">SEKERTARIS</p>
                                        <img src="<?php echo base_url()?>assets/img/avatar.jpg" alt="Raised Image" class="rounded-circle img-raised"  >
                                    </div>
                                    <div class=" col-md-2 col-sm-2 col-xs-4">
                                        <p class="category" style="color: #FFFFFF">BENDAHARA</p>
                                        <img src="<?php echo base_url()?>assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                                    </div>
                                    <div class=" col-md-2 col-sm-2 col-xs-4">
                                        <p class="category" style="color: #FFFFFF">SEKERTARIS</p>
                                        <img src="<?php echo base_url()?>assets/img/avatar.jpg" alt="Raised Image" class="rounded-circle img-raised"  >
                                    </div>
                                    <div class=" col-md-2 col-sm-2 col-xs-4">
                                        <p class="category" style="color: #FFFFFF">BENDAHARA</p>
                                        <img src="<?php echo base_url()?>assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                                    </div>
                                </div>

                                <a href="./Team.php" style="margin-top: 30px;" class="btn btn-default btn-contact">All executive</a>
                            </div>
                            <div class="col-md-1"></div>

                        </div>
                    </div>
                </div>
                </section>

                <?php $this->load->view('desain/footer'); ?>
            </div>
            </div>
    </body>
   <script src="<?php echo base_url()?>assets/jquery.scrollify.js">
    </script>
    <?php $this->load->view('desain/js'); ?>

</html>
