<?php
// Autoloader des classes
require './class/autoloader.class.php';
Autoloader::register();

$articles = new Article();
?>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">


    <title>POO PHP by Coding Factory</title>
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <img src="./media/logo.png" alt="" style="width: 50px; margin: 0px 20px 0px 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" id="navbar">
                <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#class">Classes et méthodes</a>
                <a class="nav-item nav-link" href="#acess">Acesseurs, mutateurs, constructeur et hydrate</a>
                <a class="nav-item nav-link" href="#reso">Résolution de portée</a>
                <a class="nav-item nav-link" href="#heri">Héritage</a>
                <a class="nav-item nav-link" href="#int">Interface</a>
                <a class="nav-item nav-link" href="#auto">Autoloader</a>
                <a class="nav-item nav-link" href="#propos">A propos</a>
            </div>
        </div>
    </nav>

    <!-- Header = Story 1 --->

        <?php
        foreach($articles->fetchAll() as $article) {
            echo $article["content"];
        }
        ?>
    <!-- Story 8 --->
    <section class="container-fluid" id="propos">
        <div class="row d-flex justify-content-center">
            
            <?php
                $readLogo = new Media();
                $readLogo->setId(10);
                $result = $readLogo->fetch();
                ?>
                
                <div class="col-2 text-center">
                    <a href="https://github.com/BenGrandin">
                    <img class="lkd" src="admin/assets/plugins/jquery.filer/uploads/<?php echo $result['name'] . '.' . $result['type'] ?>">
                    <h4>Benjamin Grandin</h4>
                    </a>
                </div>
                <div class="col-2 text-center">
                    <a href="https://github.com/DoryanLievre">
                    <img class="lkd" src="admin/assets/plugins/jquery.filer/uploads/<?php echo $result['name'] . '.' . $result['type'] ?>">
                    <h4>Doryan Lièvre</h4>
                    </a>
                </div>
                <div class="col-2 text-center">
                    <a href="https://github.com/CedricLphn">
                    <img class="lkd" src="admin/assets/plugins/jquery.filer/uploads/<?php echo $result['name'] . '.' . $result['type'] ?>">
                    <h4>Cedric Leprohon</h4>
                    </a>
                </div>
                <div class="col-2 text-center">
                    <a href="https://github.com/Flow2dot0">
                    <img class="lkd" src="admin/assets/plugins/jquery.filer/uploads/<?php echo $result['name'] . '.' . $result['type'] ?>">
                    <h4>Florian Gustin</h4>
                    </a>
                </div>
                
        </div>
    </section>

    <script src="vendor/jquery-3.3.1.min.js"></script> <!-- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
        $(document).ready(function() {
            $('#navbar a').click(function(e) {

                var targetHref = $(this).attr('href');

                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top
                }, 1000);

                e.preventDefault();
            });
        });
    </script>
</body>

</html>
