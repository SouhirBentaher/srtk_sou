@extends('admin.main-layout')

@section('content-header')
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                    <img class="img-profile rounded-circle" src="{{ asset('admin_assets/img/undraw_profile.svg') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <!-- Content Wrapper :::::''f wosstt''' -->
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Bienvenue à SRTK Administrateur</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- 18736 Abonnement Urbain 2023 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Montant:642422.100 </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18736 Abonnement Urbain 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 23882 Abonnement InterUrbain 2023-->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Montant: 771876.050</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">23882 Abonnement InterUrbain
                                            2023</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 18736 Abonnement Urbain 2022 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Montant:
                                            642422.100
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">18736 Abonnement
                                                    Urbain 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Montant: 771876.050</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">23882 Abonnement Interurbain
                                            2022</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart/ Revenue Sources -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-primary"></i> Direct
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-success"></i> Social
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-info"></i> Referral
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <!-- Abonnement urbain -->
                        <div class="row g-0 card text-white mb-3">
                            <div class="card-header text-white bg-danger">Abonnement urbain</div>
                            <div class="card-body">
                                <div id="piechart4" style="width: 100%; height: 300px;">
                                    <div style="position: relative;">
                                        <div dir="ltr" style="position: relative; width: 429px; height: 300px;">
                                            <div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"
                                                aria-label="A chart."><svg width="429" height="300"
                                                    aria-label="A chart." style="overflow: hidden;">
                                                    <defs id="_ABSTRACT_RENDERER_ID_2">
                                                        <filter id="_ABSTRACT_RENDERER_ID_5">
                                                            <feGaussianBlur in="SourceAlpha" stdDeviation="2">
                                                            </feGaussianBlur>
                                                            <feOffset dx="1" dy="1"></feOffset>
                                                            <feComponentTransfer>
                                                                <feFuncA type="linear" slope="0.1"></feFuncA>
                                                            </feComponentTransfer>
                                                            <feMerge>
                                                                <feMergeNode></feMergeNode>
                                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                                            </feMerge>
                                                        </filter>
                                                    </defs>
                                                    <rect x="0" y="0" width="429" height="300"
                                                        stroke="none" stroke-width="0" fill="#ffffff"></rect>
                                                    <g>
                                                        <rect x="264" y="58" width="83"
                                                            height="65" stroke="none" stroke-width="0"
                                                            fill-opacity="0" fill="#ffffff">
                                                        </rect>
                                                        <g column-id="تلميذ(ة)">
                                                            <rect x="264" y="58" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="67.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">تلميذ(ة)</text></g>
                                                            <circle cx="269.5" cy="63.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#3366cc"></circle>
                                                        </g>
                                                        <g column-id="طالب(ة)">
                                                            <rect x="264" y="76" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="85.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">طالب(ة)</text></g>
                                                            <circle cx="269.5" cy="81.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#dc3912"></circle>
                                                        </g>
                                                        <g column-id="متربص(ة)">
                                                            <rect x="264" y="94" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="103.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">متربص(ة)</text></g>
                                                            <circle cx="269.5" cy="99.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#ff9900"></circle>
                                                        </g>
                                                        <g column-id="متدرب(ة)">
                                                            <rect x="264" y="112" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="121.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">متدرب(ة)</text></g>
                                                            <circle cx="269.5" cy="117.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#109618"></circle>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L160.81109101763698,69.06203041628257A82,82,0,0,1,164,69L164,151A0,0,0,0,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L155.79200775794857,69.4118338032137A82,82,0,0,1,160.81109101763698,69.06203041628257L164,151A0,0,0,0,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L83.07432726383558,137.76990203365006A82,82,0,0,1,155.79200775794857,69.4118338032137L164,151A0,0,0,0,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                                            text-anchor="start" x="110.16030633986546"
                                                            y="114.06514949162232" font-family="Arial" font-size="11"
                                                            stroke="none" stroke-width="0" fill="#ffffff">20.8%</text>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L164,69A82,82,0,1,1,83.07432726383558,137.76990203365006L164,151A0,0,0,1,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                                            text-anchor="start" x="184.95148941937993"
                                                            y="197.74465618338513" font-family="Arial" font-size="11"
                                                            stroke="none" stroke-width="0" fill="#ffffff">77.6%</text>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">

                        <!-- Abonnement Interurbain -->
                        <div class="row g-0 card text-white mb-3">
                            <div class="card-header text-white bg-secondary"> Abonnement Interurbain</div>
                            <div class="card-body">
                                <div id="piechart5" style="width: 100%; height: 300px;">
                                    <div style="position: relative;">
                                        <div dir="ltr" style="position: relative; width: 429px; height: 300px;">
                                            <div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"
                                                aria-label="A chart."><svg width="429" height="300"
                                                    aria-label="A chart." style="overflow: hidden;">
                                                    <defs id="_ABSTRACT_RENDERER_ID_3">
                                                        <filter id="_ABSTRACT_RENDERER_ID_4">
                                                            <feGaussianBlur in="SourceAlpha" stdDeviation="2">
                                                            </feGaussianBlur>
                                                            <feOffset dx="1" dy="1"></feOffset>
                                                            <feComponentTransfer>
                                                                <feFuncA type="linear" slope="0.1"></feFuncA>
                                                            </feComponentTransfer>
                                                            <feMerge>
                                                                <feMergeNode></feMergeNode>
                                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                                            </feMerge>
                                                        </filter>
                                                    </defs>
                                                    <rect x="0" y="0" width="429" height="300"
                                                        stroke="none" stroke-width="0" fill="#ffffff"></rect>
                                                    <g>
                                                        <rect x="264" y="58" width="83"
                                                            height="65" stroke="none" stroke-width="0"
                                                            fill-opacity="0" fill="#ffffff"></rect>
                                                        <g column-id="تلميذ(ة)">
                                                            <rect x="264" y="58" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="67.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">تلميذ(ة)</text></g>
                                                            <circle cx="269.5" cy="63.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#3366cc"></circle>
                                                        </g>
                                                        <g column-id="طالب(ة)">
                                                            <rect x="264" y="76" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="85.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">طالب(ة)</text></g>
                                                            <circle cx="269.5" cy="81.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#dc3912"></circle>
                                                        </g>
                                                        <g column-id="متربص(ة)">
                                                            <rect x="264" y="94" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="103.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">متربص(ة)</text></g>
                                                            <circle cx="269.5" cy="99.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#ff9900"></circle>
                                                        </g>
                                                        <g column-id="متدرب(ة)">
                                                            <rect x="264" y="112" width="83"
                                                                height="11" stroke="none" stroke-width="0"
                                                                fill-opacity="0" fill="#ffffff"></rect>
                                                            <g><text text-anchor="start" x="279" y="121.35"
                                                                    font-family="Arial" font-size="11" stroke="none"
                                                                    stroke-width="0" fill="#222222">متدرب(ة)</text></g>
                                                            <circle cx="269.5" cy="117.5" r="5.5"
                                                                stroke="none" stroke-width="0" fill="#109618"></circle>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L157.57764544746126,69.2518907741501A82,82,0,0,1,164,69L164,151A0,0,0,0,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                                        <path d="M157.26435985953256,65.2641781289867A86,86,0,0,1,164,65"
                                                            stroke="#109618" stroke-width="2" fill-opacity="1"
                                                            fill="none"></path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L150.47076562619773,70.12379943853243A82,82,0,0,1,157.57764544746126,69.2518907741501L164,151A0,0,0,0,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L118.78350219387654,82.59336051121329A82,82,0,0,1,150.47076562619782,70.12379943853242L164,151A0,0,0,0,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M164,151L164,69A82,82,0,1,1,118.78350219387654,82.59336051121329L164,151A0,0,0,1,0,164,151"
                                                            stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                                            text-anchor="start" x="165.78008281278466"
                                                            y="212.32988703377438" font-family="Arial" font-size="11"
                                                            stroke="none" stroke-width="0" fill="#ffffff">90.7%</text>
                                                    </g>

                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    </body>
@endsection
