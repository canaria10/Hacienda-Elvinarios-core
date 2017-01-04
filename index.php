<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
<head>
    <title>Hacienda Elvinarios - Home</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Page Description and Author -->
    <meta content="Intimate - Bootstrap HTML5 Blog Template" name=
    "description">
    <meta content="GrayGrids" name="author"><!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" madia="screen" rel="stylesheet" type=
    "text/css"><!-- Font Icon Css -->
    <link href="fonts/font-awesome.min.css" madia="screen" rel="stylesheet"
    type="text/css">
    <link href="fonts/intimate-fonts.css" madia="screen" rel="stylesheet" type=
    "text/css"><!-- Main Css Styles -->
    <link href="css/main.css" madia="screen" rel="stylesheet" type="text/css">
    <!-- Owl Carousel -->
    <link href="extras/owl/owl.carousel.css" media="screen" rel="stylesheet"
    type="text/css">
    <link href="extras/owl/owl.theme.css" media="screen" rel="stylesheet" type=
    "text/css">
    <link href="extras/animate.css" media="screen" rel="stylesheet" type=
    "text/css">
    <link href="extras/lightbox.css" media="screen" rel="stylesheet" type=
    "text/css">
    <link href="extras/slicknav.css" media="screen" rel="stylesheet" type=
    "text/css"><!-- Responsive Css Styles -->
    <link href="css/responsive.css" madia="screen" rel="stylesheet" type=
    "text/css">
