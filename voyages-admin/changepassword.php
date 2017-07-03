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
                    <li class="active"><a href="manage-user.php" class="waves-effect waves-block waves-classic"><i class="fa fa-users icon"></i> <span>Manage Users</span></a></li>
                    <li class=""><a href="manage-report.php" class="waves-effect waves-block waves-classic"><i class="fa fa-file icon"></i> <span>Manage Reports</span></a></li>
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
            <main class="main-content common-grid-page changespassword-page">
                <div class="container-fluid">
                    <div class="page-title" id="pageTitle">
                        <h4>Change password</h4>
                    </div>
                    <div class="panel panel-primary filter-panel" id="panel-height">
                        <div class="panel-heading clearfix filter-heading">
                            <h4 class="panel-title"><i class="fa fa-key"></i> Change Password</h4>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="change-password">  
                                <form>                                    
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label>Old Password <span class="red">*</span></label>
                                                <input type="password" class="form-control input-lg" placeholder="Old password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label>New Password <span class="red">*</span></label>
                                                <input type="password" class="form-control input-lg" placeholder="New password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password <span class="red">*</span></label>
                                                <input type="password" class="form-control input-lg" placeholder="Confirm password" />
                                            </div>                                            
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg noradius waves-effect waves-button waves-light text-uppercase">Save</button>
                                </form>
                            </div>
                           
                            
                        </div>                        
                    </div>
                </div>
            </main>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>

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
        </script>       
    </body>
</html>
