<html>
    <head>
        <title>Livro <?php echo $_GET['opcao']; ?></title>
        <meta charset="UTF-8">
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
    <body style="background-image: url(img/Back.png)">
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
        </div> 
        <?php if($_GET['opcao'] == 1){ ?>
        <div class="container">    
            <div class="row">
                <div class="col-sm">
                &nbsp;    
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="bg-image hover-overlay">
                        <img class="d-block w-100" src="img/7.png" style="margin-top: 20px; border-radius: 5%; border: outset 2px black">
                    </div>
                    </br> 
                    <div style="background-color: white; padding: 15px; border-radius: 5%; border: outset 1px black">  
                        <h2 style="text-align: center;">
                            O Morro dos Ventos Uivantes
                        </h2>
                        <h5 style="text-align: center;">
                            Considerado, atualmente, um clássico da literatura inglesa, recebeu fortes críticas no século XIX.
                        </h5>
                        <h6> 
                            Autor(a): Emily Brontë 
                        </h6>
                        </br>
                        <p style="text-align: justify;">
                            “...que coisa pode existir que não esteja ligada a ela, para mim? E o que não me faz recordá-la? Não posso olhar para este chão, pois seus
                            traços estão impressos nas lajes! Em cada nuvem, em cada árvore…enchendo o ar à noite, e vislumbrada em cada objeto de dia…Estou cercado pela 
                            sua imagem! Os rostos mais comuns de homens e mulheres, meus próprios traços, debocham de mim com alguma semelhança. O mundo inteiro é uma 
                            terrível coleção de recordações de que ela existiu, e de que eu a perdi!”
                        </p>
                    </div> 
                </div>
                <div class="col-sm">
                    <div style="background-color: white; padding: 15px; margin-top: 20px; border-radius: 5%; border: outset 1px black">
                        <h3>Sobre o livro:</h3>
                        </br>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" 
                                    style="background-color: #BE05FA;">
                                        <strong style="color: white;">
                                            Sinopse
                                        </strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong> 
                                        O morro dos ventos uivantes, único romance da escritora inglesa Emily Bronte, 
                                    </strong> 
                                    retrata uma trágica historia de amor e obsessão em que os 
                                    personagens principais são a obstinada e geniosa Catherine Earnshaw e seu irmão adotivo, Heathcliff. Grosseiro, humilhado e rejeitado, 
                                    ele guarda apenas rancor no coração, mas tem com Catherine um relacionamento marcado por amor e, ao mesmo tempo, ódio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" 
                                style="background-color: #BE05FA;">
                                    <strong style="color: white;">
                                        O Autor
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong>
                                        Emily Jane Brontë, 
                                    </strong> 
                                    (Thornton, Inglaterra, 30 de julho de 1818 — Haworth, Inglaterra, 19 de dezembro de 1848) foi uma escritora e poetisa britânica, 
                                    autora do romance Wuthering Heights (O Morro dos Ventos Uivantes), hoje considerado um clássico da literatura mundial. Era a segunda 
                                    irmã mais velha das três sobreviventes irmãs Brontë, entre Charlotte e Anne. Ela escrevia sob o pseudônimo masculino Ellis Bell.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" 
                                style="background-color: #BE05FA;">
                                    <strong style="color: white;">
                                        O Livro    
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong>
                                        Para acessar o livro, <a href="https://www.ufmg.br/centrocultural/wp-content/uploads/2020/05/1-O-Morro-Dos-Ventos-Uivantes-Emily-Bront%C3%AB.pdf" target="_blank" style="text-decoration: none; color: gray;">clique aqui</a>.
                                    </strong>        
                                </div>
                            </div>
                        </div>
                        </br>
                        </br>
                        <h5 style="text-align: center;">Cultive o hábito da leitura! <img src="img/10.png"  width="35" height="30"></h5> 
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-sm">
                &nbsp;    
                </div>
            </div>
        </div>   
    
        <?php }elseif($_GET['opcao'] == 2){ ?>
        <div class="container">     
            <div class="row">
                <div class="col-sm">
                &nbsp;    
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <img class="d-block w-100" src="img/8.png" style="margin-top: 20px; border-radius: 5%; border: outset 2px black">
                    </br>  
                    <div style="background-color: white; padding: 15px; border-radius: 5%; border: outset 1px black">    
                        <h2 style="text-align: center;">
                            Orgulho & Preconceito
                        </h2>
                        <h5 style="text-align: center;">
                            O clássico da literatura mais atemporal e livro mais famoso da autora, traz personagens memoráveis, de personalidades intrigantes e, ao mesmo tempo, extremamente cativantes.
                        </h5>
                        <h6>
                            Autor(a): Jane Austen
                        </h6>
                        </br>
                        <p style="text-align: justify;">
                            “A vaidade e o orgulho são coisas diferentes, embora as palavras sejam frequentemente usadas como sinônimos. Uma pessoa pode ser orgulhosa sem 
                            ser vaidosa. O orgulho se relaciona mais com a opinião que temos de nós mesmos, e a vaidade, com o que desejaríamos que os outros pensassem de 
                            nós.”
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div style="background-color: white; padding: 15px; margin-top: 20px; border-radius: 5%; border: outset 1px black">
                        <h3>Sobre o livro:</h3>
                        </br>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" 
                                    style="background-color: #BE05FA;">
                                        <strong style="color: white;">
                                            Sinopse
                                        </strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong> 
                                        Ao contrário de sua mãe, que anima-se diante de qualquer bonitão com uma boa herança à vista,
                                    </strong> 
                                    Elizabeth Bennet não se deixa levar pelas aparências. Antes de considerar qualquer um como um bom partido, para além de fortuna e 
                                    propriedades, Lizzie investiga aspectos que considera muito mais importantes: reputação e caráter. Por isso, ao ser apresentada ao rico e arrogante Fitzwilliam Darcy, sua única reação é o desprezo. Conhecê-lo melhor, porém, pode abalar as perspectivas de Elizabeth.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" 
                                style="background-color: #BE05FA;">
                                    <strong style="color: white;">
                                        O Autor
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong>
                                        Jane Austen,  
                                    </strong> 
                                    (Steventon, Inglaterra, 16 de dezembro de 1775 — Winchester, Inglaterra, 18 de julho de 1817) foi uma escritora inglesa. A ironia que
                                     utilizou para descrever as personagens dos seus romances coloca-a entre os clássicos, haja vista, a sua aceitação, inclusive na 
                                     atualidade, sendo constantemente objeto de estudo acadêmico, alcançando um público bastante amplo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" 
                                style="background-color: #BE05FA;">
                                    <strong style="color: white;">
                                        O Livro    
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong>
                                        Para acessar o livro, <a href="https://lelivros.love/book/download-livro-orgulho-e-preconceito-jane-austen-em-epub-mobi-e-pdf/" target="_blank" style="text-decoration: none; color: gray; ">clique aqui</a>
                                    </strong>        
                                </div>
                            </div>
                        </div>
                        </br>
                        </br>
                        <h5 style="text-align: center;">Cultive o hábito da leitura! <img src="img/10.png"  width="35" height="30"></h5>  
                    </div>    
                </div>
            </div>
        </div>
    
        <?php }else{?>
        <div class="container">     
            <div class="row">
                <div class="col-sm">
                &nbsp;    
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <img class="d-block w-100" src="img/9.png" style="margin-top: 20px; border-radius: 5%; border: outset 2px black">
                    </br>   
                    <div style="background-color: white; padding: 15px; border-radius: 5%; border: outset 1px black">   
                        <h2 style="text-align: center;">
                            O Nome do Vento
                        </h2>
                        <h5 style="text-align: center;">
                            O primeiro livro da série intitulada A Crônica do Matador do Rei. Publicado no Brasil em 2009, pela Editora Arqueiro.
                        </h5>
                        <h6>
                            Autor(a): Patrick Rothfuss 
                        </h6>
                        </br>
                        <p style="text-align: justify;">
                            “Dele era a Pousada Marco do Percurso, como dele era também o terceiro silêncio. Era apropriado que assim fosse, pois esse era o maior silêncio dos
                            três, englobando os outros dentro de si. Era profundo e amplo como o fim do outono. Pesado como um pedregulho alisado pelo rio. Era o som paciente
                            – som de flor colhida – do homem que espera a morte.”
                        </p>
                    </div> 
                </div>
                <div class="col-sm">
                    <div style="background-color: white; padding: 15px; margin-top: 20px; border-radius: 5%;  border: outset 1px black">
                        <h3>Sobre o livro:</h3>
                        </br>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" 
                                        style="background-color: #BE05FA;">
                                        <strong style="color: white;">
                                            Sinopse
                                        </strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong> 
                                        Um homem enigmático que se esconde sob a identidade de proprietário da hospedaria Marco do Percurso.
                                    </strong> 
                                    Da infância numa trupe de artistas itinerantes, passando pelos anos vividos numa cidade hostil e pelo esforço para ingressar na escola 
                                    de magia, O nome do vento acompanha a trajetória de Kote e as duas forças que movem sua vida: o desejo de aprender o mistério por trás 
                                    da arte de nomear as coisas e a necessidade de reunir informações sobre o Chandriano – os lendários demônios que assassinaram sua família 
                                    no passado.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" 
                                style="background-color: #BE05FA;">
                                    <strong style="color: white;">
                                        O Autor
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong>
                                        Patrick James Rothfuss,
                                    </strong> 
                                    (mais conhecido simplesmente como Patrick Rothfuss ou Pat Rothfuss; Madison, Wisconsin, EUA, 6 de junho de 1973) é um escritor de fantasia 
                                    americano. Ele é o autor da série A Crônica do Matador do Rei. O primeiro livro da série, uma trilogia, O Nome do Vento, que é também seu 
                                    romance de estreia, fez grande sucesso e foi aclamado pela crítica, entrando para a lista dos mais vendidos do New York Times. O segundo 
                                    livro da série, The Wise Man's Fear (no Brasil traduzido como "O Temor do Sábio"), foi publicado em 1º de março de 2011 nos Estados Unidos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" 
                                style="background-color: #BE05FA;">
                                    <strong style="color: white;">
                                        O Livro    
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="background-color: #ECB5FE;">
                                    <strong>
                                        Para acessar o livro, <a href="https://lelivros.love/book/download-o-nome-do-vento-a-cronica-do-matador-do-rei-vol-1-patrick-rothfuss-em-epub-mobi-e-pdf/" target="_blank" style="text-decoration: none; color: gray;">clique aqui</a>.
                                    </strong>        
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    </br>
                    <h5 style="text-align: center;">Cultive o hábito da leitura! <img src="img/10.png"  width="35" height="30"></h5> 
                </div>
            </div>       
        <?php } ?>
        <div class="row">
            <div class="col-sm">
                <nav class="navbar navbar-dark ml-auto" style="background-color: #BE05FA; margin-top: 25px;">
                    <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
                        <strong>
                             Digital Library - Copyright 2022
                        </strong>
                    </a>
                </nav>
            </div>  
        </div>
    </body>
</html>