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
                    <li class="active"><a href="dashboard.php" class="waves-effect waves-block waves-classic"><i class="fa fa-tachometer icon"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="manage-user.php" class="waves-effect waves-block waves-classic"><i class="fa fa-users icon"></i> <span>Manage Users</span></a></li>
                    <li class=""><a href="manage-report.php" class="waves-effect waves-block waves-classic"><i class="fa fa-file icon"></i> <span>Manage Reports</span></a></li>
                    <li class=""><a href="manage-report.php" class="waves-effect waves-block waves-classic"><i class="fa fa-tags icon"></i> <span>Manage Category</span></a></li>

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
            <main class="main-content dashboard-page">
                <div class="container-fluid">
                    <div class="page-title">
                        <h4 class="themecolor">Dashboard</h4>
                    </div>
                    <section class="boxes_section">
                        <div class="row boxes">
                            <div class="col col-xs-6 col-sm-3">
                                <div class="bg-white">                                    
                                        <div class="display clearfix">
                                            <div class="number">
                                                <p>total Users</p>
                                                <h3><i class="fa fa-users"></i> <span>600</span></h3>
                                            </div>
                                        </div>                                   
                                </div>
                            </div>
                            <div class="col col-xs-6 col-sm-3">
                                <div class="bg-white">
                                    <div class="display clearfix">
                                        <div class="number">
                                            <p>total Voyages</p>
                                            <h3><i class="fa fa-users"></i> <span>30</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row latest-activity">
                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title"><i class="fa fa-users"></i>&nbsp; Recently joined users</h4>
                                    <div class="viewall">
                                        <a href="manage-user.php" waves class="btn btn-primary btn-sm text-uppercase waves-effect waves-ripple">View All</a>
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
                                                    <th>Joined Date</th>
                                                    <th>Followers</th>
                                                    <th>Following</th>
                                                    <th>Voyages</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>200</td>
                                                    <td>100</td>
                                                    <td>35</td>
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>200</td>
                                                    <td>100</td>
                                                    <td>35</td>
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>200</td>
                                                    <td>100</td>
                                                    <td>35</td>
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>200</td>
                                                    <td>100</td>
                                                    <td>35</td>
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>200</td>
                                                    <td>100</td>
                                                    <td>35</td>
                                                </tr>                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title"><i class="fa fa-file-text"></i>&nbsp; Recently reported </h4>
                                    <div class="viewall">
                                        <a href="manage-report.php" waves class="btn btn-primary btn-sm text-uppercase waves-effect waves-ripple">View All</a>
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
                                                    <th>Voyages</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>40</td>
                                                    <td class="text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li><a href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>                                                
                                                        </ul>
                                                    </td>                                              
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>40</td>
                                                    <td class="text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li><a href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>                                                
                                                        </ul>
                                                    </td>                                              
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>40</td>
                                                    <td class="text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li><a href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>                                                
                                                        </ul>
                                                    </td>                                              
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>40</td>
                                                    <td class="text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li><a href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>                                                
                                                        </ul>
                                                    </td>                                              
                                                </tr>                              
                                                <tr>
                                                    <td>696</td>
                                                    <td>Anne</td>
                                                    <td>Anne@gmail.com</td>
                                                    <td>12/10/2000</td>
                                                    <td>40</td>
                                                    <td class="text-center">
                                                        <ul class="list-inline mb-0">
                                                            <li><a href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>                                                
                                                        </ul>
                                                    </td>                                              
                                                </tr>                              
                                                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </main>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.min.js"></script>


        <script>

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

                        var rotate = 1;
                        function hide_preloader() {
                            rotate = 0;
                            $("#preloader").fadeOut('slow');
                        }
        </script>       
    </body>
</html>
