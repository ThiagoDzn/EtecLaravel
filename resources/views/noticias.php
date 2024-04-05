<!DOCTYPE html>
<html>
<head>
    <title>ETEC Zona Leste</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
       
        .jumbotron {
            background-color: #f8f9fa;
            padding: 4rem 2rem;
            margin-bottom: 3rem;
        }
        h2 {
            color: #343a40;
        }
        p {
            color: #6c757d;
        }
    </style>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">ETEC Zona Leste </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quemsomos">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/noticias">Notícias</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Notícias</h1>
            <p class="lead">Fique por dentro das últimas novidades da ETEC Zona Leste.</p>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                <img src="https://scontent-gru2-1.xx.fbcdn.net/v/t39.30808-6/435674854_18317659252133449_7878305207035764075_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=kOB4E6xtlb4Ab6j-kQr&_nc_ht=scontent-gru2-1.xx&oh=00_AfDX3pl381pOGGRJegyVU21BT_0YvuCxMx_JavaKTb1emQ&oe=66151EA3" alt="Descrição da Imagem">
                    <div class="card-body">
                        <h5 class="card-title">Inscrições Abertas para o Vestibulinho</h5>
                        <p class="card-text">As inscrições para o vestibulinho da ETEC Zona Leste estão abertas! Garanta sua vaga e venha fazer parte da nossa instituição.</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
