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
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
                
                    <a class="navbar-brand" href="#"><b>tuletra.com</b></a>
                    

                    
                        <ul class="navbar-nav mr-auto ">
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
            </nav>