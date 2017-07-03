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
    <body class="loginpage" onload="hide_preloader();">
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
        <div id="content">                   
            <main class="login-page">
                <div class="container">                        
                    <section class="login_section">
                        <img src="images/logo.png" class="img-responsive center-block" />
                        <div class="inner_section">
                            <h2 class="text-center mt-0 mb-30 font-700 themecolor text-uppercase">Forget Password</h2>
                            <form action="dashboard.php" method="post">
                                <div class="form-group">
                                    <label>EMAIL</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon noradius"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email" class="form-control noradius input-lg" placeholder="Email" />
                                    </div>                                        
                                </div>                                
                                <div class="clearfix"></div>
                                <div class="form-group mb-10 mt-15 mt-xs-0">
                                    <button type="submit" class="btn btn-primary btn-block noradius btn-lg waves-effect waves-button waves-light font-700 text-uppercase">Submit</button>                                    
                                </div>
                                <ul class="list-inline text-center mb-0">
                                    <li><a href="login.php" class="themelink"><i class="fa fa-reply"></i> Back to Login</a></li>
                                </ul>
                            </form>
                        </div>
                    </section>
                </div>
            </main>
        </div>                
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.min.js"></script>             
        <script>
        Waves.init();
        var rotate = 1;
        function hide_preloader() {
            rotate = 0;
            $("#preloader").fadeOut('slow');
        }
        </script>       
    </body>
</html>
