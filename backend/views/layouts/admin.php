<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="/src/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/src/img/favicon.ico" type="image/x-icon">
    <link href="/src/css/bootstrap.css" rel="stylesheet">
    <link href="/src/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="/src/js/jquery.js"></script>
    <script src="/src/js/form.js"></script>
    <script src="/src/js/popper.js"></script>
    <script src="/src/js/bootstrap.js"></script>
</head>

<body class="fixed-nav sticky-footer">
    <?php if ($this->route['action'] != 'login'): ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="/admin/orders">Панель Администратора</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/orders">
                            <i class="fas fa-list-ul"></i>
                            <span class="nav-link-text">Список заказов</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/processed">
                            <i class="fas fa-check"></i>
                            <span class="nav-link-text">Обработанные</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span class="nav-link-text">На главную</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-link-text">Выход</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php endif; ?>
    <?php echo $content; ?>
    <?php if ($this->route['action'] != 'login'): ?>
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>&copy; 2018, qoob</small>
                </div>
            </div>
        </footer>
    <?php endif; ?>

</body>
</html>