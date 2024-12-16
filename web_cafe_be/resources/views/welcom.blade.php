<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <!-- loader-->
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/css/dark-theme.css" />
    <link rel="stylesheet" href="../assets/css/semi-dark.css" />
    <link rel="stylesheet" href="../assets/css/header-colors.css" />
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--start header wrapper-->
        <div class="header-wrapper">
            <!--start header -->
            <header>
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="topbar-logo-header">
                            <div class="">
                                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                            </div>
                            <div class="">
                                <h4 class="logo-text">Rocker</h4>
                            </div>
                        </div>
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                        <div class="search-bar flex-grow-1">
                            <div class="position-relative search-bar-box">
                                <input type="text" class="form-control search-control"
                                    placeholder="Type to search..."> <span
                                    class="position-absolute top-50 search-show translate-middle-y"><i
                                        class='bx bx-search'></i></span>
                                <span class="position-absolute top-50 search-close translate-middle-y"><i
                                        class='bx bx-x'></i></span>
                            </div>
                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item mobile-search-icon">
                                    <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i
                                            class='bx bx-category'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="row row-cols-3 g-3 p-3">
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-cosmic text-white"><i
                                                        class='bx bx-group'></i>
                                                </div>
                                                <div class="app-title">Teams</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-burning text-white"><i
                                                        class='bx bx-atom'></i>
                                                </div>
                                                <div class="app-title">Projects</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-lush text-white"><i
                                                        class='bx bx-shield'></i>
                                                </div>
                                                <div class="app-title">Tasks</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
                                                        class='bx bx-notification'></i>
                                                </div>
                                                <div class="app-title">Feeds</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-blues text-dark"><i
                                                        class='bx bx-file'></i>
                                                </div>
                                                <div class="app-title">Files</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                                        class='bx bx-filter-alt'></i>
                                                </div>
                                                <div class="app-title">Alerts</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="alert-count">7</span>
                                        <i class='bx bx-bell'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Notifications</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-notifications-list">
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-primary text-primary"><i
                                                            class="bx bx-group"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Customers<span
                                                                class="msg-time float-end">14 Sec
                                                                ago</span></h6>
                                                        <p class="msg-info">5 new user registered</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-danger text-danger"><i
                                                            class="bx bx-cart-alt"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Orders <span
                                                                class="msg-time float-end">2 min
                                                                ago</span></h6>
                                                        <p class="msg-info">You have recived new orders</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-success text-success"><i
                                                            class="bx bx-file"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">24 PDF File<span
                                                                class="msg-time float-end">19 min
                                                                ago</span></h6>
                                                        <p class="msg-info">The pdf files generated</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-warning text-warning"><i
                                                            class="bx bx-send"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Time Response <span
                                                                class="msg-time float-end">28 min
                                                                ago</span></h6>
                                                        <p class="msg-info">5.1 min avarage time response</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-info text-info"><i
                                                            class="bx bx-home-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Product Approved <span
                                                                class="msg-time float-end">2 hrs ago</span></h6>
                                                        <p class="msg-info">Your new product has approved</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-danger text-danger"><i
                                                            class="bx bx-message-detail"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Comments <span
                                                                class="msg-time float-end">4 hrs
                                                                ago</span></h6>
                                                        <p class="msg-info">New customer comments recived</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-success text-success"><i
                                                            class='bx bx-check-square'></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Your item is shipped <span
                                                                class="msg-time float-end">5 hrs
                                                                ago</span></h6>
                                                        <p class="msg-info">Successfully shipped your item</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-primary text-primary"><i
                                                            class='bx bx-user-pin'></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New 24 authors<span
                                                                class="msg-time float-end">1 day
                                                                ago</span></h6>
                                                        <p class="msg-info">24 new authors joined last week</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-warning text-warning"><i
                                                            class='bx bx-door-open'></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Defense Alerts <span
                                                                class="msg-time float-end">2 weeks
                                                                ago</span></h6>
                                                        <p class="msg-info">45% less alerts last 4 weeks</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Notifications</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                        href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"> <span class="alert-count">8</span>
                                        <i class='bx bx-comment'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Messages</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-message-list">
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-1.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Daisy Anderson <span
                                                                class="msg-time float-end">5 sec
                                                                ago</span></h6>
                                                        <p class="msg-info">The standard chunk of lorem</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-2.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Althea Cabardo <span
                                                                class="msg-time float-end">14
                                                                sec ago</span></h6>
                                                        <p class="msg-info">Many desktop publishing packages</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-3.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Oscar Garner <span
                                                                class="msg-time float-end">8 min
                                                                ago</span></h6>
                                                        <p class="msg-info">Various versions have evolved over</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-4.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Katherine Pechon <span
                                                                class="msg-time float-end">15
                                                                min ago</span></h6>
                                                        <p class="msg-info">Making this the first true generator</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-5.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Amelia Doe <span
                                                                class="msg-time float-end">22 min
                                                                ago</span></h6>
                                                        <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-6.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Cristina Jhons <span
                                                                class="msg-time float-end">2 hrs
                                                                ago</span></h6>
                                                        <p class="msg-info">The passage is attributed to an unknown</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-7.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">James Caviness <span
                                                                class="msg-time float-end">4 hrs
                                                                ago</span></h6>
                                                        <p class="msg-info">The point of using Lorem</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-8.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Peter Costanzo <span
                                                                class="msg-time float-end">6 hrs
                                                                ago</span></h6>
                                                        <p class="msg-info">It was popularised in the 1960s</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-9.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">David Buckley <span
                                                                class="msg-time float-end">2 hrs
                                                                ago</span></h6>
                                                        <p class="msg-info">Various versions have evolved over</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-10.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Thomas Wheeler <span
                                                                class="msg-time float-end">2 days
                                                                ago</span></h6>
                                                        <p class="msg-info">If you are going to use a passage</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="assets/images/avatars/avatar-11.png"
                                                            class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Johnny Seitz <span
                                                                class="msg-time float-end">5 days
                                                                ago</span></h6>
                                                        <p class="msg-info">All the Lorem Ipsum generators</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Messages</div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-box dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                                <div class="user-info ps-3">
                                    <p class="user-name mb-0">Pauline Seitz</p>
                                    <p class="designattion mb-0">Web Designer</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:;"><i
                                            class="bx bx-user"></i><span>Profile</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i
                                            class="bx bx-cog"></i><span>Settings</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i
                                            class='bx bx-home-circle'></i><span>Dashboard</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i
                                            class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i
                                            class='bx bx-download'></i><span>Downloads</span></a>
                                </li>
                                <li>
                                    <div class="dropdown-divider mb-0"></div>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i
                                            class='bx bx-log-out-circle'></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--end header -->
            <!--navigation-->
            <div class="nav-container primary-menu">
                <div class="mobile-topbar-header">
                    <div>
                        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    </div>
                    <div>
                        <h4 class="logo-text">Rukada</h4>
                    </div>
                    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                    </div>
                </div>
                <nav class="navbar navbar-expand-xl w-100">
                    <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                        <li class="nav-item dropdown">
                            <a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                                </div>
                                <div class="menu-title">Dashboard</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="index.html"><i
                                            class="bx bx-right-arrow-alt"></i>Default</a>
                                </li>
                                <li> <a class="dropdown-item" href="index2.html"><i
                                            class="bx bx-right-arrow-alt"></i>Alternate</a>
                                </li>
                                <li> <a class="dropdown-item" href="index3.html"><i
                                            class="bx bx-right-arrow-alt"></i>Graphical</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class='bx bx-cart'></i>
                                </div>
                                <div class="menu-title">eCommerce</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="ecommerce-products.html"><i
                                            class="bx bx-right-arrow-alt"></i>Products</a>
                                </li>
                                <li> <a class="dropdown-item" href="ecommerce-products-details.html"><i
                                            class="bx bx-right-arrow-alt"></i>Product Details</a>
                                </li>
                                <li> <a class="dropdown-item" href="ecommerce-add-new-products.html"><i
                                            class="bx bx-right-arrow-alt"></i>Add New Products</a>
                                </li>
                                <li> <a class="dropdown-item" href="ecommerce-orders.html"><i
                                            class="bx bx-right-arrow-alt"></i>Orders</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="widgets.html">
                                <div class="parent-icon"><i class='bx bx-cookie'></i>
                                </div>
                                <div class="menu-title">Widgets</div>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class="bx bx-category"></i>
                                </div>
                                <div class="menu-title">Application</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="app-emailbox.html"><i
                                            class="bx bx-right-arrow-alt"></i>Email</a>
                                </li>
                                <li> <a class="dropdown-item" href="app-chat-box.html"><i
                                            class="bx bx-right-arrow-alt"></i>Chat Box</a>
                                </li>
                                <li> <a class="dropdown-item" href="app-file-manager.html"><i
                                            class="bx bx-right-arrow-alt"></i>File Manager</a>
                                </li>
                                <li> <a class="dropdown-item" href="app-contact-list.html"><i
                                            class="bx bx-right-arrow-alt"></i>Contatcs</a>
                                </li>
                                <li> <a class="dropdown-item" href="app-to-do.html"><i
                                            class="bx bx-right-arrow-alt"></i>Todo List</a>
                                </li>
                                <li> <a class="dropdown-item" href="app-invoice.html"><i
                                            class="bx bx-right-arrow-alt"></i>Invoice</a>
                                </li>
                                <li> <a class="dropdown-item" href="app-fullcalender.html"><i
                                            class="bx bx-right-arrow-alt"></i>Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                                </div>
                                <div class="menu-title">Charts</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="charts-apex-chart.html"><i
                                            class="bx bx-right-arrow-alt"></i>Apex</a>
                                </li>
                                <li> <a class="dropdown-item" href="charts-chartjs.html"><i
                                            class="bx bx-right-arrow-alt"></i>Chartjs</a>
                                </li>
                                <li> <a class="dropdown-item" href="charts-highcharts.html"><i
                                            class="bx bx-right-arrow-alt"></i>Highcharts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                                </div>
                                <div class="menu-title">Components</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="widgets.html"><i
                                            class="bx bx-right-arrow-alt"></i>Widgets</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-alerts.html"><i
                                            class="bx bx-right-arrow-alt"></i>Alerts</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-accordions.html"><i
                                            class="bx bx-right-arrow-alt"></i>Accordions</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-buttons.html"><i
                                            class="bx bx-right-arrow-alt"></i>Buttons</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-cards.html"><i
                                            class="bx bx-right-arrow-alt"></i>Cards</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-list-groups.html"><i
                                            class="bx bx-right-arrow-alt"></i>List Groups</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-media-object.html"><i
                                            class="bx bx-right-arrow-alt"></i>Media Objects</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-modals.html"><i
                                            class="bx bx-right-arrow-alt"></i>Modals</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-navs-tabs.html"><i
                                            class="bx bx-right-arrow-alt"></i>Navs & Tabs</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-navbar.html"><i
                                            class="bx bx-right-arrow-alt"></i>Navbar</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-popovers-tooltips.html"><i
                                            class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-progress-bars.html"><i
                                            class="bx bx-right-arrow-alt"></i>Progress</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-spinners.html"><i
                                            class="bx bx-right-arrow-alt"></i>Spinners</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-notifications.html"><i
                                            class="bx bx-right-arrow-alt"></i>Notifications</a>
                                </li>
                                <li> <a class="dropdown-item" href="component-avtars-chips.html"><i
                                            class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class="bx bx-lock"></i>
                                </div>
                                <div class="menu-title">Authentication</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="authentication-signin.html" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Sign In</a>
                                </li>
                                <li> <a class="dropdown-item" href="authentication-signup.html" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Sign Up</a>
                                </li>
                                <li> <a class="dropdown-item" href="authentication-signin-with-header-footer.html"
                                        target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In with Header &
                                        Footer</a>
                                </li>
                                <li> <a class="dropdown-item" href="authentication-signup-with-header-footer.html"
                                        target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up with Header &
                                        Footer</a>
                                </li>
                                <li> <a class="dropdown-item" href="authentication-forgot-password.html"
                                        target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
                                </li>
                                <li> <a class="dropdown-item" href="authentication-reset-password.html"
                                        target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
                                </li>
                                <li> <a class="dropdown-item" href="authentication-lock-screen.html"
                                        target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class="bx bx-donate-blood"></i>
                                </div>
                                <div class="menu-title">Pages</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="user-profile.html"><i
                                            class="bx bx-right-arrow-alt"></i>User Profile</a>
                                </li>
                                <li> <a class="dropdown-item" href="timeline.html"><i
                                            class="bx bx-right-arrow-alt"></i>Timeline</a>
                                </li>
                                <li> <a class="dropdown-item" href="pricing-table.html"><i
                                            class="bx bx-right-arrow-alt"></i>Pricing</a>
                                </li>
                                <li> <a class="dropdown-item" href="errors-404-error.html"><i
                                            class="bx bx-right-arrow-alt"></i>404 Error</a>
                                </li>
                                <li> <a class="dropdown-item" href="errors-500-error.html"><i
                                            class="bx bx-right-arrow-alt"></i>500 Error</a>
                                </li>
                                <li> <a class="dropdown-item" href="errors-coming-soon.html"><i
                                            class="bx bx-right-arrow-alt"></i>Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                                </div>
                                <div class="menu-title">Forms</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="form-elements.html"><i
                                            class="bx bx-right-arrow-alt"></i>Form Elements</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-input-group.html"><i
                                            class="bx bx-right-arrow-alt"></i>Input Groups</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-layouts.html"><i
                                            class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-validations.html"><i
                                            class="bx bx-right-arrow-alt"></i>Form Validation</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-wizard.html"><i
                                            class="bx bx-right-arrow-alt"></i>Form Wizard</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-text-editor.html"><i
                                            class="bx bx-right-arrow-alt"></i>Text Editor</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-file-upload.html"><i
                                            class="bx bx-right-arrow-alt"></i>File Upload</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-date-time-pickes.html"><i
                                            class="bx bx-right-arrow-alt"></i>Date Pickers</a>
                                </li>
                                <li> <a class="dropdown-item" href="form-select2.html"><i
                                            class="bx bx-right-arrow-alt"></i>Select2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--end navigation-->
        </div>
        <!--end header wrapper-->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Orders</p>
                                        <h4 class="my-1 text-info">4805</h4>
                                        <p class="mb-0 font-13">+2.5% from last week</p>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                                        <i class='bx bxs-cart'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Revenue</p>
                                        <h4 class="my-1 text-danger">$84,245</h4>
                                        <p class="mb-0 font-13">+5.4% from last week</p>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                        <i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Bounce Rate</p>
                                        <h4 class="my-1 text-success">34.6%</h4>
                                        <p class="mb-0 font-13">-4.5% from last week</p>
                                    </div>
                                    <div
                                        class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                        <i class='bx bxs-bar-chart-alt-2'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-warning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Customers</p>
                                        <h4 class="my-1 text-warning">8.4K</h4>
                                        <p class="mb-0 font-13">+8.4% from last week</p>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                                        <i class='bx bxs-group'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Sales Overview</h6>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                                    <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1"
                                            style="color: #14abef"></i>Sales</span>
                                    <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1"
                                            style="color: #ffc107"></i>Visits</span>
                                </div>
                                <div class="chart-container-1">
                                    <canvas id="chart1"></canvas>
                                </div>
                            </div>
                            <div
                                class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">24.15M</h5>
                                        <small class="mb-0">Overall Visitor <span> <i
                                                    class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">12:38</h5>
                                        <small class="mb-0">Visitor Duration <span> <i
                                                    class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">639.82</h5>
                                        <small class="mb-0">Pages/Visit <span> <i
                                                    class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Trending Products</h6>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-container-2 mt-4">
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Jeans <span class="badge bg-success rounded-pill">25</span>
                                </li>
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    T-Shirts <span class="badge bg-danger rounded-pill">10</span>
                                </li>
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Shoes <span class="badge bg-primary rounded-pill">65</span>
                                </li>
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Lingerie <span class="badge bg-warning text-dark rounded-pill">14</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Recent Orders</h6>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown"><i
                                        class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Photo</th>
                                        <th>Product ID</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Shipping</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Iphone 5</td>
                                        <td><img src="assets/images/products/01.png" class="product-img-2"
                                                alt="product img"></td>
                                        <td>#9405822</td>
                                        <td><span
                                                class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                        </td>
                                        <td>$1250.00</td>
                                        <td>03 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-quepal" role="progressbar"
                                                    style="width: 100%"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Earphone GL</td>
                                        <td><img src="assets/images/products/02.png" class="product-img-2"
                                                alt="product img"></td>
                                        <td>#8304620</td>
                                        <td><span
                                                class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                        </td>
                                        <td>$1500.00</td>
                                        <td>05 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-blooker" role="progressbar"
                                                    style="width: 60%"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>HD Hand Camera</td>
                                        <td><img src="assets/images/products/03.png" class="product-img-2"
                                                alt="product img"></td>
                                        <td>#4736890</td>
                                        <td><span
                                                class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                        </td>
                                        <td>$1400.00</td>
                                        <td>06 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-bloody" role="progressbar"
                                                    style="width: 70%"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Clasic Shoes</td>
                                        <td><img src="assets/images/products/04.png" class="product-img-2"
                                                alt="product img"></td>
                                        <td>#8543765</td>
                                        <td><span
                                                class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                        </td>
                                        <td>$1200.00</td>
                                        <td>14 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-quepal" role="progressbar"
                                                    style="width: 100%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sitting Chair</td>
                                        <td><img src="assets/images/products/06.png" class="product-img-2"
                                                alt="product img"></td>
                                        <td>#9629240</td>
                                        <td><span
                                                class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                        </td>
                                        <td>$1500.00</td>
                                        <td>18 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-blooker" role="progressbar"
                                                    style="width: 60%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hand Watch</td>
                                        <td><img src="assets/images/products/05.png" class="product-img-2"
                                                alt="product img"></td>
                                        <td>#8506790</td>
                                        <td><span
                                                class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                        </td>
                                        <td>$1800.00</td>
                                        <td>21 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-bloody" role="progressbar"
                                                    style="width: 40%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-7 col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-header bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Recent Orders</h6>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-8 border-end">
                                        <div id="geographic-map-2"></div>
                                    </div>
                                    <div class="col-lg-5 col-xl-4">

                                        <div class="mb-4">
                                            <p class="mb-2"><i class="flag-icon flag-icon-us me-1"></i> USA <span
                                                    class="float-end">70%</span></p>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar bg-primary progress-bar-striped"
                                                    role="progressbar" style="width: 70%"></div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-2"><i class="flag-icon flag-icon-ca me-1"></i> Canada <span
                                                    class="float-end">65%</span></p>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar bg-danger progress-bar-striped"
                                                    role="progressbar" style="width: 65%"></div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-2"><i class="flag-icon flag-icon-gb me-1"></i> England
                                                <span class="float-end">60%</span>
                                            </p>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar bg-success progress-bar-striped"
                                                    role="progressbar" style="width: 60%"></div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-2"><i class="flag-icon flag-icon-au me-1"></i> Australia
                                                <span class="float-end">55%</span>
                                            </p>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar bg-warning progress-bar-striped"
                                                    role="progressbar" style="width: 55%"></div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-2"><i class="flag-icon flag-icon-in me-1"></i> India <span
                                                    class="float-end">50%</span></p>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar bg-info progress-bar-striped"
                                                    role="progressbar" style="width: 50%"></div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <p class="mb-2"><i class="flag-icon flag-icon-cn me-1"></i> China <span
                                                    class="float-end">45%</span></p>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar bg-dark progress-bar-striped"
                                                    role="progressbar" style="width: 45%"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 col-xl-4 d-flex">
                        <div class="card w-100 radius-10">
                            <div class="card-body">
                                <div class="card radius-10 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Likes</p>
                                                <h4 class="my-1">45.6M</h4>
                                                <p class="mb-0 font-13">+6.2% from last week</p>
                                            </div>
                                            <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i
                                                    class='bx bxs-heart-circle'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card radius-10 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Comments</p>
                                                <h4 class="my-1">25.6K</h4>
                                                <p class="mb-0 font-13">+3.7% from last week</p>
                                            </div>
                                            <div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto"><i
                                                    class='bx bxs-comment-detail'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card radius-10 mb-0 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Shares</p>
                                                <h4 class="my-1">85.4M</h4>
                                                <p class="mb-0 font-13">+4.6% from last week</p>
                                            </div>
                                            <div class="widgets-icons-2 bg-gradient-kyoto text-dark ms-auto"><i
                                                    class='bx bxs-share-alt'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!--end row-->

                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <p class="font-weight-bold mb-1 text-secondary">Weekly Revenue</p>
                                <div class="d-flex align-items-center mb-4">
                                    <div>
                                        <h4 class="mb-0">$89,540</h4>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4% <i
                                                class="bx bxs-up-arrow-alt mr-2"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="chart-container-0">
                                    <canvas id="chart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-header bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Orders Summary</h6>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container-1">
                                    <canvas id="chart4"></canvas>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Completed <span class="badge bg-gradient-quepal rounded-pill">25</span>
                                </li>
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Pending <span class="badge bg-gradient-ibiza rounded-pill">10</span>
                                </li>
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Process <span class="badge bg-gradient-deepblue rounded-pill">65</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-header bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Top Selling Categories</h6>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container-0">
                                    <canvas id="chart5"></canvas>
                                </div>
                            </div>
                            <div class="row row-group border-top g-0">
                                <div class="col">
                                    <div class="p-3 text-center">
                                        <h4 class="mb-0 text-danger">$45,216</h4>
                                        <p class="mb-0">Clothing</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 text-center">
                                        <h4 class="mb-0 text-success">$68,154</h4>
                                        <p class="mb-0">Electronic</p>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end row-->

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/index.js"></script>
    <!--app JS-->
    <script src="../assets/js/app.js"></script>
</body>

</html>
