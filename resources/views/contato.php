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
            <h1 class="display-4">Contato</h1>
            <p class="lead">Entre em contato conosco para mais informações sobre nossos cursos.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Informações de Contato</h2>
                <p><i class="fas fa-map-marker-alt"></i> Endereço:  Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo - SP, 03694-000</p>
                <p><i class="fas fa-phone-alt"></i> Telefone: (11) 2045-4000</p>
                <p><i class="fas fa-envelope"></i> Email: contato@eteczonaleste.com.br</p>
            </div>
            <div class="col-md-6">
                <h2>Formulário de Contato</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
