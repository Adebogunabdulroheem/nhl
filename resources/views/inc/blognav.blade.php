    <div class="sc_title_section">
        <div class="sc_img_overlay">
            
        </div>
        <div class="main_sc_wrapper">
             <div class="container">
        <div class="row">
            <div class="main-header">
                <div class="top-header">
                    <div class="container">
                        <div class="col-lg-6 col-md-7 col-xs-12 col-sm-12 top_hedr_response">
                            <div class="header_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="top_heading_slide">
                                            <ul>
                                                <li><i class="flaticon-security-camera"></i> Wel-come to <a href="/">NHL</a> <span class="hidden-sm hidden-xs">The pride of the Nigeria Navy</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="top_heading_slide">
                                            <ul>
                                                <li><i class="flaticon-security-camera"></i> Wel-come to <a href="/">NHL</a> <span class="hidden-sm hidden-xs">The pride of the Nigeria Navy</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="top_heading_slide">
                                            <ul>
                                                <li><i class="flaticon-security-camera"></i> Wel-come to <a href="/">NHL</a> <span class="hidden-sm hidden-xs">The pride of the Nigeria Navy</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-xs-12 col-sm-12 top_icon_header">

                            <div class="right-side float-right">
                                <ul>
                                    <li><a href="index.html#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="index.html#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index.html#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="index.html#" class="tran3s round-border icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.right-side -->

                        </div>
                        <!-- /.top-header -->
                    </div>
                    <!-- /.top-header -->
                </div>
            </div>
        </div>
    </div>
        </div>
        <!--bottom header wrappper start-->
        <div class="transparent-menu header-area hidden-menu-bar stick">
            <div class="container">
                <div class="row">
                    <div class="main-menu-wrapper clear-fix">
                        <div class="container">
                            <div class="row">
                                <div class="logo float-left">
                                    <a href="/"><img src="/images/logo_1.png" alt="LOGO"></a>
                                </div>

                                <form action="services.html#" class="float-right search_div search_response">
                                    <input type="text" placeholder="Search here">
                                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sc_navigation hidden-sm hidden-xs">
                       <nav id="primary-nav" class="dropdown">
                        <ul class="dropdown menu">
                            <li><a href="/" title="">Home</a>
                            </li>
                            <li><a href="/about" title="">about us</a>
                            </li>
                            <li><a href="#" title="">subsidiaries</a>
                                <ul>
                                    <li><a href="https://navalbuilding.com/" title="">NBCCL</a></li>
                                    <li><a href="/nhsl" title="">NHSL</a></li>
                                    <li><a href="https://nigerianavymfb.com/" title="">NNMFBL</a></li>
                                    <li><a href="/nesl" title="">NESL</a></li>
                                    <li><a href="/nmsl" title="">NMSL</a></li>
                                    <li><a href="/ncfsl" title="">NCFSL</a></li>
                                    <li><a href="/nnmcsl" title="">NNMCSL</a></li>
                                    <li><a href="https://navaldockyardlimited.com/" title="">Naval Dockyard Limited</a></li>
                                     <li>
                                        <a href="/nsl" title="">Navy Shipyard Limited</a>
                                    </li>
                                    <li>
                                        <a href="https://adun.edu.ng" title="">Admiralty University </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/blog" title="">blog</a>
                            </li>
                            <li><a href="/contact" title="">Contact us</a>
                            </li>
                              <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                 <li>
                                        <a href="#">Hola! {{ Auth::user()->name }}</a>
                                    
                                    <ul>
                                        <li>
                                          <a href="/dashboard">Dashboard</a>
                                        </li>
                                        <li>
                                          <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>
                                        </li>
                                        <li>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </nav>
                        <!-- Menu -->

                    </div>
                    <!-- /.main-menu-wrapper -->
                    <!-- mobile menu area start -->
                    <div class="mobile-menu-area visible-sm visible-xs">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 cc_menu_top_margin">
                                    <!-- mobile menu start -->
                                    <div class="mobile-menu">
                                        <nav style="display: block;">
                                            <ul class="nav">
                                                <li><a href="/">Home</a>
                                                </li>
                                                <li><a href="/about">about us</a>
                                                </li>
                                                <li><a href="#">services</a>
                                                    <ul>
                                                        <li><a href="https://navalbuilding.com" title="">NBCCL</a></li>
                                                        <li><a href="/nhsl" title="">NHSL</a></li>
                                                        <li><a href="https://nigerianavymfb.com/" title="">NMFBL</a></li>
                                                        <li><a href="/nesl" title="">NESL</a></li>
                                                        <li><a href="/nmsl" title="">NMSL</a></li>
                                                        <li><a href="/ncfsl" title="">NCFSL</a></li>
                                                        <li><a href="/nnmcsl" title="">NNMCSL</a></li>
                                                        <li><a href="https://navaldockyardlimited.com" title="">NDL</a></li>
                                                        <li><a href="https://navaldockyardlimited.com" title="">NSL</a></li>
                                                        <li><a href="https://adun.edu.ng" title="">Admiralty University</a></li>
                                                    </ul>
                                                </li>                                           
                                                <li><a href="/blog">blog </a>
                                                </li>
                                                <li><a href="/contact"> contact us</a>
                                                </li>
                                                   <!-- Authentication Links -->
                                                 @if (Auth::guest())
                                                     <li><a href="{{ route('login') }}">Login</a></li>
                                                     <li><a href="{{ route('register') }}">Register</a></li>
                                                 @else
                                                      <li>
                                                             <a href="#">Hola! {{ Auth::user()->name }}</a>
                                                         
                                                         <ul>
                                                             <li>
                                                               <a href="/dashboard">Dashboard</a>
                                                             </li>
                                                             <li>
                                                               <a href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                                   Logout
                                                               </a>
                                                             </li>
                                                             <li>
                                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                   {{ csrf_field() }}
                                                               </form>
                                                             </li>
                                                         </ul>
                                                     </li>
                                                 @endif

                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- mobile menu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mobile menu area end -->
                </div>
                <!-- /.main-menu-wrapper -->
            </div>
        </div>
        <!--header section end-->
        <div class="title_main_div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="sc_tittle_cont_wrapper">
                                <div class="sc_tittle_cont">
                                    <h1>@yield('page') </h1>
                                    <ul class="page-breadcrum">
                                        <li><a href="/posts">Posts</a>
                                        </li>
                                        <li class="icon_breamcum"> > </li>
                                        <li>@yield('page')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yiels('page')
    </div>