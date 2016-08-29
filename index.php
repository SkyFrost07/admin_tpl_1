<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Template</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/screen.css">

        <script src="js/jquery-3.1.0.min.js"></script>

    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="topnav">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#bsmenu" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">Admin Panel</a>
                <div class="collapse navbar-toggleable-sm" id="bsmenu">
                    <ul class="nav navbar-nav pull-md-right">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-bell"></i> Notify</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <section id="main_body">
            
            <div id="sidebar_col">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#menu_bar">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-toggleable-sm" id="menu_bar">
                    <ul class="navbar-menu">
                        <li class=""><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <b class="fa fa-angle-down"></b></a></li>
                        <li class="has-sub">
                            <a href="#"><i class="fa fa-gear"></i> <span>Setting</span> <b class="fa fa-angle-down"></b></a>
                            <ul class="sub-menu">
                                <li class="active"><a href="#"><i class="fa fa-circle"></i> <span>Options</span></a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> <span>Languages</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-language"></i> <span>Languages</span></a></li>
                    </ul>
                </div>
            </div>
            
            <div id="content_col">
                <div class="wrapper">
                    Content col
                </div>
            </div>
            
        </section>

        <footer id="footer">

        </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
