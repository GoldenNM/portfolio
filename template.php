<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="Robin">


    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <style>
        html{
            background-color: #051A37;
        }
    </style>

    <title>Mon portfolio</title>

    <link href="./main.3f6952e4.css" rel="stylesheet">
    <link href="assets/zoombox.css" rel="stylesheet" />
</head>


<body class="minimal">
    <div id="site-border-left"></div>
    <div id="site-border-right"></div>
    <div id="site-border-top"></div>
    <div id="site-border-bottom"></div>
    <!-- Add your content of header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid w-100 p-3">
                <a class="navbar-brand" href="accueil">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cv">CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ppe">PPE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="stages">stages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="veilletechnologique">veille technologique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="hero-full-container background-image-container white-text-container" style="background-image: url('./assets/images/ordinateur.jpg')">
    <main>
        <?= $content; ?>
        </main>
    </div>
</body>

<script type="text/javascript" src="assets/zoombox.js"></script> 

  <script type="text/javascript">
jQuery(function($){
    $('a.zoombox').zoombox();

});
</script>


</html>
