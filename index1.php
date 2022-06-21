<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Digital Library</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/book.ico">
    </head>
    <body style="background-image: url(./img/Back.png);"></body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <!-- Image and text -->
                    <nav class="navbar navbar-dark" style="background-color: #BE05FA;">
                        <a class="navbar-brand" href="#" style="padding-left:20px ; font-size: 30px;">
                            <div style="text-align: center;">
                                <img src="img/Logo.png" width="48" height="48" class="d-inline-block align-top" alt="">
                                <strong>
                                    Digital Library
                                </strong>
                            </div>
                        </a>
                    </nav>
                </div>      
            </div>
            <div class="row">
                <div class="col-sm">
                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #BE05FA;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav" style="padding-left:20px ;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index1.php" style="font-size: 20px; color: #D2CFD0;">
                                        <strong>
                                            Home
                                        </strong>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" style="font-size: 20px; color: #D2CFD0;">
                                    <strong>Sobre os Livros</strong>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size: 18px;">
                                        <a class="dropdown-item" href="opcao.php?opcao=1">O Morro dos Ventos Uivantes</a>
                                        <a class="dropdown-item" href="opcao.php?opcao=2">Orgulho & Preconceito</a>
                                        <a class="dropdown-item" href="opcao.php?opcao=3">O Nome do Vento</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>    
                </div>      
            </div>
            &nbsp;
            <div class="row">
                <div class="col-sm">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                        <div class="carousel-inner" >
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/3.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Próximo</span>
                        </a>
                    </div>       
                </div>      
            </div>
            &nbsp;
            <div class="row">
                <div class="col-sm" style="text-align: left; font-weight: bolder;">
                    <figure class="figure">
                        <img src="img/4.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption text-right" style="background-color: white;">O Morro dos Ventos Uivantes: Katherine & Heathcliff.</figcaption>
                    </figure>
                </div>
                <div class="col-sm" style="text-align: center; font-weight: bolder;">
                    <figure class="figure">
                        <img src="img/5.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption text-right" style="background-color: white;">Orgulho & Preconceito: Elizabeth & Mr.Darcy.</figcaption>
                    </figure>
                </div>
                <div class="col-sm" style="text-align: right; font-weight: bolder;">
                    <figure class="figure">
                        <img src="img/6.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption text-right" style="background-color: white;">O Nome do Vento: Kvothe, O Arcano.</figcaption>
                    </figure>
                </div>
            </div>  
            <div class="row">
                <div class="col-sm">
                    <nav class="navbar navbar-dark ml-auto" style="background-color: #BE05FA;"  >
                        <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
                            <strong>
                                Digital Library - Copyright 2022
                            </strong>
                        </a>
                    </nav>
                </div>
            </div>  
        </div>
    </body>
</html>