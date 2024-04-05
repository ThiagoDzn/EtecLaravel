<!DOCTYPE html>
<html>
<head>
    <title>ETEC Zona Leste</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
            <h1 class="display-4">Quem Somos</h1>
            <p class="lead">Somos a ETEC Zona Leste, uma instituição de ensino técnico comprometida em fornecer educação de alta qualidade</p>
            <hr class="my-4">
            <p>Desde a nossa fundação, em 2008, temos formado profissionais capacitados e preparados para os desafios do mercado de trabalho.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Nossa Missão</h2>
                <p>Nossa missão é proporcionar uma educação técnica de excelência, aliando teoria e prática, preparando nossos alunos para os desafios do mundo moderno.</p>
            </div>
            <div class="col-md-6">
                <h2>Nossa Visão</h2>
                <p>Nossa visão é ser reconhecida como uma das melhores instituições de ensino técnico da região, formando profissionais qualificados e éticos.</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Nossos Valores</h2>
                <ul>
                    <li><i class="fas fa-check"></i> Excelência acadêmica</li>
                    <li><i class="fas fa-check"></i> Respeito e ética</li>
                    <li><i class="fas fa-check"></i> Inovação e criatividade</li>
                    <li><i class="fas fa-check"></i> Comprometimento com o desenvolvimento dos alunos</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Nossos Professores</h2>
                <p>Nossos professores são altamente qualificados e experientes em suas áreas de atuação, garantindo um ensino de qualidade e atualizado com as demandas do mercado.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
