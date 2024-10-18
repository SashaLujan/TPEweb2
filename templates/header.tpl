<!DOCTYPE html>
    <html lang="en">
        <head>
            <base href="{BASE_URL}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>tu letra</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">    
                    <a class="navbar-brand" href="#"><b>tuletra.com</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <li class="nav-item active">
                                <a class="nav-link" href="listaBandas">bandas</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="listaCanciones">canciones</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="suscribirse">registrarse</a>
                            </li>
                        </ul>
                    

                        <div class="login-container">
                            <form class="d-flex" action="abrir_sesion" method="POST">
                                <input type="text" placeholder="username" name="username">
                                <input type="password" placeholder="Password" name="contraseña">
                                <button type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>