<!DOCTYPE html>

<html> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Aquila</title>
        <link rel="shortcut icon" href="1.png" />
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/weather-icons.min.css"/>

       
        <link rel="stylesheet" href="css/lobiadmin-with-plugins.css"/>
       
        <link rel="stylesheet" href="css/demo.css"/>
    </head>
    <body><a href="#dashboard.php" >
        <nav class="navbar navbar-default navbar-header header">
            <a class="navbar-brand" >

                <img src="1.png" height="50" width="50"  class="hidden-xs" alt="" />
                
            </a>
           
            <ul class="nav navbar-nav pull-left show-hide-menu">
                <li>
                    <a href="#" class="border-radius-0 btn font-size-lg" data-action="show-hide-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
            <form class="navbar-search pull-left">
                <label for="search" class="sr-only">Search...</label>
                <input type="text" class="font-size-lg" name="search" id="search" placeholder="Search...">
                <a class="btn btn-search">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
                <a class="btn btn-remove">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </form>
            <div class="navbar-items">
              
                <ul class="nav navbar-nav navbar-right user-actions">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img class="user-avatar" src="1.png" alt="..."/>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#profile.html"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;Profile</a></li>
                          
                            <li><a href="#lock.html"><span class="glyphicon glyphicon-lock"></span> &nbsp;&nbsp;Lock screen</a></li>
                            <li><a href="#login.html"><span class="glyphicon glyphicon-off"></span> &nbsp;&nbsp;Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix-xxs"></div>
            <div class="navbar-items-2">
                <!--Choose languages dropdown-->
                
                <ul class="nav navbar-nav navbar-actions">
                    <li class="visible-lg">
                        <a href="#" data-action="fullscreen">
                            <span class="glyphicon glyphicon-fullscreen"></span>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="fa fa-globe"></span>
                            <span class="badge badge-danger badge-xs">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-notifications notification-news border-1 animated-fast flipInX">
                            <div class="notifications-heading border-bottom-1 bg-white">
                                Notifications
                            </div>   
                            <ul class="notifications-body max-h-300">
                                                <h5 class="notification-sub-heading text-gray-darker"> 
                                             
                              
                                <li class="unread">
                                    <div class="notification friend-request">
                                        <img class="notification-image" src="img/users/4.jpg" alt="">
                                        <div class="notification-msg">
                                            <h4 class="notification-heading"><a href="#">Ram</a></h4>
                                            <h5 class="notification-sub-heading text-nowrap">Lab Booking  request 
                                                <a href="#" class="btn btn-info btn-xs btn-response">Booked</a>
                                                <a href="#" class="btn btn-danger btn-xs btn-response">Pending</a>
                                            </h5>
                                            <p class="body-text"><i class="fa fa-user"></i> 12 hr. ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="unread">
                                    <div class="notification">
                                        <img class="notification-image" src="img/users/2.jpg" alt="">
                                        <div class="notification-msg">
                                            <h5 class="notification-sub-heading"><a href="#">Vijay</a> Requested to book conference hall</h5>
                                            <p class="body-text"><i class="fa fa-clock-o"></i> yesterday</p>
                                        </div>
                                        <a href="#" class="link-action">View Request</a>
                                    </div>
                                </li>
                                
                               
                            </ul>
                            <div class="notifications-footer border-top-1 bg-white text-center">
                                <a href="#">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="fa fa-tasks"></span>
                            <span class="badge badge-danger badge-xs">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-notifications notification-tasks border-1 animated-fast flipInX">
                            <div class="notifications-heading border-bottom-1 bg-white">
                                Active tasks
                            </div>
                            <ul class="notifications-body max-h-300">
                                <li>
                                    <div class="notification">
                                        <p class="body-text"><span class="label label-danger">Meeting</span> Client meeting in conference hall <span class="pull-right">90%</span></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"><span class="sr-only">90% Complete</span></div>
                                        </div>
                                        <a href="#" data-container="body" data-toggle="tooltip" data-html="true" data-title="Zura Sekhno<br>George darso<br>Guga Grigo">Going on</a>
                                        <a href="#" class="link-action">Details</a>
                                    </div>
                                </li>
                               
                            </ul>
                            <div class="notifications-footer border-top-1 bg-white text-center">
                                <a href="#">View all</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </nav>
        <div class="menu">
            <div class="menu-heading">
                <div class="menu-header-buttons-wrapper clearfix">
                    <button type="button" class="btn btn-info btn-menu-header-collapse">
                        <i class="fa fa-cogs"></i>
                    </button>
                    <!--Put your favourite pages here-->
                    <div class="menu-header-buttons">
                        <a href="#profile" class="btn btn-info btn-outline" data-title="Profile">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="#invoice.html" class="btn btn-info btn-outline" data-title="Invoice">
                            <i class="fa fa-file-pdf-o"></i>
                        </a>
                       
                        <a href="#calendar.php" class="btn btn-info btn-outline" data-title="Calendar">
                            <i class="fa fa-calendar"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#dashboard.php">
                            <i class="fa fa-home menu-item-icon"></i>
                            <span class="inner-text">Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="fa fa-area-chart menu-item-icon"></i>
                            <span class="inner-text">Graphs</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#energychart.php">
                                    <span class="inner-text">Energy Graph</span>
                                </a>
                            </li>
                            <li>
                                <a href="#waterchart.php">
                                    <span class="inner-text">Water Graph</span>
                                </a>
                            </li>
                            <li>
                                <a href="#Workerspie.html">
                                    <span class="inner-text">Workers pie</span>
                                </a>
                            </li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-table menu-item-icon"></i>
                            <span class="inner-text">Tables</span>
                        </a>
                        <ul>
                            
                            <li>
                                <a href="#TLabassis.php">
                                    <span class="inner-text">Lab Assistance</span>
                                </a>
                            </li>
                              <li>
                                <a href="#Tservice.php">
                                    <span class="inner-text">Service</span>
                                </a>
                            </li>
                              <li>
                                <a href="#Tcleaner.php">
                                    <span class="inner-text">Cleaners</span>
                                </a>
                            </li>
                              <li>
                                <a href="#Tsecurity.php">
                                    <span class="inner-text">Security</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#default-elements.php">
                            <i class="fa fa-list-alt menu-item-icon"></i>
                            <span class="inner-text">Alert</span>
                        </a>
                    
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pencil-square-o menu-item-icon"></i>
                            <span class="inner-text">Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#Reglab.php">
                                    Lab Assistance Form
                                </a>
                            </li>
                           
                            <li>
                                <a href="#Regservice.php">
                                    Service Form
                                </a>
                            </li>
                            <li>
                                <a href="#Regcleaner.php">
                                    Cleaners Form
                                </a>
                            </li>
                            <li>
                                <a href="#Regsecurity.php">
                                    Security Form
                                </a>
                            </li>
                           </ul>
                    </li>
                   
                    
                    <li>
                        <a href="#calendar.html">
                            <i class="fa fa-calendar menu-item-icon"></i>
                            <span class="inner-text">Calendar</span>
                            <span class="badge-wrapper"><span class="badge badge-xs badge-info">3</span></span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="lock.html">
                            <i class="glyphicon glyphicon-lock"></i>
                            <span class="inner-text">Lock Screen</span>
                        </a>
                    </li>
                    
                        
                    
                         <li>
                        <a href="#pricing-tables.html">
                            <i class="fa fa-file-o menu-item-icon"></i>
                            <span class="inner-text">Pricing tables</span>
                        </a>
                    </li>
                       <li>
                        <a href="#timeline.html">
                            <i class="fa fa-code-fork"></i>
                            <span class="inner-text">Timeline</span>
                        </a>
                    </li>
                      
                       <li>
                        <a href="#profile.html">
                            <i class="glyphicon glyphicon-user"></i>
                            <span class="inner-text">Profile</span>
                        </a>
                    </li>
                       
            </nav>
            <div class="menu-collapse-line">
                <!--Menu collapse/expand icon is put and control from LobiAdmin.js file-->
                <div class="menu-toggle-btn" data-action="collapse-expand-sidebar"></div>
            </div>
        </div>
        <div id="main">
            <div id="ribbon" class="hidden-print">
                <a href="#dashboard" class="btn-ribbon" data-container="#main" data-toggle="tooltip" data-title="Show dashboard"><i class="fa fa-home"></i></a>
                <span class="vertical-devider">&nbsp;</span>
                <button class="btn-ribbon" data-container="#main" data-action="reload" data-toggle="tooltip" data-title="Reload content by ajax"><i class="fa fa-refresh"></i></button>
                <ol class="breadcrumb">
                </ol>
            </div>
            <div id="content">
                
            </div>
        </div>
        <!--Setting box-->
        <div class="setting-box hidden-print">
            <div class="btn-toggle">
                <span class="glyphicon glyphicon-cog"></span>
            </div>
            <form action class="lobi-form">
                <fieldset>
                    <header>Aquila Dashboard</header>
                  
                    <div class="row row-skin-options">
                        <h4>Skins</h4>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="0" checked>
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="header-cyan">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="header-green">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="header-brown">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>
<!--                    <div class="row row-skin-options">
                        <h4>Skins</h4>
                        <div class="btn-group display-block" data-toggle="buttons">
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="0">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-cyan">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-green">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-brown">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>-->
                    <div class="row row-bg-options">
                        <h4>Background</h4>
                        <div class="col-xs-3">
                            <label class="radio" style="background-color: #f2f2f2">
                                <input type="radio" name="body-bg" data-is-color="true" value="#f2f2f2" checked>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio" style="background-color: #edf1f4">
                                <input type="radio" name="body-bg" data-is-color="true" value="#edf1f4">
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio" style="background-image: url('img/bg/bg1.png')">
                                <input type="radio" name="body-bg" value="img/bg/bg1.png">
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio" style="background-image: url('img/bg/bg4.png')">
                                <input type="radio" name="body-bg" value="img/bg/bg4.png">
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-pretty" data-action="clear-storage"><i class="fa fa-refresh"></i> Clear local storage</button>
                </fieldset>
            </form>
        </div>

        <!--Loading indicator for ajax page loading-->
        <div class="spinner spinner-horizontal hide">
            <span class="spinner-text">Loading...</span>
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>

        <script type="text/javascript" src="js/lib/jquery.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/lobi-plugins/lobibox.min.js"></script>
        <script type="text/javascript" src="js/lobi-plugins/lobipanel.min.js"></script>
        <script type="text/javascript" src="js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
        
        <!--Make sure that config.js file is loaded before LobiAdmin.js-->
        <script type="text/javascript" src="js/config.js"></script>
        <script type="text/javascript" src="js/LobiAdmin.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
    </body>
</html>
  