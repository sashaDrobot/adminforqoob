<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/css/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/src/js/jquery.js"></script>
    <script src="/src/js/orders.js"></script>
    <script src="/src/js/popper.js"></script>
    <script src="/src/js/bootstrap.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="head">

            <a class="navbar-brand" href="/"><img src="src/img/qoobcolor_horizontal.png"></a>

            <div class="col-lg-12" id="menu-bg">
                <div class="col-sm-12 col-xs-12 col-lg-5 hidden-menu d-flex align-items-center" id="rightside-menu">
                    <div class="menu-wrapper col-12">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <a href="/">Main</a>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <a href="about.html">About</a>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <a href="portfolio.html">Portfolio</a>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <a href="services.html">Services</a>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <a href="contacts.html">Contacts</a>
                        </div>
                    </div>

                </div>
            </div>
            <div id="main-menu">
                <div class="text-right" id="main-hum">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
        <div class="society flex-column d-flex align-items-center justify-content-center">
            <div><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
            <div><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
            <div><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
        </div>
        <div class="languages flex-column d-flex align-items-center justify-content-center">
            <div><a href="#"><h5>EN</h5></a></div>
            <span class="h-line"></span>
            <div><a href="#"><h5>RU</h5></a></div>
        </div>

    </header>

    <?php echo $content; ?>

    <div class="contacts-portfolio">
        <a class="cont" href="contacts.html">CONTACTS</a>
        <a class="port" href="portfolio.html">PORTFOLIO</a>
    </div>
    <script src="/src/js/menu.js"></script>
</body>
</html>