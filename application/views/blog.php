<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('desain/css'); ?>

    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <?php $this->load->view('desain/navbar_blank'); ?>
        <!-- End Navbar -->

        <div class="wrapper">

            <div class="main">
                <!--
                       ==================================================
                           Global Page Section Start
                       ================================================== -->
                <section class="global-page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <h2>News</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--=============================================
               =            Blog With Right Sidebar            =
               ==============================================-->
                <section id="blog-full-width">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo base_url()?>assets/images/blog/post-1.jpg" alt="" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blogpost-title">
                                            <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                                        </h2>
                                        <div class="blog-meta">
                                            <span>Dec 11, 2020</span>
                                            <span>by <a href="">Admin</a></span>
                                            <span><a href="">business</a>,<a href="">people</a></span>
                                        </div>
                                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                        </p>
                                        <a href="./Read-article.php" class="btn btn-dafault btn-details">Continue Reading</a>
                                    </div>

                                </article>
                                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo base_url()?>assets/images/blog/post-2.jpg" alt="" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blogpost-title">
                                            <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                                        </h2>
                                        <div class="blog-meta">
                                            <span>Dec 11, 2020</span>
                                            <span>by <a href="">Admin</a></span>
                                            <span><a href="">business</a>,<a href="">people</a></span>
                                        </div>
                                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                        </p>
                                        <a href="./Read-article.php" class="btn btn-dafault btn-details">Continue Reading</a>
                                    </div>

                                </article>
                                <article class="wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo base_url()?>assets/images/blog/post-3.jpg" alt="" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blogpost-title">
                                       <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                                        </h2>
                                        <div class="blog-meta">
                                            <span>Dec 11, 2020</span>
                                            <span>by <a href="">Admin</a></span>
                                            <span><a href="">business</a>,<a href="">people</a></span>
                                        </div>
                                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                        </p>
                                        <a href="./Read-article.php" class="btn btn-dafault btn-details">Continue Reading</a>
                                    </div>

                                </article>
                            </div>
                            <!-- Sidebar -->
                            <div class="col-md-4">
                                <div class="sidebar">
                                    <div class="search widget">
                                        <form action="" method="get" class="searchform" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"> <i class="now-ui-icons ui-1_zoom-bold"></i> </button>
                                                </span>
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>

                                    <div class="categories widget">
                                        <h3 class="widget-head">Categories</h3>
                                        <ul>
                                            <li>
                                                <a href="">Programin</a> <span class="badge">1</span>
                                            </li>
                                            <li>
                                                <a href="">Multimedia</a> <span class="badge">2</span>
                                            </li>
                                            <li>
                                                <a href="">Networking support</a> <span class="badge">4</span>
                                            </li>
                                            <li>
                                                <a href="">Event Organizer</a> <span class="badge">2</span>
                                            </li>
                                            <li>
                                                <a href="">News</a> <span class="badge">3</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="recent-post widget">
                                        <h3>Recent Posts</h3>

                                        <ul>
                                            <li>
                                                <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                                <time>16 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Statistics,analysis. The key to succes.</a><br>
                                                <time>15 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Blog post without image, only text.</a><br>
                                                <time>14 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Blog post with audio player. Share your creations.</a><br>
                                                <time>14 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Blog post with classic Youtbube player.</a><br>
                                                <time>12 May, 2015</time>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>




                <!--
                ==================================================
                Call To Action Section Start
                ================================================== -->
                <section id="call-to-action">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                        <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <?php $this->load->view('desain/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('desain/js'); ?>




</html>
