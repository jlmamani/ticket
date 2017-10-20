<!DOCTYPE html>
<html class="no-js css-menubar" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Blank | Remark Admin Template</title>
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/css/bootstrap-extend.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/site.min.css') }}" rel="stylesheet">
  <!-- Plugins -->
  <link href="{{ asset('assets/global/vendor/animsition/animsition.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/vendor/asscrollable/asScrollable.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/vendor/switchery/switchery.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/vendor/intro-js/introjs.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/vendor/slidepanel/slidePanel.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/vendor/flag-icon-css/flag-icon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/vendor/waves/waves.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href="{{ asset('assets/global/fonts/material-design/material-design.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/fonts/brand-icons/brand-icons.min.css') }}" rel="stylesheet">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="{{asset('assets/global/vendor/breakpoints/breakpoints.js')}}" type="text/javascript"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition">
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text hidden-xs-down"> Remark</span>
      </div>
      
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
                <i class="icon md-account" aria-hidden="true"></i>
                usuario
            </a>
            <div class="dropdown-menu" role="menu">
              <div class="dropdown-divider" role="presentation"></div>
              <a class="dropdown-item" href="#" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
          <!--
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
              aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon md-notifications" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="badge badge-round badge-danger">New 5</span>
                </div>
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                      All notifications
                    </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
              aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon md-email" aria-hidden="true"></i>
                <span class="badge badge-pill badge-info up">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header" role="presentation">
                  <h5>MESSAGES</h5>
                  <span class="badge badge-round badge-info">New 3</span>
                </div>
                <div class="list-group" role="presentation">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-online">
                              <img src="../../global/portraits/2.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Mary Adams</h6>
                            <div class="media-meta">
                              <time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>
                            </div>
                            <div class="media-detail">Anyways, i would like just do it</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-off">
                              <img src="../../global/portraits/3.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Caleb Richards</h6>
                            <div class="media-meta">
                              <time datetime="2017-06-17T12:30:30+08:00">12 hours ago</time>
                            </div>
                            <div class="media-detail">I checheck the document. But there seems</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-busy">
                              <img src="../../global/portraits/4.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">June Lane</h6>
                            <div class="media-meta">
                              <time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>
                            </div>
                            <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-away">
                              <img src="../../global/portraits/5.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Edward Fletcher</h6>
                            <div class="media-meta">
                              <time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>
                            </div>
                            <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer" role="presentation">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                      See all messages
                    </a>
                </div>
              </div>
            </li>
          -->
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar site-menubar-ligth">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-category">Usuarios</li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Administrar</span>
              </a>
            </li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Registrar</span>
              </a>
            </li>
            <li class="site-menu-category">Noticias</li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Noticias</span>
              </a>
            </li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Noticias Administrar</span>
              </a>
            </li>
            <li class="site-menu-category">Testimonios</li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Testimonios</span>
              </a>
            </li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Testimonios Administrar</span>
              </a>
            </li>
            <li class="site-menu-category">Videos</li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Video</span>
              </a>
            </li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="#">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Videos Administrar</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--
    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon md-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon md-eye-off" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon md-power" aria-hidden="true"></span>
      </a>
    </div>
    -->
  </div>
  @yield('content')
  <footer class="site-footer">
    <div class="site-footer-legal">© 2017 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>
  <!-- Core  -->
  <script src="{{asset('assets/global/vendor/babel-external-helpers/babel-external-helpers.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/jquery/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/tether/tether.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/animsition/animsition.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/mousewheel/jquery.mousewheel.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/asscrollbar/jquery-asScrollbar.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/asscrollable/jquery-asScrollable.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/waves/waves.js')}}" type="text/javascript"></script>  
<!-- Plugins -->
  <script src="{{asset('assets/global/vendor/switchery/switchery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/intro-js/intro.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/screenfull/screenfull.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/vendor/slidepanel/jquery-slidePanel.js')}}" type="text/javascript"></script>
<!-- Scripts -->
  <script src="{{asset('assets/global/js/State.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Component.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Plugin.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Base.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Config.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/Section/Menubar.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/Section/GridMenu.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/Section/Sidebar.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/Section/PageAside.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/Plugin/menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/config/colors.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/config/tour.js')}}" type="text/javascript"></script>
  <script>
  Config.set('assets','assets');
  </script>
  <!-- Page -->
  <script src="{{asset('assets/js/Site.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Plugin/asscrollable.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Plugin/slidepanel.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/js/Plugin/switchery.js')}}" type="text/javascript"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>  
