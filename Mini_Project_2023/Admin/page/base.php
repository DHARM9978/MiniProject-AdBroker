<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../static/CSS/bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../static/CSS/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../static/CSS/adminPage.css" />
    <script src="../static/JS/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../static/JS/jquery-3.5.1.js"></script>
    <script src="../static/JS/jquery.dataTables.min.js"></script>
    <script src="../static/JS/dataTables.bootstrap5.min.js"></script>
    <script src="../static/JS/script.js"></script>
    <script src="../static/JS/font.min.js"></script>
    <title>Admin Page</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">AdvertisementBroker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <!-- <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form> -->
                <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="../static/Images/admin-logo.png" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <p class="text-center fw-bold">Admin</p>
                            </li>
                            <li><a class="dropdown-item text-center" href="./AdminLogin.php">Log-out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->

    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            CORE
                        </div>
                    </li>
                    <li>
                        <a href="./AdminPage.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-clock"></i></span>
                            <span>Pending Orders</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Users
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-person"></i></span>
                            <span>Publishers</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="./Add_publisher.php" class="nav-link px-3">
                                        <span class="me-2"><i class="fa-solid fa-user-plus"></i></span>
                                        <span>Add Publisher</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./publishers.php" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                        <span>Maintain</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-person"></i></span>
                            <span>Clients</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="./Add_client.php" class="nav-link px-3">
                                        <span class="me-2"><i class="fa-solid fa-user-plus"></i></span>
                                        <span>Add Client</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./clients.php" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                        <span>Maintain</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Advertize
                        </div>
                    </li>
                    <li>
                        <a href="./ads_page.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-graph-up"></i></span>
                            <span>Ads</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Payment</span>
                        </a>
                    </li>

                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Profile
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="fa-solid fa-key"></i></span>
                            <span>Change password</span>
                        </a>
                    </li>
                    <li>
                        <a href="./AdminLogin.php" class="nav-link px-3">
                            <span class="me-2"><i class="fa-solid fa-right-from-bracket"></i></span>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->