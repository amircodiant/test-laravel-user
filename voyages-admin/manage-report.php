<!DOCTYPE HTML>
<html>
    <head>        
        <title>Voyages</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">        
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />         
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />        
        <link href="css/waves.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />        
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="css/custom.min.css" rel="stylesheet" type="text/css" />         
    </head>
    <body onload="hide_preloader();">
        <div id="preloader">
            <div class="inner">
                <div class="image">
                    <img src="images/logo.png" class="img-responsive" />
                </div>
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
        <aside class="nav-aside" id="nav-aside">
            <div class="nav-wrapper">
                <ul class="list-unstyled sidebar-nav">
                    <li class=""><a href="dashboard.php" class="waves-effect waves-block waves-classic"><i class="fa fa-tachometer icon"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="manage-user.php" class="waves-effect waves-block waves-classic"><i class="fa fa-users icon"></i> <span>Manage Users</span></a></li>
                    <li class="active"><a href="manage-report.php" class="waves-effect waves-block waves-classic"><i class="fa fa-file icon"></i> <span>Manage Reports</span></a></li>
                    <li class=""><a href="manage-category.php" class="waves-effect waves-block waves-classic"><i class="fa fa-tags icon"></i> <span>Manage Category</span></a></li>

                </ul>
            </div>            
        </aside>
        <nav class="navbar navbar-default navbar-fixed-top" id="top-header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button waves type="button" class="navbar-toggle waves-effect waves-ripple waves-light" id="navbar" onclick="fullwidth()">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dashboard.php"><img src="images/logo.png" class="img-responsive center-block" /></a>
                </div>
                <div class="navbar-collapse">          
                    <ul class="nav navbar-nav navbar-right">           
                        <li><a href="changepassword.php" class="waves-effect waves-block waves-classic"><i class="fa fa-cog"></i></a></li>
                        <li><a href="login.php" class="waves-effect waves-block waves-classic"><i class="fa fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="content">                   
            <main class="main-content common-grid-page managereport-page">
                <div class="container-fluid">
                    <div class="page-title" id="pageTitle">
                        <h4>Manage Report</h4>
                    </div>
                    <div class="panel panel-primary filter-panel" id="panel-height">
                        <div class="panel-heading clearfix filter-heading">
                            <h4 class="panel-title"><i class="fa fa-table"></i> Report List</h4>
                            <div class="filter-icon">
                                <a waves class="waves-effect waves-circle waves-ripple waves-light" data-toggle="collapse" data-target="#filter" href="javascript:void(0)">
                                    <i class="fa fa-filter"></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="filter">                    
                                <div class="collapse" id="filter">
                                    <br>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-3 col-lg-2 col">
                                                <div class="form-group">                                       
                                                    <label>ID</label>
                                                    <input type="text" class="form-control noradius"/>                                                    
                                                </div>
                                            </div>                                           
                                            <div class="col-sm-3 col-lg-2 col">
                                                <div class="form-group">                                       
                                                    <label>Nickname</label>
                                                    <input type="text" class="form-control noradius"/>                                                    
                                                </div>
                                            </div>                                           
                                            <div class="col-sm-3 col-lg-2 col">
                                                <div class="form-group">                                       
                                                    <label>Email</label>
                                                    <input type="text" class="form-control noradius"/>                                                    
                                                </div>
                                            </div>                                           

                                            <div class="col-sm-3 col-lg-1 col ">
                                                <div class="form-group mb-0">                                       
                                                    <label class="hidden-xs">&nbsp;</label>
                                                    <button type="submit" waves class="btn btn-primary text-uppercase waves-effect waves-light noradius btn-block"><i class="fa fa-filter"></i> Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive admintable">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nickname</th>
                                            <th>Email</th>
                                            <th>Report Type</th>
                                            <th>Post</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="#postModal" data-toggle="modal" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="#postModal" data-toggle="modal" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="#postModal" data-toggle="modal" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="#postModal" data-toggle="modal" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="#postModal" data-toggle="modal" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="#postModal" data-toggle="modal" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                        <tr>
                                            <td>696</td>
                                            <td>Anne</td>
                                            <td>Anne@gmail.com</td>
                                            <td>12/10/2000</td>
                                            <td>test</td>
                                            <td class="text-center">
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                            </td>                                              
                                        </tr>                              
                                    </tbody>
                                </table>
                            </div>
                            <nav class="paginationdiv text-center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>                        
                    </div>
                </div>
            </main>
        </div>
        <div class="modal fade" id="postModal" tabindex="-1" role="dialog">
            <div class="modal-dialog common-modal post-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Post</h4>
                        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><img src="images/close-modal.png" /></button>                        
                    </div>
                    <div class="modal-body">                        
                        <div class="sliderbox">
                            <div id="sync1" class="owl-carousel fullslider owl-theme">
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                                <div class="item"><img class="img-responsive center-block" src="images/propertybig-img01.jpg" /></div>
                            </div>
                            <div class="thumsliderbox">
                                <div id="sync2" class="owl-carousel thumbslider owl-theme">
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                    <div class="item"><img class="img-responsive center-block" src="images/propertythumb-img01.jpg" /></div>                      
                                </div>
                            </div>
                        </div>  
                    </div>                    
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
                        $('.selectpicker').selectpicker();
                        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            $('.selectpicker').selectpicker('mobile');
                        }
                        Waves.init();
                        function fullwidth() {
                            $("body").toggleClass('content-wrapper');
                            $("#nav-aside").toggleClass('slide');
                            $(document).on('touchmove', function (e) {
                                if (!$(e.target)('body.content-wrapper')[0]) {
                                    e.preventDefault();
                                }
                            });
                        }
                        ;
                        $(window).resize(function () {
                            var chk_account_height = $('#top-header').outerHeight(true) + 51;
                            var window_height = $(window).height();
                            $("#content").css('min-height', window_height - chk_account_height);
                        }).resize();
                        setTimeout(function () {
                            $(window).resize(function () {
                                var chk_height = $('#top-header').outerHeight(true) + $('#pageTitle').outerHeight(true);
                                var window_height = $(window).height();
                                $("#panel-height").css('min-height', window_height - chk_height - 20);
                            }).resize();
                        }, 100);

                        var rotate = 1;
                        function hide_preloader() {
                            rotate = 0;
                            $("#preloader").fadeOut('slow');
                        }

                        var sync1 = $("#sync1");
                        var sync2 = $("#sync2");
                        var slidesPerPage = 6;
                        var syncedSecondary = true;

                        sync1.owlCarousel({
                            items: 1,
                            slideSpeed: 2000,
                            nav: false,
                            autoplay: false,
                            dots: false,
                            loop: true,
                            responsiveRefreshRate: 200,
                        }).on('changed.owl.carousel', syncPosition);

                        sync2.on('initialized.owl.carousel', function () {
                            sync2.find(".owl-item").eq(0).addClass("current");
                        })
                                .owlCarousel({
                                    items: slidesPerPage,
                                    margin: 10,
                                    dots: false,
                                    nav: true,
                                    smartSpeed: 200,
                                    slideSpeed: 500,
                                    slideBy: slidesPerPage,
                                    responsiveRefreshRate: 100,                                    
                                    responsive: {
                                        0: {
                                            items: 3
                                        },
                                        359: {
                                            items: 3
                                        },
                                        479: {
                                            items: 4
                                        },
                                        500: {
                                            items: 5
                                        },
                                        768: {
                                            items: 4
                                        },
                                        992: {
                                            items: 5
                                        },
                                        1200: {
                                            items: 6
                                        }
                                    }
                                }).on('changed.owl.carousel', syncPosition2);

                        function syncPosition(el) {
                            var count = el.item.count - 1;
                            var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                            if (current < 0) {
                                current = count;
                            }
                            if (current > count) {
                                current = 0;
                            }
                            sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");
                            var onscreen = sync2.find('.owl-item.active').length - 1;
                            var start = sync2.find('.owl-item.active').first().index();
                            var end = sync2.find('.owl-item.active').last().index();

                            if (current > end) {
                                sync2.data('owl.carousel').to(current, 100, true);
                            }
                            if (current < start) {
                                sync2.data('owl.carousel').to(current - onscreen, 100, true);
                            }
                        }

                        function syncPosition2(el) {
                            if (syncedSecondary) {
                                var number = el.item.index;
                                sync1.data('owl.carousel').to(number, 100, true);
                            }
                        }

                        sync2.on("click", ".owl-item", function (e) {
                            e.preventDefault();
                            var number = $(this).index();
                            sync1.data('owl.carousel').to(number, 300, true);
                        });



        </script>       
    </body>
</html>