</head>
<body>
    <!-- Header Section Start -->
    <?php include('controllers/header.php'); ?>
    <!-- Header Section End -->
    <!-- Hero Area Start -->
   <!-- <section class="text-center" id="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-area">
                        <h3>Welcome To</h3>
                        <h2 class="page-title">HACIENDA ELVINARIOS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Feature inner Start -->
    <div class="feature-inner">
                                <!-- Post post-thumb -->
                                <div class="post-thumb">
                                    <div class="touch-slider owl-carousel">
    <?php 
                        $db = mysqli_connect("localhost", "root", "", "accdb");
                        $sql = "SELECT * FROM banner";
                        $result = mysqli_query($db, $sql);

                        while($row = mysqli_fetch_array($result)){
                            echo "<div class='item'>";
                            echo "<img src='img/banners/".$row['image']."' >";
                            echo "</div>";
                        }
                  ?>    
                                    </div>
                                </div><!-- End Post post-thumb -->
                            </div><!-- Feature inner End -->
                            <!-- Post Content Start -->
    <!-- Hero Area End -->
    <!-- Content Start -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Blog Article Start-->
                    <article>
                        <!-- Blog item Start -->
                        <div class="blog-item-wrap">
                            <!-- Post Format icon Start -->
                            <div class="post-format">
                                
                            </div><!-- Post Format icon End -->
                            <h2 class="blog-title"><a href=
                            "single.html">Seasonal Promo!</a></h2><!-- Entry Meta Start-->
                            <div class="entry-meta">
                            <span class="meta-part"><i class=
                                "ico-user"></i> <a href="#">James
                                Maclern</a></span>
                            </div><!-- Entry Meta End-->

                               <?php 
                                $db = mysqli_connect("localhost", "root", "", "accdb");
                                $sql = "SELECT * FROM tb_head LIMIT 1";
                                $result = mysqli_query($db, $sql);

                                while($row = mysqli_fetch_array($result)){
                                    echo "<div class='feature-inner'>";
                                    echo " <a data-lightbox='roadtrip' href='img/head/".$row['head']."'>";
                                    echo "<img src='img/head/".$row['head']."'>";
                                    echo "</a></div>";
                                    echo "<div class='post-content'>";
                                    echo "<p>".$row['content']."</p>";
                                }
                              ?>                  
                            </div><!-- Post Content End -->

                        </div><!-- Blog item End -->
                    </article><!-- Blog Article End-->
                    <!-- Blog Article Start-->
                    <article>
                        <!-- Blog item Start -->
                        <div class="blog-item-wrap">
                            <!-- Post Format icon Start -->
                            <div class="post-format">
                                <span><i class="fa fa-video-camera"></i></span>
                            </div><!-- Post Format icon End -->
                            <h2 class="blog-title"><a href=
                            "single.html">FEATURED VIDEO</a></h2><!-- Entry Meta Start-->
                            <div class="entry-meta">
                                <span class="meta-part"><i class=
                                "ico-user"></i> <a href="#">James
                                Maclern</a></span>
                            </div><!-- Entry Meta End-->
                            <!-- Feature inner Start -->
                            <?php
                            $con = mysqli_connect("localhost","root","", "accdb");
                            $query = "SELECT * FROM tb_featured ";
                            $sql = mysqli_query($con, $query);
                            while($all_video=mysqli_fetch_array($sql))
                            {
                            ?>
                            <div class="feature-inner">
                                <video allowfullscreen="" frameborder="1" controls
                                height="345" width="100%"> 
                                <source src="video/<?php echo $all_video['video']; ?>" type="video/mp4"
                                ></video>
                            </div>
                            <?php } ?>
                            <!-- Feature inner End -->
                            <!-- Post Content Start -->
                            <!-- Post Content End -->
                        </div><!-- Blog item End -->
                    </article><!-- Blog Article End-->
                    <!-- Post Quote Start -->
                    <div class="post-quote text-center">
                        <blockquote>
                            <div class="icon">
                                <i class="ico-quote"></i>
                            </div>
                            <p>Design is not what its looks like and feels
                            like. Design is how it works...</p>
                            <p class="client-name">- Steave Jobs, CEO,
                            Apple</p>
                        </blockquote>
                    </div><!-- Post Quote End -->
                    <!-- Blog Article Start-->
                    <article>
                        <!-- Blog item Start -->
                        <div class="blog-item-wrap">
                            <!-- Post Format icon Start -->
                            <div class="post-format">
                                <span><i class="fa fa-volume-up"></i></span>
                            </div><!-- Post Format icon End -->
                            <h2 class="blog-title"><a href="single.html">Let’s
                            enjoy the music</a></h2><!-- Entry Meta Start-->
                            <div class="entry-meta">
                                <span class="meta-part"><i class=
                                "ico-user"></i> <a href="#">James
                                Maclern</a></span> <span class=
                                "meta-part"><i class=
                                "ico-calendar-alt-fill"></i> <a href=
                                "#">January 7, 2015</a></span> <span class=
                                "meta-part"><i class="ico-comments"></i>
                                <a href="#">20</a></span> <span class=
                                "meta-part"><i class="ico-tag"></i> <a href=
                                "#">Tech</a></span> <span class=
                                "meta-part"><i class="ico-star"></i> <a href=
                                "#">7.5</a></span>
                            </div><!-- Entry Meta End-->
                            <!-- Feature inner Start -->
                            <div class="feature-inner">
                                <iframe frameborder="no" height="280"
                                scrolling="no" src=
                                "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/230240104&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"
                                width="100%"></iframe>
                            </div><!-- Feature inner End -->
                            <!-- Post Content Start -->
                            <div class="post-content">
                                <p>If pre-show appearances were any inclination
                                of what we were about to see, this would have
                                made for an amazing annoucement designed to
                                show off Sony’s new wares. But if you believe
                                that large and impressive-looking booth spaces
                                and hundreds of reporters are a sign of great
                                things to come, you’d be mistaken.</p>
                            </div><!-- Post Content End -->
                            <div class="entry-more">
                                <div class="pull-left">
                                    <a class="btn btn-common" href=
                                    "single.html">Read More <i class=
                                    "ico-arrow-right"></i></a>
                                </div>
                                <div class="share-icon pull-right">
                                    <span class="socialShare"></span>
                                </div>
                            </div>
                        </div><!-- Blog item End -->
                    </article><!-- Blog Article End-->
                    <!-- Blog Article Start-->
                    <article>
                        <!-- Blog item Start -->
                        <div class="blog-item-wrap">
                            <!-- Post Format icon Start -->
                            <div class="post-format">
                                <span><i class="fa fa-picture-o"></i></span>
                            </div><!-- Post Format icon End -->
                            <h2 class="blog-title"><a href="single.html">Have
                            an Amazing Blogging and Portfolio Showcase
                            Experience</a></h2><!-- Entry Meta Start-->
                            <div class="entry-meta">
                                <span class="meta-part"><i class=
                                "ico-user"></i> <a href="#">James
                                Maclern</a></span> <span class=
                                "meta-part"><i class=
                                "ico-calendar-alt-fill"></i> <a href=
                                "#">January 7, 2015</a></span> <span class=
                                "meta-part"><i class="ico-comments"></i>
                                <a href="#">20</a></span> <span class=
                                "meta-part"><i class="ico-tag"></i> <a href=
                                "#">Tech</a></span> <span class=
                                "meta-part"><i class="ico-star"></i> <a href=
                                "#">7.5</a></span>
                            </div><!-- Entry Meta End-->
                            <!-- Feature inner Start -->
                            <div class="feature-inner">
                                <!-- Post post-thumb -->
                                <div class="post-thumb">
                                    <div class="touch-slider owl-carousel">
                                        <div class="item">
                                            <a href="#"><img alt="" src=
                                            "img/blog/blog-04.jpg"></a>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img alt="" src=
                                            "img/blog/blog-01.jpg"></a>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img alt="" src=
                                            "img/blog/blog-05.jpg"></a>
                                        </div>
                                    </div>
                                </div><!-- End Post post-thumb -->
                            </div><!-- Feature inner End -->
                            <!-- Post Content Start -->
                            <div class="post-content">
                                <p>The Netherlands government vocalized its
                                support for the use of encryption to maintain
                                privacy online, in <a href=
                                "http://www.tweedekamer.nl/kamerstukken/brieven_regering/detail?id=2016Z00009&amp;did=2016D00015"
                                target="_blank">a statement issued on
                                Monday</a>.</p>
                                <p>The country’s minister of security and
                                justice Ard van der Steur wrote that the Dutch
                                executive cabinet endorsed “the importance of
                                strong encryption for Internet security to
                                support the protection of privacy for citizens,
                                companies, the government, and the entire Dutch
                                economy.</p>
                                <p>Therefore, the government believes that it
                                is currently not desirable to take legal
                                measures against the development, availability
                                and use of encryption within the
                                Netherlands.”</p>
                                <p></p>
                            </div><!-- Post Content End -->
                            <div class="entry-more">
                                <div class="pull-left">
                                    <a class="btn btn-common" href=
                                    "single.html">Read More <i class=
                                    "ico-arrow-right"></i></a>
                                </div>
                                <div class="share-icon pull-right">
                                    <span class="socialShare"></span>
                                </div>
                            </div>
                        </div><!-- Blog item End -->
                    </article><!-- Blog Article End-->
                    <!-- Post Quote Start -->
                    <div class="post-quote text-center">
                        <blockquote>
                            <div class="icon">
                                <i class="ico-reply"></i>
                            </div>
                            <p>Design is not what its looks like and feels
                            like. Design is how it works...</p><a href=
                            "#">https://youtu.be/sPfJQmpg5zk</a>
                        </blockquote>
                    </div><!-- Post Quote End -->
                    <!-- Blog Article Start-->
                    <article>
                        <!-- Blog item Start -->
                        <div class="blog-item-wrap">
                            <!-- Post Format icon Start -->
                            <div class="post-format">
                                <span><i class="ico-bookmark"></i></span>
                            </div><!-- Post Format icon End -->
                            <h2 class="blog-title"><a href="#">Clean and
                            Simplified UI/UX</a></h2><!-- Entry Meta Start-->
                            <div class="entry-meta">
                                <span class="meta-part"><i class=
                                "ico-user"></i> <a href="#">James
                                Maclern</a></span> <span class=
                                "meta-part"><i class=
                                "ico-calendar-alt-fill"></i> <a href=
                                "#">January 7, 2015</a></span> <span class=
                                "meta-part"><i class="ico-comments"></i>
                                <a href="#">20</a></span> <span class=
                                "meta-part"><i class="ico-tag"></i> <a href=
                                "#">Tech</a></span> <span class=
                                "meta-part"><i class="ico-star"></i> <a href=
                                "#">7.5</a></span>
                            </div><!-- Entry Meta End-->
                            <!-- Post Content Start -->
                            <div class="post-content">
                                <p>The first day of work of 2016 brings with it
                                the dread of a dawning realization for most…
                                you’ve made New Year’s resolutions, and you
                                have to stick to them. Or, at the very least,
                                you should give it the old college try.
                                According to a study by the University of
                                Scranton published in the Journal of
                                Psychology, 45 percent of Americans usually
                                make resolutions, but only 8 percent are
                                successful. It also found that those who
                                explicitly make resolutions are ten times more
                                likely to succeed in accomplishing them.</p>
                            </div><!-- Post Content End -->
                            <div class="entry-more">
                                <div class="pull-left">
                                    <a class="btn btn-common" href=
                                    "single.html">Read More <i class=
                                    "ico-arrow-right"></i></a>
                                </div>
                                <div class="share-icon pull-right">
                                    <span class="socialShare"></span>
                                </div>
                            </div>
                        </div><!-- Blog item End -->
                    </article><!-- Blog Article End-->
                    <!-- Blog Article Start-->
                    <article>
                        <!-- Pagination Start -->
                        <ul class="pager">
                            <li class="previous">
                                <a href="#"><i class="ico-arrow-left"></i>
                                Previous</a>
                            </li>
                            <li style="list-style: none"><span class=
                            "active"><a href="#">1</a></span> <span><a href=
                            "#">2</a></span> <span><a href="#">3</a></span>
                            <span><a href="#">4</a></span> <span><a href=
                            "#">5</a></span></li>
                            <li class="next">
                                <a href="#">Next <i class=
                                "ico-arrow-right"></i></a>
                            </li>
                        </ul><!-- Pagination End -->
                    </article><!-- Blog Article End-->
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="entry-widget">
                            <div class="widget-profile">
                                <div class="touch-slider owl-carousel">
                                     
                                        
                                            
                                    <?php 
                                        $conn = mysqli_connect("localhost", "root", "", "accdb");
                                        $sql = "SELECT id, anncmnt FROM tb_announce";
                                        $check = mysqli_query($conn, $sql);
                                        if($check->num_rows > 0){
                                            echo "";
                                            while($row = $check->fetch_assoc()) {
                                            echo "<li>";
                                            echo "<div class='tweets-content'>";
                                            echo "<h2 align='center'>Announcements</h2>";
                                            echo "<p align='center' class='details'>";
                                            echo "".$row["anncmnt"]."";
                                            echo "</p>";
                                            echo "</div>";
                                            echo "</li>";
                                            }
                                        }
                                        ?>       
                                        
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <!-- Nav Tabs -->
                            <!-- Tab Panels -->
                            <div class="tab-content">
                                <!-- Tab Content 1 -->
                                <img src="img/prom.jpg"> </img>
                                <!-- End Tab Panels -->
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Categories</h5>
                            <!-- Accordion  -->
                            <div class="accordion">
                                <div class="panel-group" id="accordion">
                                    <!-- Start Accordion 1 -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Reviews and Comments</h5>
                            <div class="latest-tweets">
                                <ul class="posts-list">
                                    <li>
                                        <div class="icon">
                                            <a href="#"><i class=
                                            "ico-twitter-with-circle"></i></a>
                                        </div>
                                        <div class="tweets-content">
                                            <a href="#">IntimateBlog
                                            <span>@intimateblog</span></a>
                                            <p class="details">
                                            <span>@Noah</span> We built with
                                            the most amusing digital ecommerce
                                            widget WooCommerce most amusing
                                            digital.</p>
                                            <p class="ago">18 Days Ago</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <a href="#"><i class=
                                            "ico-twitter-with-circle"></i></a>
                                        </div>
                                        <div class="tweets-content">
                                            <a href="#">IntimateBlog
                                            <span>@intimateblog</span></a>
                                            <p class="details">
                                            <span>@Noah</span> We built with
                                            the most amusing digital ecommerce
                                            widget WooCommerce most amusing
                                            digital.</p>
                                            <p class="ago">18 Days Ago</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <a href="#"><i class=
                                            "ico-twitter-with-circle"></i></a>
                                        </div>
                                        <div class="tweets-content">
                                            <a href="#">IntimateBlog
                                            <span>@intimateblog</span></a>
                                            <p class="details">
                                            <span>@Noah</span> We built with
                                            the most amusing digital ecommerce
                                            widget WooCommerce most amusing
                                            digital.</p>
                                            <p class="ago">18 Days Ago</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <a href="#"><i class=
                                            "ico-twitter-with-circle"></i></a>
                                        </div>
                                        <div class="tweets-content">
                                            <a href="#">IntimateBlog
                                            <span>@intimateblog</span></a>
                                            <p class="details">
                                            <span>@Noah</span> We built with
                                            the most amusing digital ecommerce
                                            widget WooCommerce most amusing
                                            digital.</p>
                                            <p class="ago">18 Days Ago</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="follow">
                                    <h4>Follow Us <a href=
                                    "#">@intimateblog</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Archive</h5>
                            <ul class="archivee">
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> October
                                    (2015)</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> September
                                    (2015)</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> June
                                    (2015)</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> May
                                    (2015)</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> April
                                    (2015)</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i>
                                    Marvh(2015)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Flicker Widget</h5>
                            <div class="flickr">
                                <ul>
                                    <li>
                                        <a href="#"><img alt="" src=
                                        "img/blog/thumb1.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="" src=
                                        "img/blog/thumb2.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="" src=
                                        "img/blog/thumb3.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="" src=
                                        "img/blog/thumb4.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="" src=
                                        "img/blog/thumb5.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="" src=
                                        "img/blog/thumb6.jpg"></a>
                                    </li>
                                </ul><a class="btn btn-common more" href=
                                "#">More Stories <i class=
                                "ico-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Tags</h5>
                            <div class="tag">
                                <a href="#">Techonology</a> <a href=
                                "#"><span class="large">WordPress</span></a>
                                <a href="#"><span class=
                                "large">UI/UX</span></a> <a href="#">Design</a>
                                <a href="#">CSS3</a> <a href="#">Example</a>
                                <a href="#">Interface</a> <a href=
                                "#"><span class="madium">Modern</span></a>
                                <a href="#"><span class=
                                "large">Lifestyle</span></a> <a href=
                                "#"><span class="large">Parallax</span></a>
                                <a href="#">HTML5</a> <a href="#">Tag</a>
                                <a href="#"><span class=
                                "madium">Intimate</span></a> <a href=
                                "#"><span class="large">Youtube</span></a>
                                <a href="#">Video</a> <a href="#">Apps</a>
                                <a href="#"><span class=
                                "madium">User</span></a> <a href=
                                "#">Programming</a> <a href="#">Vimeo</a>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Meta</h5>
                            <ul class="meta-list">
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> Log In</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> Entries
                                    RSS</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i> Comments
                                    RSS</a>
                                </li>
                                <li>
                                    <a href="#"><i class=
                                    "ico-keyboard_arrow_right"></i>
                                    WordPress.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content End -->
    <!-- Footer Start -->
    <?php include('controllers/mainfooter.php'); ?>
    <!-- Footer End -->
    <!-- js  -->
    <script src="js/jquery-min.js" type="text/javascript">
    </script> 
    <script src="js/bootstrap.min.js" type="text/javascript">
    </script> 
    <script src="js/owl.carousel.js" type="text/javascript">
    </script> 
    <script src="js/jquery.mixitup.min.js" type="text/javascript">
    </script> 
    <script src="js/lightbox.js" type="text/javascript">
    </script> 
    <script src="js/plugin.js" type="text/javascript">
    </script> 
    <script src="js/jquery.slicknav.js" type="text/javascript">
    </script> 
    <script src="js/count-to.js" type="text/javascript">
    </script> 
    <script src="js/jquery.appear.js" type="text/javascript">
    </script> 
    <script src="js//main.js" type="text/javascript">
    </script>
</body>
</html>