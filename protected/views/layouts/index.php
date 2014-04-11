<!DOCTYPE html>
<html>
    <head>
        <title>LPFH Frontend</title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container" id="top">
            <div id="header">
                <!-- top menu -->
                <div id="top-menu" class="row">
                    <nav>
                        <div class="container-fluid"> 
                        <!-- Brand and toggle get grouped for better mobile display -->
                            <ul class="nav navbar-nav">
                                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Beranda</a></li>
                                <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> &nbsp;Hubungi Kami</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Twitter</a></li>
                                <li><a href="contact.php">Facebook</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- header , logo , address -->
                <div id="logo">
                    <div class="row">
                        <div class="col-md-9">
                            <a href="index.php"><img src="images/logo.png" /></a>
                        </div>
                        <div class="col-md-3">
                            <address>
                                Kantor Pusat<br>
                                Jl.Veteran No.10 Jakarta<br>
                                Telp.(021)3868201-5, 3455021<br>
                                Fax.(021)3848792 <br>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- navigation menu -->
                <div class="row">
                    <nav class="navbar navbar-inverse navbar-inner" role="navigation">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="dropdown active">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFIL <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Sejarah</a></li>
                                <li><a href="#">Visi Misi</a></li>
                                <li><a href="#">Struktur Organisasi</a></li>
                                <li><a href="#">Fasilitas</a></li>
                                <li><a href="#">Laporan Keuangan</a></li>
                              </ul>
                            </li>
                            <li><a href="#">KAJIAN</a></li>
                            <li><a href="#">DIKLAT</a></li>
                            <li><a href="#">GALERI</a></li>
                            <li><a href="#">KEGIATAN</a></li>
                            <li><a href="#">PENGUMUMAN</a></li>
                            <li><a href="#">FAQs</a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
        <div class="container" id="content">
            <!-- slider -->
            <div class="row">
                <div class="col-md-8">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img class="media-object" src="images/slide.jpg" alt="image" width="100%" />
                          <div class="carousel-caption">
                            <h3>Title One <small>21 Maret 2014</small></h3>
                            <p>
                                Lorem ipsum lorem ipsum dolor sit amett lorem ipsum dolor sit amet
                                Lorem ipsum lorem ipsum dolor sit amett lorem ipsum dolor sit amet
                                lorem ipsum dolor sit amet....
                            </p>
                            <a href="#">Readmore &raquo;</a>
                          </div>
                        </div>
                        <div class="item">
                          <img class="media-object" src="images/slide.jpg" alt="image" width="100%" />
                          <div class="carousel-caption">
                            <h3>Title Two <small>21 Maret 2014</small></h3>
                            <p>
                                Lorem ipsum lorem ipsum dolor sit amett lorem ipsum dolor sit amet
                                Lorem ipsum lorem ipsum dolor sit amett lorem ipsum dolor sit amet
                                lorem ipsum dolor sit amet....
                            </p>
                            <a href="#">Readmore &raquo;</a>
                          </div>
                        </div>
                        <div class="item">
                          <img class="media-object" src="images/slide.jpg" alt="image" width="100%" />
                          <div class="carousel-caption">
                            <h3>Title Three <small>21 Maret 2014</small></h3>
                            <p>
                                Lorem ipsum lorem ipsum dolor sit amett lorem ipsum dolor sit amet
                                Lorem ipsum lorem ipsum dolor sit amett lorem ipsum dolor sit amet
                                lorem ipsum dolor sit amet....
                            </p>
                            <a href="#">Readmore &raquo;</a>
                          </div>
                        </div>
                      </div>
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="content-section">
                        <h3>Pengumuman</h3>
                        <div class="row">

                        </div>
                    </div>              
                </div>
                <div class="col-md-2">
                    <div id="content-section">
                        <h3>Agenda Kegiatan</h3>
                        <div class="row">
                            <marquee direction="top">Tess</marquee>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="row">
                <div class="col-md-8" id="content-section">
                    <h3>Berita Lainnya</h3>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-thumbnail" src="images/news.jpg" alt="image" width="100" height="100" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading <small>21 Maret 2014</small></h4>
                            <p>
                                Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum 
                                dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum 
                                dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit... 
                            </p>
                            <a href="detail.php">Readmore &raquo;</a>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-thumbnail" src="images/news.jpg" alt="image" width="100" height="100" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading <small>21 Maret 2014</small></h4>
                            <p>
                                Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum 
                                dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum 
                                dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit... 
                            </p>
                            <a href="detail.php">Readmore &raquo;</a>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-thumbnail" src="images/news.jpg" alt="image" width="100" height="100" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading <small>21 Maret 2014</small></h4>
                            <p>
                                Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum 
                                dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum 
                                dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit... 
                            </p>
                            <a href="detail.php">Readmore &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="content-section">
                    <div>
                        <h3>Artikel</h3>
                        <div class="row">
                            <ul>
                                <li><a href="#">Title lorem ipsum dolor sit amet title</a></li>
                                <li><a href="#">Title lorem ipsum dolor sit amet title</a></li>
                                <li><a href="#">Title lorem ipsum dolor sit amet title</a></li>
                                <li><a href="#">Title lorem ipsum dolor sit amet title</a></li>
                                <li><a href="#">Title lorem ipsum dolor sit amet title</a></li>
                                <li><a href="#">Title lorem ipsum dolor sit amet title</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3>Galeri</h3>
                        <div class="carousel-2 slide" id="myCarousel-2">
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                              <div class="col-xs-3"><a href="#"><img src="images/news.jpg" class="img-responsive"></a></div>
                            </div>
                          </div>
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>      
            </div>          
        </div>

        <div class="container" id="footer">
            &copy; Copyright 2014. All Right Reserved
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript">
        $('.carousel').carousel();

        $('#myCarousel-2').carousel({
          interval: 4000
        })

        $('.carousel-2 .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
          
          for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
          }
        });
        </script>
    </body>
</html>