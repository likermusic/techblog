<? include 'handlers/get_favourite_posts.php'; ?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Tech Blog - Stylish Magazine Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="css/version/tech.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="tech-index.html"><img src="images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="tech-index.html">Home</a>
                            </li>
                            <li
                                class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">News</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="container">
                                            <div class="mega-menu-content clearfix">
                                                <div class="tab">
                                                    <button class="tablinks active"
                                                        onclick="openCategory(event, 'cat01')">Science</button>
                                                    <button class="tablinks"
                                                        onclick="openCategory(event, 'cat02')">Technology</button>
                                                    <button class="tablinks"
                                                        onclick="openCategory(event, 'cat03')">Social Media</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat04')">Car
                                                        News</button>
                                                    <button class="tablinks"
                                                        onclick="openCategory(event, 'cat05')">Worldwide</button>
                                                </div>

                                                <div class="tab-details clearfix">
                                                    <div id="cat01" class="tabcontent active">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_01.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Top 10+
                                                                                care advice for your toenails</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_02.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The
                                                                                secret of your beauty is handmade
                                                                                soap</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_03.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Benefits
                                                                                of face mask made from mud</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_04.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Relax
                                                                                with the unique warmth of candle
                                                                                flavor</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat02" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_05.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">2017
                                                                                summer stamp will have design models
                                                                                here</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_06.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Which
                                                                                color is the most suitable color for
                                                                                you?</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_07.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html"
                                                                                title="">Subscribe to these sites to
                                                                                keep an eye on the fashion</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_08.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The most
                                                                                trends of this year with color
                                                                                combination</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat03" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_09.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">I
                                                                                visited the architects of Istanbul for
                                                                                you</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_10.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Prepared
                                                                                handmade dish dish in the
                                                                                Netherlands</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_11.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">I
                                                                                recommend you visit the fairy
                                                                                chimneys</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_12.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">One of
                                                                                the most beautiful ports in the
                                                                                world</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat04" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_13.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">A
                                                                                collection of the most beautiful shop
                                                                                designs</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_14.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html"
                                                                                title="">America's and Canada's most
                                                                                beautiful wine houses</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_15.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The most
                                                                                professional ways to color your
                                                                                walls</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_16.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Stylish
                                                                                cabinet designs and furnitures</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat05" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_17.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Grilled
                                                                                vegetable with fish prepared with
                                                                                fish</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_18.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The
                                                                                world's finest and clean meat
                                                                                restaurants</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_19.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Fried
                                                                                veal and vegetable dish</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_20.jpg" alt=""
                                                                                class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Tasty
                                                                                pasta sauces and recipes</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                </div><!-- end tab-details -->
                                            </div><!-- end mega-menu-content -->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img style="filter: invert(100%);"
                                        src="images/icons8-favorite-folder-50.png" width="30"></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->



        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 mt-5">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix d-flex">
                                <h4 class="pull-left mr-4">Favourites <img src="images/icons8-favorite-folder-50.png"
                                        width="20"></h4>
                                <label>Сортировка по дате &nbsp;</label>
                                <select name="sort" id="sort">
                                    <option value="asc">По возрастанию</option>
                                    <option value="desc">По убыванию</option>
                                </select>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                <?
                                usort($favourite_posts, function ($a, $b) {
                                    return strtotime($b['publishedAt']) - strtotime($a['publishedAt']);
                                });
                                ?>

                                <? foreach ($favourite_posts as $post): ?>
                                    <? $url = @getimagesize($post['urlToImage']) ? $post['urlToImage'] : 'images/noimg.png' ?>

                                    <div class="blog-box row">
                                        <div class="col-md-4">
                                            <div class="post-media">
                                                <a href="<?= $url ?>" title="">
                                                    <img src="<?= $url ?>" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div><!-- end media -->
                                        </div><!-- end col -->

                                        <div class="blog-meta big-meta col-md-8">
                                            <h4><a href="<?= $post['url'] ?>" title="">
                                                    <?= $post['title'] ?>
                                                </a></h4>
                                            <p>
                                                <?= $post['description'] ?>
                                            </p>

                                            <small><a href="tech-single.html" title="">
                                                    <?
                                                    echo date('d M, Y', strtotime($post['publishedAt']));
                                                    ?>
                                                </a></small>
                                            <? if ($post['author']): ?>
                                                <small><a href="tech-author.html" title="">
                                                        <?= $post['author'] ?>
                                                    </a></small>
                                            <? endif; ?>


                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">
                                <? endforeach; ?>
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <!-- <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div><!-- end col -->


                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt=""
                                        class="img-fluid"></a>
                                <p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                                            class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                                            class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Tech Blog. Design: <a href="http://html.design">HTML Design</a>.
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="handlers/handler_favourites.js"></script>

</body>

</html>