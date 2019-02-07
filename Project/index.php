<?php
function my_autoloader($class)
{
	require 'class/' . $class . '.php';
}
spl_autoload_register('my_autoloader');
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
        <img src="./media/logo.png" alt="" style="width: 50px; margin-right: 50px;">
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

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Bonjour.</h1>
                <p class="lead">Le projet des 4 Fantastiques à pour objet de présenter de manière concrète la POO en PHP. Ce site est entièrement fabriqué en orienté objet.</p>
                <p class="lead">Ce projet est fait dans les locaux de la Coding Factory par Benjamin, Doryan, Cédric et (Florian)</p>
                <p class="lead">Το έργο Fantastic 4 στοχεύει να παρουσιάσει συγκεκριμένα το OOP στην PHP. Αυτός ο ιστότοπος έχει κατασκευαστεί εξ ολοκλήρου σε αντικειμενοστραφή.

Το έργο αυτό γίνεται στις εγκαταστάσεις του Εργοστασίου Κωδικοποίησης από τον Benjamin, Doryan, Cédric και (Florian)</p>
            </div>
        </div>

            <!-- Story 2 --->
            <section class="container-fluid" id="class">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11"><h2>Les classes et méthodes version procédurale et POO</h2></div>
                </div>

                <!-- POO's way -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code class="php">
    Class Pays {
        protected $name;
        protected $flag;
        protected $language;

        public function describe()
        {
        $description =  $name
          + " parle " + $language
          + " a le drapeau " + $drapeau;

        return $description;
        }
    }
                        </code></pre>
                    </div >
                    <div class="col-1"></div>
                    <div class="col-5 explanations"><p>Une <i>classe</i> PHP est un ensemble de code cohérent permettant de définir de manière abstraite un objet.</p>
                    <p>Les <i>classes</i> en orientée objet sont réutilisable dans le sens, où, si je donne ma <i>classe</i> à une personne, il sera en mesure de l'utiliser sans avoir à l'adapter.</p>
                    <p>Ces <i>classes</i> contiennent des <i>attibuts</i> correspondants à des <i>propriétés</i> et des <i>méthodes</i> correspondant à des fonctions.</p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <!-- Functional's way -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                        <p>De manière procédurale, on ne peut pas instancier d'objet,</p><p> ce qui ne permet pas de personification.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>
function describe($name, $flag, $language)
    {
        $pays = $name + " parle "
        + $language + " a le drapeau " + $flag;

        return $pays;
    }
                        </code></pre>
                    </div>
                    <div class="col-1"></div>
                </div>

            </section>
            <!-- Story 3 --->
            <section class="container-fluid greybk_whitecolor" id="acess">
                <div class="row">
                <div class="col-11 text-right"><h2>Accesseurs, mutateurs, constructeur et hydratation</h2></div>
                <div class="col-1"></div>
                </div>
                <!-- Setters -->
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Setters</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>
  function setName (x)      {
    if(is_string($name)) $this->name = x;
  }
  function setFlag (x)      {
    if(is_string($name)) $this->flag = x;
  }
  function setLanguage (x)  {
    if(is_string($name)) $this->name = x;
  }
                          </code></pre>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                        <p>Les <i>setters</i> servent à définir les attributs.</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Getters -->
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Getters</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                        <p>Les <i>getters</i> servent à accéder aux attributs.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>
  function getName      { return $this->name;}
  function getFlag      { return $this->flag;}
  function getLanguage  { return $this->language;}
                        </code></pre>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Constructor -->
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Constructor</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>
function __construct($name, $flag, $language){
  $this->setName($name);
  $this->setFlag($flag);
  $this->setLanguage($language);
}
                        </code></pre>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                        <p>Le <i>constructeur</i> permet d'instancier un nouvel objet à partir de la <i>classe</i>. En PHP, il est toujours définit par la <i>fonction __constructor()</i> .</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Hydrate -->
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Hydrate</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5 explanations">
                        <p>L'<i>hydratation</i> sert à définir les valeurs des attributs grâce à un tableau.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 examples">
                        <pre><code>
public function hydrate(array $data){
  foreach($data as $key => $value){
    $method = 'set'.ucfirst($key);
    if(method_exists( $this, $method)){
      $this->$method($value);
    }

  }
}
                        </code></pre>
                    </div>
                    <div class="col-1"></div>
                </div>
            </section>


    <!-- Story 4 --->
    <section class="container-fluid" id="reso">
    <div class="row">
            <div class="col-1"></div>
            <div class="col-11"><h2>Résolution de portée</h2></div>
        </div>


        <!-- Self -->
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Static</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">
class Pays {
    public function static helloCountry($name) {
        return "Bonjour " + $name + " ! ";
    }
}

// Bonjour France !
echo Pays::helloCountry("France");
                </code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <p><i>"static"</i> permet d'appeler une fonction dans une <i>classe</i> sans devoir l'instancier.</p></div>
            <div class="col-1"></div>
        </div>


         <!-- Static -->
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Self</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-1"></div>
            <div class="col-5 explanations">
                <p><i>"self"</i> permet d'utiliser des attributs ou des fonctions statiques.</p>
                <p>Cette dernière est utilisable uniquement dans des fonctions statiques.</p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code>
class Pays {
    private static $_pays = "France";

    public static function showCountry() {
        return self::$_pays;
    }
}

Pays::showCountry();
                </code></pre>
            </div>
            <div class="col-1"></div>
        </div>
         <!-- This -->
         <div class="row">
            <div class="col-12 text-center">
                <h3>This</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code>
class Pays {
    private $_name = "France";
    private $_citizen = 50;

