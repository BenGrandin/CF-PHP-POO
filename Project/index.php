<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/default.min.css">
    

    <title>POO PHP by Coding Factory</title>
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Story 2</a>
                <a class="nav-item nav-link" href="#">Story 3</a>
                <a class="nav-item nav-link" href="#">Story 4</a>
                <a class="nav-item nav-link" href="#">Story 5</a>
                <a class="nav-item nav-link" href="#">Story 6</a>
                <a class="nav-item nav-link" href="#">Story 7</a>
                <a class="nav-item nav-link" href="#">A propos</a>
            </div>
        </div>
    </nav>
    <!-- Header = Story 1 --->

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Bonjour.</h1>
                <p class="lead">Partially, but it also obeys your commands. I call it luck. As you wish. Your eyes can deceive you. Don't trust them.</p>
                <p class="lead">You don't believe in the Force, do you? You don't believe in the Force, do you? <strong> What!?</strong> <em> You're all clear, kid.</em> Let's blow this thing and go home!</p>
            </div>
        </div>

            <!-- Story 2 --->
            <section class="container-fluid">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11"><h2>Les classes et méthodes version procédurale et POO</h2></div>
                </div>
                
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code class="php">
            Class Pays {
                protected $flag; 
                            
                public function describe()
                {
                    return "String";
                }
            }
                        </code></pre>
                    </div >
                    <div class="col-1"></div>
                    <div class="col-5 explanations"><p>Une classe PHP est un ensemble de code cohérent permettant de définir de manière abstraite un objet.</p>
                    <p>Les classes en orientée objet sont réutilisable dans le sens, où, si je donne ma classe à une personne, il sera en mesure de l'utiliser sans devoir à l'adapter.</p>
                    <p>Ces classes contiennent des attibutes correspondants à des propriétés et des méthodes correspondant à des fonctions.</p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>function lorem() {
                            echo "salut"; }</code></pre>
                    </div>
                    <div class="col-1"></div>
                </div>

            </section>
            <!-- Story 3 --->
            <section class="container-fluid">
                <div class="row">
                <div class="col-11 text-right"><h2>Accesseurs, mutateurs, constructeur et hydratation</h2></div>
                <div class="col-1"></div>
                </div>
                <!-- Setters -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>function lorem() {
                            echo "salut"; }</code></pre>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                            <h3>Setters</h3>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Getters -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                            <h3>Getters</h3>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>function lorem() {
                            echo "salut"; }</code></pre>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Constructor -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>function lorem() {
                            echo "salut"; }</code></pre>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                            <h3>Constructor</h3>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Hydrate -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                            <h3>Hydrate</h3>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>function lorem() {
                            echo "salut"; }</code></pre>
                    </div>
                    <div class="col-1"></div>
                </div>
            </section>


    <!-- Story 4 --->
    <section class="container-fluid">
    <div class="row">
            <div class="col-1"></div>
            <div class="col-11"><h2>Résolution de portée</h2></div>
        </div>


        <!-- Self -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">echo "salut";</code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <h3>Self</h3>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p></div>
            <div class="col-1"></div>
        </div>


         <!-- Static -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <h3>Static</h3>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code>function lorem() {
                    echo "salut"; }</code></pre>
            </div>
            <div class="col-1"></div>
        </div>


        <!-- Parent -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">echo "salut";</code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <h3>Parent</h3>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p></div>
            <div class="col-1"></div>
        </div>


         <!-- This -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <h3>This</h3>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code>function lorem() {
                    echo "salut"; }</code></pre>
            </div>
            <div class="col-1"></div>
        </div>


    </section>
    <!-- Story 5 --->
    <section class="container-fluid">
        <div class="row">
            <div class="col-11 text-right"><h2>Heritage</h2></div>
            <div class="col-1"></div>
        </div>
    <!-- Heritage -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">echo "salut";</code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p></div>
            <div class="col-1"></div>
        </div>

    </section>
    <!-- Story 6 --->
    <section class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11"><h2>Interface</h2></div>
        </div>

         <!-- Interface -->
         <div class="row">
            <div class="col-1"></div>
            <div class="col-5 explanations">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code>function lorem() {
                    echo "salut"; }</code></pre>
            </div>
            <div class="col-1"></div>
        </div>
    </section>
    <!-- Story 7 --->
    <section class="container-fluid">

        <div class="row">
            <div class="col-11 text-right"><h2>Autoloader</h2></div>
            <div class="col-1"></div>
        </div>
            <!-- Autoloader -->
            <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">echo "salut";</code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p></div>
            <div class="col-1"></div>
        </div>

    </section>
    <!-- Story 8 --->
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-around">
                <a href="https://github.com/BenGrandin">Benjamin Grandin</a>
                <a href="https://github.com/DoryanLievre">Doryan Lièvre</a>
                <a href="https://github.com/CedricLphn">Cedric Leprohon</a>
                <a href="https://github.com/Flow2dot0">Florian Gustin</a>
            </div>
        </div>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>

</html>