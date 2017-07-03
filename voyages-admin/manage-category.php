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
                    <li class=""><a href="manage-user.php" class="waves-effect waves-block waves-classic"><i class="fa fa-users icon"></i> <span>Manage Users</span></a></li>
                    <li class=""><a href="manage-report.php" class="waves-effect waves-block waves-classic"><i class="fa fa-file icon"></i> <span>Manage Reports</span></a></li>
                    <li class="active"><a href="manage-category.php" class="waves-effect waves-block waves-classic"><i class="fa fa-tags icon"></i> <span>Manage Category</span></a></li>

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
            <main class="main-content common-grid-page managecategory-page">
                <div class="container-fluid">
                    <div class="page-title" id="pageTitle">
                        <h4>Manage Category</h4>
                    </div>
                    <div class="panel panel-primary filter-panel" id="panel-height">
                        <div class="panel-heading clearfix filter-heading">
                            <h4 class="panel-title"><i class="fa fa-table"></i> Category List</h4>
                            <div class="filter-icon">
                                <a waves class="waves-effect waves-circle waves-ripple waves-light" data-toggle="modal" data-target="#addcategoryModal" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i>
                                </a>
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
                                                    <label>Category</label>
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
                                            <th>Category</th>                                                                                 
                                            <th>Total Voyages</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>                                                
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>696</td>                                            
                                            <td>adventure</td>
                                            <td>200</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="waves-circle waves-effect waves-ripple"><i class="fa fa-trash"></i></a></li>                                                
                                                </ul>
                                            </td>
                                        </tr>
<!--                                        <tr>
                                            <td colspan="7"><div class="alert alert-danger text-center">No recod Found</div></td>
                                        </tr>-->
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
        <div class="modal fade" id="addcategoryModal" tabindex="-1" role="dialog">
            <div class="modal-dialog common-modal category-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><img src="images/close-modal.png" /></button>                        
                    </div>
                    <div class="modal-body">                        
                        <form>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control input-lg" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="" />                                
                            </div>
                            <div class="form-group">
                                <div class="imagediv">
                                    <img class="img-responsive img-thumbnail" src="images/defaultcategory-icon.jpg" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group mb-0 text-center">
                                <button type="button" data-dismiss="modal" class="btn btn-primary btn-ttc btn-lg btn-block waves-effect waves-button waves-light">SAVE</button>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
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
