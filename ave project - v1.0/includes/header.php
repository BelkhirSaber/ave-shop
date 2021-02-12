<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageName; ?></title>
    <link rel="stylesheet" href="css/all.min.css"><!-- fontawesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet"><!-- google fonts -->
    <link rel="stylesheet" href="css/web.css"><!-- custom style -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <header>
        <!-- Header Background -->
        <div class="background">
            <img src="imgs/ave.png" alt="background" title="ave shop">
        </div>
        <!-- Header Content -->
        <div class="overlay">
            <!-- start navbar info -->
            <section class="navbar-info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="info">
                                <div class="currency">
                                    <label>Currency:</label>
                                    <select>
                                        <option value="1">gbp</option>
                                        <option value="2">usd</option>
                                        <option value="3">eur</option>
                                    </select>
                                </div>
                                <div class="right-navbar-info">
                                    <ul>
                                        <li><a href="#">register</a></li>
                                        <li><a href="#">sign in</a></li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-shopping-cart">
                                                </i><span>empty</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end navbar info -->
            <!-- start nav menu -->
            <div class="navbar-menu">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-md navbar-light">

                            <a class="navbar-brand" href="#"><span>avenue</span> fashion</a>

                            <button 
                                class="navbar-toggler"
                                type="button"
                                data-toggle="collapse"
                                data-target="#NavbarAveContent"
                                aria-controls="NavbarAveContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse float-right bg-light" id="NavbarAveContent">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">mens
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#" id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">womens
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">the brand<span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">local stores
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#" id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">looc book
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>

                                </ul>
                                <form
                                    class="form-inline"
                                    action="test.html" method="post">

                                    <input
                                        class="form-control search"
                                        type="search" placeholder="Search"
                                        aria-label="Search">
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn-outline-success"
                                            type="submit">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Nav menu -->
            <!-- Start Button Show -->
            <div class="show">
                <button class="btn"></button>
            </div>
            <!-- End Button Show -->
        </div>
    </header>