    function addCitizen($nb) {
        $this->name += nb;
        return $this->name;
    }
}

$Fr = new Pays();
$Fr->addCitizen(10); // 60
                </code></pre>
            </div>
            <div class="col-1"></div>

            <div class="col-5 explanations">
                <p><i>"this"</i> permet de travailler sur des variables issues d'une <i>classe</i>.</p>
            </div>

            <div class="col-1"></div>
        </div>

        <!-- Parent -->
        <div class="row">
            <div class="col-12 text-center">
                <h3>Parent</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>

            <div class="col-5 explanations">

            <p><i>"parent"</i> permet d'appeler une fonction ou une variable issue d'une <i>classe</i> parente.</p>
        <p>Par exemple si une fonction est déclarées à la fois dans une <i>classe A</i> et dans une <i>classe B</i> héritée de la <i>classe A</i>, l'utilisation de parent permettra le traitement de la fonction ou variable de la <i>classe A</i> (et non de la <i>classe B</i>).</p></div>
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">
Class Pays {
    protected $name = "France";
    protected $flag;
    protected $language;

    public function describe()
    {
        $description =  $name
        + " parle " + $language
        + " a le drapeau " + $drapeau;

        return $description;
    }
}

Class Region extends Pays
{
    protected $name;
    protected $flag;
    protected $language;

    function __construct($name) {
        $this->name = $name;
    }

    public function getRegion() {
        return $this-name;
    }

    public function getPays() {
        // Retourne la variable $name de la class parente
        return parent::$name;
    }
}

$bretagne = new Region("Bretagne");
$bretagne->getRegion(); // Bretagne
$bretagne->getPays(); // France
                </code></pre>
            </div>
        </div>





    </section>
    <!-- Story 5 --->
    <section class="container-fluid greybk_whitecolor" id="heri">
        <div class="row">
            <div class="col-11 text-right"><h2>Héritage</h2></div>
            <div class="col-1"></div>
        </div>
    <!-- Heritage -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">
    Class Pays {
        protected $name;
        protected $flag;
        protected $language;

        public function describe()
        {
        $description =  $name
          + " parle " + $language
          + " a le drapeau " + $drapeau;

        return $description;
        }
    }

    Class Region extends Pays{}


    $bretagne = new.Region("bretagne",
          "drapeauBreton", "breton");

    $bretagne->describe();

                </code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <p><i>L'héritage</i> permet à une <i>classe B</i> fille d'hériter d'une <i>classe A</i> Mère les attributs et méthodes de celle-ci.</p>
            <p>Si l'on déclare des méthodes dans la <i>classe A</i>, et qu'on crée une instance de la <i>classe B</i>,</p>
            <p>alors on pourra appeler n'importe quelle méthode déclarée dans la class A du moment qu'elle est publique.</p>
            <p></p>
            <p>L'attribut <i>Protected</i> des méthodes signifie que les méthodes sont accèssible uniquement à l'intérieur des <i>classes</i>.</p>
            </div>
            <div class="col-1"></div>
        </div>

    </section>
    <!-- Story 6 --->
    <section class="container-fluid" id="int">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11"><h2>Interface</h2></div>
        </div>

         <!-- Interface -->
         <div class="row">
            <div class="col-1"></div>
            <div class="col-5 explanations">
                <p>Un <i>Interface</i> permet de définir une ou plusieurs méthodes obligatoires pour une ou plusieurs <i>classes</i>.</p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code>
    interface Red_phone
    {
      public function talk(string $string);
    }

    class Personnage implements Red_phone { }
        </code></pre>
            </div>
            <div class="col-1"></div>
        </div>
    </section>
    <!-- Story 7 --->
    <section class="container-fluid greybk_whitecolor" id="auto">

        <div class="row">
            <div class="col-11 text-right"><h2>Autoloader</h2></div>
            <div class="col-1"></div>
        </div>
            <!-- Autoloader -->
            <div class="row">
            <div class="col-1"></div>
            <div class="col-4 examples">
                <pre><code class="php">
    // SANS autoloader
    require "class/Pays.php";
    require "class/Region.php";
    //require ......

    $France = new Pays();
    $Bretagne = new Region();

    // Avec autoloader
    function my_autoloader($class)
    {
        // class/France.php -- cas 1
        // class/Region;php -- cas 2
        include 'class/' . $class . '.php';
    }

    spl_autoload_register('my_autoloader');

    $France = new France(); // -- cas 1
    $Bretagne = new Region(); // -- cas 2
                </code></pre>
            </div>
            <div class="col-1"></div>
            <div class="col-5 explanations">
            <p> <i>L'autoloader</i> est une fonction permettant de charger automatiquement les <i>classes</i>,</p>
            <p>ce qui permet de ne pas appeler les fichiers de <i>classe</i>.</p>
            <p>Pour ce faire, il appelera une fonction (ici my_autoloader) qui s'enclenchera dès qu'on fera appel à une <i>classe</i>.</p>
            </div>
            <div class="col-1"></div>
        </div>

    </section>
    <!-- Story 8 --->
    <section class="container-fluid" id="propos">
        <div class="row">
            <div class="col-12 d-flex justify-content-around">
                <a href="https://github.com/BenGrandin"><h4>Benjamin Grandin</h4></a>
                <a href="https://github.com/DoryanLievre"><h4>Doryan Lièvre</h4></a>
                <a href="https://github.com/CedricLphn"><h4>Cedric Leprohon</h4></a>
                <a href="https://github.com/Flow2dot0"><h4>Florian Gustin</h4></a>
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
